<?php namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models;
use DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Log;

class RegisterController extends Controller
{
    public function doReg(){
        /*ErrorCode
         * 1 = two password mismatch
         * 2 = username or password has special characters
         * 3 = username or password length less than 6
         * -1 = success
         * */
        $errorCode = -1;
        $acpwRegPattern = '/^\w+$/';

        $username = Input::get('username');
        $password = Input::get('password');
        $confirmPassword = Input::get('conPassword');
        $email = Input::get('emailAddr');
        $userID = DB::table('users')->max('userID');
        $userID = 'usr'.sprintf("%05d",(intval(substr($userID,-5))+1));

        if($password != $confirmPassword)
            $errorCode = 1;

        if(!preg_match($acpwRegPattern,$username) || !preg_match($acpwRegPattern,$password))
            $errorCode = 2;

        if(strlen($username) < 6 || strlen($password) < 6)
            $errorCode = 3;

        if($errorCode == -1){
            DB::table('users')->insert(
                array('userID' => $userID,
                    'typeID' => 'typ00002',
                    'username' => $username,
                    'password' => $password,
                    'email' => $email,
                    'cashPoint' => '0',
                    'userIcon' => '')
            );
        }
        return view('register')->with('errorCode',$errorCode);
    }
}