<?php namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models;
use DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;

class MemberController extends Controller
{
    public function doMember(){
        if(Session::has('userID')){
            $userID = Session::get('userID');
            $username = Session::get('username');
            $email = Session::get('email');
            $typeID = Session::get('typeID');
            return view('member')->with('userID',$userID)->with('username',$username)->with('email',$email)->with('typeID',$typeID);
        }else{
            return view('login');
        }
    }

    public function doRecord(){

    }
}
?>