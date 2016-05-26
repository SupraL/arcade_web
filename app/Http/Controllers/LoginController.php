<?php namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models;
use DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function doDiscuzLogin(){
        $username = Input::get('username');
        $password = Input::get('password');
        $url = 'http://'.$_SERVER['SERVER_NAME'].'/forum/plugin/reg/login.php';
        $data = array('username' => $username, 'password' => $password);
        $options = array(
            'http' => array(
                'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
                'method'  => 'POST',
                'content' => http_build_query($data)
            )
        );
        $context  = stream_context_create($options);
        
        $errorCode = file_get_contents($url, false, $context);
        if ($errorCode === FALSE) { /* Handle error */ }

        $userData = json_decode($errorCode,true);
        if($userData[0] > 0){
            Session::put("userID",$userData[0]);
            Session::put("username",$userData[1]);
            Session::put("email",$userData[3]);
        }
        return view('login')->with('errorCode',$userData[0]);
    }

    public function doLogin()
    {
        $errorCode = -1;
        $acpwRegPattern = '/^([A-Za-z0-9])\w+$/';
        $username = Input::get('username');
        $password = Input::get('password');
        
        $userCount = DB::table('users')->join("usertype","users.typeID","=","usertype.typeid")->where('users.password',$password)->where('usertype.typeName','<>','admin')->count();
        $userData = DB::table('users')->join("usertype","users.typeID","=","usertype.typeid")->where('users.username',$username)->where('username',$username)->where('password',$password)->where('usertype.typeName','<>','admin')->first();
        if($userCount != 1)
            $errorCode = 1;
        
        if($userCount == 1){
            Session::put("userID",$userData->userID);
            Session::put("username",$userData->username);
            Session::put("email",$userData->email);
            Session::put("typeID",$userData->typeID);
            Session::put("typeName",$userData->typeName);
        }
        return view('login')->with('errorCode',$errorCode);
    }
    public function doLogout(){
        Session::flush();
        return redirect()->action('IndexController@showIndex');
    }
}