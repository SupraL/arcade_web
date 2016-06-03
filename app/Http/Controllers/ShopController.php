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
        $cartArray = array('productCount'=>0,'totalPrice'=>0);
        //Session::forget('cart_productList');
        //Session::push('cart_productList',array('productID'=>'prd00001','quantity'=>'3'));
        //Session::push('cart_productList',array('productID'=>'prd00002','quantity'=>'2'));
        if(Session::has('cart_productList')){
            $totalPrice = 0;
            $cartCount = count(Session::get('cart_productList'));
            $cartArray['productCount'] = $cartCount;
            for($i = 0;$i < $cartCount;$i++){
                $productData = DB::table('products')->where('productID',Session::get('cart_productList')[$i]['productID'])->first();
                $totalPrice += $productData->price * Session::get('cart_productList')[$i]['quantity'];
            }
            $cartArray['totalPrice'] = $totalPrice;
        }
        return view('shopIndex')->with("productList",$productList)->with("gameList",$gameList)->with('cartArray',$cartArray);
    }
    public function doUpdateCartQuantity(){
        $errorCode = 0;
        $updateType = Input::get('updateType');
        $productID = Input::get('productID');
        $cartProductList = Session::get('cart_productList');
        if($updateType == "minus"){
            for($i = 0; $i < count($cartProductList);$i++){
                if($cartProductList[$i]['productID'] == $productID){
                    if($cartProductList[$i]['quantity'] > 1) {
                        $cartProductList[$i]['quantity'] = $cartProductList[$i]['quantity'] - 1;
                        Session::put('cart_productList', $cartProductList);
                        $errorCode = -1;
                    } else {
                        $errorCode = -2;
                    }
                }
            }
        }
        if($updateType == "plus"){
            for($i = 0; $i < count($cartProductList);$i++){
                if($cartProductList[$i]['productID'] == $productID){
                    $cartProductList[$i]['quantity'] = $cartProductList[$i]['quantity'] + 1;
                    Session::put('cart_productList',$cartProductList);
                    $errorCode = -1;
                }
            }
        }
        return Redirect::to('/shoppingCart')->with('errorCode',$errorCode)->with('type','updateCart');
    }
    public function getShoppingCartPage(){
        $cartProductList = Session::get('cart_productList');
        $productArray = array();
        $totalPrice = 0;
        for($i = 0; $i < count($cartProductList);$i++){
            $productData = DB::table('products')->where('productID',$cartProductList[$i]['productID'])->first();
            if(!empty($productData)) {
                array_push($productArray, $productData);
                $totalPrice += $productData->price;
            }
        }
        return view('shoppingCart')->with('productArray',$productArray)->with('cart_productList',$cartProductList)->with('totalPrice',$totalPrice);
    }
    public function addToCart(){
        $errorCode = -2;
        $isExists = false;
        $productID = Input::get('productID');
        $quantity = 1;
        $productData = DB::table('products')->where('productID',$productID)->first();
        if(empty($productData)){
            $errorCode = 2;
            return Redirect::to('/shop')->with('errorCode',$errorCode);
        } else {
            $cartProductList = Session::get('cart_productList');
            for($i = 0; $i < count($cartProductList);$i++){
                if($cartProductList[$i]['productID'] == $productID){
                    $cartProductList[$i]['quantity'] = $cartProductList[$i]['quantity'] + 1;
                    Session::put('cart_productList',$cartProductList);
                    $isExists = true;
                }
            }
            if(!$isExists) {
                Session::push('cart_productList', array('productID' => $productID, 'quantity' => $quantity));
            }
        }
        return Redirect::to('/shop')->with('errorCode',$errorCode);
    }
    public function removeFromCart(){
        $errorCode = 1;
        $productID = Input::get('productID');
        $cartArray = Session::get('cart_productList');
        for($i = 0; $i < count($cartArray);$i++){
            if($cartArray[$i]['productID'] == $productID){
                $errorCode = -1;
                array_splice($cartArray, $i, 1);
                Session::put('cart_productList',$cartArray);
            }
        }

        return Redirect::to('/shoppingCart')->with('errorCode',$errorCode)->with('type','del');
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
    public function doCartCheckout(){
        
    }
    public function doPlaceOrder(){
        $errorCode = -1;
        $productID = Input::get('productID');
        $quantity = Input::get('quantity');
        $uid = Session::get('userID');
        $userData = DB::table('users')->where('userID',$uid)->first();
        $productDetails = DB::table('products')->where('productID',$productID)->where('available','1')->first();
        if(empty($productDetails)){
            $errorCode = 2;
            return Redirect::to('/shop')->with('errorCode',$errorCode);
        }
        $totalPrice = $productDetails->price * $quantity;
        $paymentMethodID = Input::get('paymentMethodOptions');

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
                    'statusID' => 'sts00001',
                    'methodID' => $paymentMethodID)
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