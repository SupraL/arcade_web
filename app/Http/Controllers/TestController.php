<?php namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models;
use DB;

class TestController extends Controller
{
    public function showTest(){
        $users = DB::table('notices')->join('games','notices.gameID','=','games.gameID')->get();
        return view('testView')->with('userList',$users);
    }
}
