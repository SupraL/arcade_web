<?php namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models;
use DB;
use Illuminate\Support\Facades\Redirect;

class GamesController extends Controller
{
    public function doIndex(){
        $gamesData = DB::table('games')->where('currentVersion','!=','null')->get();
        return view('games')->with('gamesData',$gamesData);
    }

    public function doRedirect($id){
        switch($id){
            case "gam00005":
                return view('minecraftHome');
            default:
                return Redirect::to('./');
        }
    }
}