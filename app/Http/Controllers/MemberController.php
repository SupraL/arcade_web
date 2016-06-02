<?php namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models;
use DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;

class MemberController extends Controller
{
    public function doMember(){
        if(Session::has('userID')){
            $userID = Session::get('userID');
            $username = Session::get('username');
            $email = Session::get('email');
            $typeID = Session::get('typeID');
            $redeemRecordList = DB::table('redeemcardrecord')->join('cashcards','cashcards.cardID','=','redeemcardrecord.cardID')->join('products','products.productID','=','cashcards.productID')->where('uid',$userID)->get();
            $orderRecordList = DB::table('orders')->join('orderproduct','orderproduct.orderID','=','orders.orderID')->join('products','products.productID','=','orderproduct.productID')->join('orderstatus','orderstatus.statusID','=','orders.statusID')->join('paymentMethod','paymentMethod.methodID','=','orders.methodID')->where('orders.uid',$userID)->get();
            $userData = DB::table('users')->where('userid',$userID)->first();
            return view('member')->with('userID',$userID)->with('username',$username)->with('email',$email)->with('typeID',$typeID)->with('redeemRecordList',$redeemRecordList)->with('orderRecordList',$orderRecordList)->with('userData',$userData);
        }else{
            return view('login');
        }
    }

    public function doRecord(){

    }
}
?>