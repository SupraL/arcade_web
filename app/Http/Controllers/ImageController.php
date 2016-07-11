<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models;
use DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\View;

class ImageController extends Controller
{
    public function getImg($id){
        try {
            $startString = substr($id, 0, 3);
            switch ($startString) {
                case "prd":
                    $imageData = DB::table('products')->where('productID', $id)->first();
                    $contents = View::make('showImage')->with("imageData", $imageData);
                    break;
                case "gam":
                    $bgOption = Input::get('bg');
                    $bgOption = (isset($bgOption)) ? $bgOption : "0";
                    $imageData = DB::table('games')->where('gameID', $id)->first();
                    $contents = View::make('showImage')->with("imageData", $imageData)->with('bgOption',$bgOption);
                    break;
            }
            $response = Response::make($contents, 200);
            $response->header('Content-Type', 'Content-Type: image/jpeg');
            return $response;
        } catch (\ErrorException $e){
            return 'not exist';
        }
    }
    public function getBackgroundImage($id){
        try {
            $imageData = DB::table('games')->where('gameID',$id)->first();
            $contents = View::make('showImage')->with("imageData", $imageData);
            $response = Response::make($contents, 200);
            $response->header('Content-Type', 'Content-Type: image/jpeg');
        } catch (\ErrorException $e){
            return 'not exist';
        }
    }
}