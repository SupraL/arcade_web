<?php namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models;
use DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Session;

class OrderController extends Controller
{
    public function showOrderPage(){
        $orderList = DB::table('orders')->join('orderstatus','orderstatus.statusID','=','orders.statusID')->join('paymentmethod','paymentmethod.methodID','=','orders.methodID')->join('forum_common_member','forum_common_member.uid','=','orders.uid')->get();
        return view('adminView\order')->with('orderList',$orderList);
    }
}