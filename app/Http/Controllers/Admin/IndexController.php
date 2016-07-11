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
        $settingData = DB::table('websetting')->first();
        return view('adminView\index')->with('settingData',$settingData);
    }

    public function doPostAction(){
        $isOpen = Input::get('chk_webStatus');
        if(isset($isOpen)){
            DB::table('websetting')->where('SettingID','set00001')->update(
                array(
                    'isOpen'=>$isOpen
                )
            );
            return Redirect::to('/admin/index');
        } else {

        }
    }
}