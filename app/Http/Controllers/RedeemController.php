<?php namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models;
use DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class RedeemController extends Controller
{
    public function doRedeem(){
        /*
         * 1 = Wrong Code
         * -1 = Available Code
         * */
        $errorCode = -1;
        $cashCode = Input::get('cashcode');

        $userData = DB::table('users')->where('userID',Session::get('userID'))->first();
        $cashCodeCount = DB::table('cashcards')->where('cardNumber',$cashCode)->where('used','0')->count();
        $cashCodeData = DB::table('cashcards')->join('products','cashcards.productID','=','products.productID')->where('cardNumber',$cashCode)->where('used','0')->first();

        if($cashCodeCount != 1){
            $errorCode = 1;
        }
        if($cashCodeCount == 1){
            $recordID = DB::table('redeemcardrecord')->max('redeemID');
            if($recordID != ""){
                $recordID = 'rid' . sprintf("%05d", (intval(substr($recordID, -5)) + 1));
            } else {
                $recordID = 'crd00001';
            }
            DB::table('cashcards')->where('cardNumber',$cashCodeData->cardNumber)->update(
                array(
                    'used' => DB::raw('1')
                )
            );
            DB::table('redeemcardrecord')->insert(
              array('redeemID' => $recordID,
                    'cardID' => $cashCodeData->cardID,
                    'uid' => Session::get('userID'),
                    'redeemDate' => date('Y-m-d H:i:s'))
            );
            switch($cashCodeData->productName){
                case "AP":
                    $newCash = $userData->cashPoint + $cashCodeData->quantity;
                    DB::table('users')->where('userID',Session::get('userID'))->update(
                        array(
                            'cashPoint' => $newCash
                        )
                    );
                    break;
            }
        }
        return Redirect::to('/member'.'#redeem')->with('errorCode',$errorCode)->with('cashCodeData',$cashCodeData)->with('type','redeem');
    }
}