<?php namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models;
use DB;

class AllNoticeController extends Controller
{
    public function showNotice(){
        $gameList1 = DB::table('notices')->join('games','notices.gameID','=','games.gameID')->where('games.gameID','gam00001')->get();
        $gameList2 = DB::table('notices')->join('games','notices.gameID','=','games.gameID')->where('games.gameID','gam00002')->get();
        $gameList3 = DB::table('notices')->join('games','notices.gameID','=','games.gameID')->where('games.gameID','gam00003')->get();
        $gameList4 = DB::table('notices')->join('games','notices.gameID','=','games.gameID')->where('games.gameID','gam00004')->get();
        return view('allNotice')->with('gameNoticeList1',$gameList1)->with('gameNoticeList2',$gameList2)->with('gameNoticeList3',$gameList3)->with('gameNoticeList4',$gameList4);
    }
}