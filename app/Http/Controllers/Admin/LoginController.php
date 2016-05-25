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

class LoginController extends Controller
{
    public function doLogin()
    {
        $errorCode = -1;
        $username = Input::get('username');
        $password = Input::get('password');
        $userCount = DB::table('users')->join("usertype","users.typeID","=","usertype.typeid")->where('users.password',$password)->where('usertype.typeName','admin')->count();
        $userData = DB::table('users')->join("usertype","users.typeID","=","usertype.typeid")->where('users.username',$username)->where('username',$username)->where('password',$password)->where('usertype.typeName','admin')->first();
        
        if($userCount != 1)
            $errorCode = 1;

        if($userCount == 1){
            Session::put("admin_userID",$userData->userID);
            Session::put("admin_username",$userData->username);
            Session::put("admin_email",$userData->email);
            Session::put("admin_typeID",$userData->typeID);
            Session::put("admin_typeName",$userData->typeName);
        }

        return view('adminView\login')->with('errorCode',$errorCode);
        
    }
}