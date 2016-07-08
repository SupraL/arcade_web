<?php namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models;
use DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;
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
            $orderRecordList = DB::table('orders')->join('orderstatus','orderstatus.statusID','=','orders.statusID')->join('paymentMethod','paymentMethod.methodID','=','orders.methodID')->where('orders.uid',$userID)->orderBy('orders.orderID', 'asc')->get();
            $userData = DB::table('users')->leftJoin('minecraftauth','minecraftauth.mcID','=','users.mcID')->where('users.userid',$userID)->first();
            return view('member')->with('userID',$userID)->with('username',$username)->with('email',$email)->with('typeID',$typeID)->with('redeemRecordList',$redeemRecordList)->with('orderRecordList',$orderRecordList)->with('userData',$userData);
        }else{
            return view('login');
        }
    }

    public function getOrderDetails($id){
        if(Session::has('userID')) {
            $errorCode = 0;
            $orderDetails = DB::table('orderproduct')->join('orders', 'orderproduct.orderID', '=', 'orders.orderID')->join('products', 'products.productID', '=', 'orderproduct.productID')->where('orderproduct.orderID', $id)->get();
            if (!empty($orderDetails)) {
                $errorCode = -1;
                return view('viewOrderProduct')->with('errorCode', $errorCode)->with('orderDetails', $orderDetails);
            } else {
                return view('viewOrderProduct')->with('errorCode', $errorCode);
            }
        }else{
            return view('login');
        }
    }

    public function doMcHappyVerAuth(){
        $errorCode = -1;
        $acpwRegPattern = '/^\w+$/';
        $username = Input::get('mc_username');
        $password = Input::get('mc_password');

        if (!preg_match($acpwRegPattern, $username) || !preg_match($acpwRegPattern, $password))
            $errorCode = -200;

        $userDetails = DB::table('users')->where('userID',Session::get('userID'))->first();
        if(is_null($userDetails->mcID)) {
            if(isset($username) && isset($password)){
                $mojangProfileUrl = 'https://api.mojang.com/users/profiles/minecraft/'.$username.'?at=1467042820';
                $result = file_get_contents($mojangProfileUrl);
                if(!empty($result))
                    $errorCode = 22;
                
                $checkUserExists = DB::table('minecraftauth')->where('nickName',$username)->first();
                if(!empty($checkUserExists))
                    $errorCode = 11;

                if($errorCode == -1){
                    $mcID = DB::table('minecraftauth')->max('mcID');
                    $uid = Session::get('userID');
                    if (!empty($mcID)) {
                        $mcID = 'mcd' . sprintf("%05d", (intval(substr($mcID, -5)) + 1));
                    } else {
                        $mcID = 'mcd00001';
                    }
                    $regDate = date("Y-m-d");
                    $lastLoginDate = date("Y-m-d");
                    DB::table('minecraftAuth')->insert(
                        array(
                            'mcID' => $mcID,
                            'nickName' => $username,
                            'loginPassword' => $password,
                            'regDate' => $regDate,
                            'lastLoginDate' => $lastLoginDate,
                            'lastLoginIp' => $_SERVER['REMOTE_ADDR'],
                            'isAvailable' => '1'
                        )
                    );
                    DB::table('users')->where('userID', $uid)->update(
                        array(
                            'mcID' => $mcID
                        )
                    );
                }

            }
        } else {
            $errorCode = 2;
        }
        return Redirect::to('/member')->with('errorCode',$errorCode)->with('type','openGame');
    }
    public function doMojangAuth(){
        $errorCode = -1;
        $moj_username = Input::get('moj_username');
        $moj_password = Input::get('moj_password');
        $server_password = Input::get('server_password');
        
        $userDetails = DB::table('users')->where('userID',Session::get('userID'));
        if(empty($userDetails->mcID)) {
            if (isset($moj_username) && isset($moj_password) && isset($server_password)) {
                $mojangAuthUrl = "https://authserver.mojang.com/authenticate";
                $clientToken = md5($this->generateRandomString());
                $requestContent = array(
                    'agent' => array('name' => 'Minecraft', 'version' => '1'),
                    'username' => $moj_username,
                    'password' => $moj_password,
                    'clientToken' => $clientToken
                );

                $options = array(
                    'http' => array(
                        'header' => "Content-Type: application/json\r\n" . "Accept: application/json\r\n",
                        'method' => 'POST',
                        'content' => json_encode($requestContent)
                    )
                );
                $context = stream_context_create($options);
                $result = @file_get_contents($mojangAuthUrl, false, $context);
                $responseJson = json_decode($result);
                if (!($responseJson === NULL)) {
                    if ($responseJson->clientToken == $clientToken) {
                        $mcID = DB::table('minecraftauth')->max('mcID');
                        $uid = Session::get('userID');
                        if (!empty($mcID)) {
                            $mcID = 'mcd' . sprintf("%05d", (intval(substr($mcID, -5)) + 1));
                        } else {
                            $mcID = 'mcd00001';
                        }
                        $nickName = $responseJson->selectedProfile->name;
                        $UUID = $responseJson->selectedProfile->id;
                        $regDate = date("Y-m-d");
                        $lastLoginDate = date("Y-m-d");
                        DB::table('minecraftAuth')->insert(
                            array(
                                'mcID' => $mcID,
                                'nickName' => $nickName,
                                'loginPassword' => $server_password,
                                'regDate' => $regDate,
                                'lastLoginDate' => $lastLoginDate,
                                'lastLoginIp' => $_SERVER['REMOTE_ADDR'],
                                'isAvailable' => '1',
                                'UUID' => $UUID
                            )
                        );
                        DB::table('users')->where('userID', $uid)->update(
                            array(
                                'mcID' => $mcID
                            )
                        );
                    }
                } else {
                    $errorCode = 1;
                }
            }
        } else {
            $errorCode = 2;
        }
        return Redirect::to('/member')->with('errorCode',$errorCode)->with('type','openGame');
    }
    private function generateRandomString($length = 32) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ~!@#$%^&*()_+]["/.,/*-+';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
}
?>