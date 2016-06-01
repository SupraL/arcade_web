<?php namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models;
use DB;
use Illuminate\Support\Facades\Config;
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
         * -999 = recapchar no success
         * */
        $secret_key = "6Lco-SATAAAAAJhPwJPqXzTrIlturDoofsTHNDEz";
        $recaptchaUrl = sprintf('https://www.google.com/recaptcha/api/siteverify?secret=%s&response=%s&remoteip=%s', $secret_key, Input::get('g-recaptcha-response'), $_SERVER['REMOTE_ADDR']);
        $recaptchaResult = json_decode(file_get_contents($recaptchaUrl));

        $errorCode = -1000;

        if($recaptchaResult->success) {

            $acpwRegPattern = '/^\w+$/';

            $username = Input::get('username');
            $password = Input::get('password');
            $confirmPassword = Input::get('conPassword');
            $email = Input::get('emailAddr');
            $userID = DB::table('users')->max('userID');
            $userID = 'usr' . sprintf("%05d", (intval(substr($userID, -5)) + 1));

            if ($password != $confirmPassword)
                $errorCode = -100;

            if (!preg_match($acpwRegPattern, $username) || !preg_match($acpwRegPattern, $password))
                $errorCode = -200;

            if (strlen($username) < 3 || strlen($password) < 6)
                $errorCode = -300;

            if ($errorCode == -1000) {
                $errorCode = file_get_contents(Config::get('app.bbsUrl') . '/plugin/reg/register.php?username=' . $username . '&password=' . $password . '&email=' . $email);

                DB::table('users')->insert(
                    array('userID' => $errorCode,
                        'cashPoint' => '0')
                );
            }
        } else {
            $errorCode = -999;
        }
        return view('register')->with('errorCode',$errorCode);
    }
}