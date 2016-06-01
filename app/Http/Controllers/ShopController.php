<?php namespace App\Http\Controllers;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models;
use DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class ShopController extends Controller
{
    public function doShop(){
        $productList = DB::table('products')->join('games','products.gameID','=','games.gameID')->where('available','1')->get();
        $gameList = DB::table('games')->get();
        return view('shopIndex')->with("productList",$productList)->with("gameList",$gameList);
    }
    public function doProductDetails($id){
        try {
            $productCount = DB::table('products')->join('games', 'products.gameID', '=', 'games.gameID')->where('products.productID', $id)->where('products.available', '1')->count();
            if($productCount != 1){
                return Redirect::to('/shop');
            }
        }catch (QueryException $e){
            return Redirect::to('/shop');
        }


        $productData = DB::table('products')->join('games','products.gameID','=','games.gameID')->where('products.productID',$id)->first();
        return view('viewProduct')->with('productData',$productData);
    }
    public function doPlaceOrder(){
        $errorCode = -1;
        $productID = Input::get('productID');
        $quantity = Input::get('quantity');
        $uid = Session::get('userID');
        $userData = DB::table('users')->where('userID',$uid)->first();
        $productDetails = DB::table('products')->where('productID',$productID)->first();
        $totalPrice = $productDetails->price * $quantity;

        $orderID = DB::table('orders')->max('orderID');

        if(!empty($orderID)){
            $orderID = 'ord' . sprintf("%05d", (intval(substr($orderID, -5)) + 1));
        } else {
            $orderID = 'ord00001';
        }

        if($productDetails->price > $userData->cashPoint){
            $errorCode = 1;
            //not enough money
        } else {
            DB::table('orders')->insert(
                array('orderID' => $orderID,
                    'uid' => $uid,
                    'totalPrice' => $totalPrice,
                    'orderDateTime' => date('Y-m-d H:i:s'),
                    'statusID' => 'sts00001')
            );
            DB::table('orderproduct')->insert(
                array('orderID' => $orderID,
                    'productID' => $productDetails->productID,
                    'quantity' => $quantity)
            );
            
            DB::table('users')->where('userID',$uid)->update(
              array(
                  'cashPoint' => DB::raw($userData->cashPoint - $totalPrice)
              )  
            );
            Session::put('cashPoint',$userData->cashPoint - $totalPrice);
        }
        return Redirect::to('/shop')->with('errorCode',$errorCode);
    }
}