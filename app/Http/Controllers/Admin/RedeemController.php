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
        $productList = DB::table('products')->get();
        return view('adminView\redeemCode')->with('cashCodeList',$cashCodeList)->with('productList',$productList);
    }

    public function doRedeem(){
        $codeHeader = Input::get('codeHeader');
        $productOption = Input::get('productOption');
        $quantity = Input::get('quantity');
        $cardID = DB::table('cashcards')->max('cardID');
        $cardID = 'ccd' . sprintf("%05d", (intval(substr($cardID, -5)) + 1));

        $cardNumber = strtoupper($codeHeader.md5($this->generateRandomCodeString()));

        DB::table('cashcards')->insert(
            array('cardID' => $cardID,
                'cardNumber' => $cardNumber,
                'used' => '0',
                'productID' => $productOption,
                'quantity' => $quantity)
        );
    }

    private function generateRandomCodeString($length = 32) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ~!@#$%^&*()_+]["/.,/*-+';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
}