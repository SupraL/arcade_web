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
        $password = md5(Input::get('password'));
        $userCount = DB::table('admins')->where('password',$password)->where('username',$username)->count();
        $userData = DB::table('admins')->where('username',$username)->where('password',$password)->first();
        
        if($userCount != 1)
            $errorCode = 1;

        if($userCount == 1){
            Session::put("admin_userID",$userData->adminID);
            Session::put("admin_username",$userData->username);
        }

        return view('adminView\login')->with('errorCode',$errorCode);
        
    }
}