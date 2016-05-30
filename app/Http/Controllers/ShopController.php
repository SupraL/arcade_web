<?php namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models;
use DB;

class ShopController extends Controller
{
    public function doShop(){
        $productList = DB::table('products')->join('games','products.gameID','=','games.gameID')->get();
        $gameList = DB::table('games')->get();
        return view('shopIndex')->with("productList",$productList)->with("gameList",$gameList);
    }
    public function doProductDetails($id){
        $productData = DB::table('products')->join('games','products.gameID','=','games.gameID')->where('products.productID',$id)->first();
        return view('viewProduct')->with('productData',$productData);
    }
}