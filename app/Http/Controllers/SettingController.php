<?php namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models;
use DB;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Session;

class SettingController extends Controller
{
    public function showHeader(){
        $settingData = DB::table('websetting')->where('SettingID','set00001')->first();
        return view('header')->with('settingData',$settingData);
    }
    public function getClose(){
        $settingData = DB::table('websetting')->where('SettingID','set00001')->first();
        return view('close')->with('settingData',$settingData);
    }
}