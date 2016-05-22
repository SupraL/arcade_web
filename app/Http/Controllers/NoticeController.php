<?php namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models;
use DB;

class NoticeController extends Controller
{
    public function showNotice($noticeID){
        
        $notice = DB::table('notices')->join('games','notices.gameID','=','games.gameID')->where('notices.noticesID',$noticeID)->first();
        return view('viewNotice')->with('noticeData',$notice);
    }
}