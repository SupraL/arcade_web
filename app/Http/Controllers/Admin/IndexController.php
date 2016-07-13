<?php namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models;
use DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Session;

class IndexController extends Controller
{
    public function doIndex(){
        if(!Session::has('admin_userID')){
            return view('adminView\login');
        }
        $settingData = DB::table('websetting')->first();
        $pdo = DB::connection()->getPdo();
        return view('adminView\index')->with('settingData',$settingData)->with('pdo',$pdo);
    }

    public function doPostAction(){
        $isOpen = Input::get('chk_webStatus');
        $webName = Input::get('webName');
        $closeDesc = Input::get('closeDescription');
        if(isset($isOpen)){
            DB::table('websetting')->where('SettingID','set00001')->update(
                array(
                    'isOpen'=>$isOpen
                )
            );
            return Redirect::to('/admin/index');
        } else {
            if(isset($webName) && isset($closeDesc)){
                DB::table('websetting')->where('SettingID','set00001')->update(
                    array(
                        'webTitle'=>$webName,
                        'closeDescription'=>$closeDesc
                    )
                );
                return Redirect::to('/admin/index');
            }
        }
    }
}