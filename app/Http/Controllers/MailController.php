<?php namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models;
use DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class MailController extends Controller
{
    public function doSendMail(){

        Mail::send('testView', array('key' => 'value'), function($message)
        {
            $message->to('supralai@gmail.com', 'Jane Doe')->subject('testSubject');
        });
    }
}