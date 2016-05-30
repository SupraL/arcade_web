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

class RedeemController extends Controller
{
    public function showRedeemPage(){
        $cashCodeList = DB::table('cashcards')->join('products','cashcards.productID','=','products.productID')->get();
        return view('adminView\redeemCode')->with('cashCodeList',$cashCodeList);
    }
}