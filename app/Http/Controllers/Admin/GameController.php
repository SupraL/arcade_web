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

class GameController extends Controller
{
    public function showGamePage(){
        $gameList = DB::table('games')->where('currentVersion','!=','null')->where('downloadLink','!=','null')->get();
        return view('adminView\game')->with('gameList',$gameList);
    }
    public function getGamesByApi(){
        $gameList = DB::table('games')->where('currentVersion','!=','null')->where('downloadLink','!=','null')->get();
        $gameArray = array();
        for($i = 0; $i < count($gameList);$i++){
            array_push($gameArray,array(
               'gameID'=>$gameList[$i]->gameID,
                'gameName'=>$gameList[$i]->gameName,
                'gameColor'=>$gameList[$i]->gameColor,
                'version'=>$gameList[$i]->currentVersion,
                'downloadLink'=>$gameList[$i]->downloadLink,
                'gameIcon'=>base64_encode($gameList[$i]->gameIcon)
            ));
        }
        return view('apiView\showJson')->with('jsonString',json_encode($gameArray));
    }
}