<?php namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models;
use DB;

class IndexController extends Controller
{
    public function showIndex(){
        $notices = DB::table('notices')->join('games','notices.gameID','=','games.gameID')->take(5)->get();
        return view('index')->with('noticeList',$notices);
    }
}