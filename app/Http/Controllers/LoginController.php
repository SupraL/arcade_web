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
    public function doLogin()
    {
        $errorCode = -1;
        $acpwRegPattern = '/^([A-Za-z0-9])\w+$/';
        $username = Input::get('username');
        $password = Input::get('password');
        
        $userCount = DB::table('users')->where('username',$username)->where('password',$password)->count();
        $userData = DB::table('users')->where('username',$username)->where('password',$password)->first();
        if($userCount != 1)
            $errorCode = 1;
        
        if($userCount == 1){
            Session::put("userID",$userData->userID);
            Session::put("username",$userData->username);
            Session::put("email",$userData->email);
            Session::put("typeID",$userData->typeID);
        }
        return view('login')->with('errorCode',$errorCode);
    }
    public function doLogout(){
        Session::flush();
        return redirect()->action('IndexController@showIndex');
    }
}