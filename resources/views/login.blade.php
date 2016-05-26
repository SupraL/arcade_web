<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{ secure_asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('css/mdb.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('css/custom_style.css') }}">
    <script src="{{ secure_asset('js/jquery.min.js')}}"></script>
    <script src="{{ secure_asset('js/bootstrap.min.js')}}"></script>
    <script src="{{ secure_asset('js/mdb.js')}}"></script>
    <meta charset="UTF-8">
    <title>ArcadeCrafts</title>
</head>
<body>
@extends('header')
<?php
if(isset($errorCode)){
    if($errorCode < 0){
        echo "<script>toastr.warning('帳號或密碼錯誤!');</script>";
    }
    if($errorCode > 0){
        echo '<meta http-equiv="refresh" content="0; url=./login/success" />';
    }
}
?>
<br/>
<br/>
<br/>
<br/>
<div style="height:40px;width:100%;background:#F5F5F5">
    <div class="container">
        <ol class="breadcrumb" style="padding: 10px">
            <li><a href="./">主頁</a></li>
            <li class="active">帳戶登入</li>
        </ol>
    </div>
</div>
<div class="container">
    <center><h4 class="h4-responsive"><i class="material-icons">lock</i>使用 ArcadeCrafts 帳號登入</h4></center>
    <hr/>
    <form method="POST" action="./login">
        <div class="card">
            <br/>
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="input-field">
                        <i class="material-icons prefix">account_circle</i>
                        <input id="username" name="username" type="text" class="validate" required>
                        <label for="icon_prefix">帳號名稱</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="input-field">
                        <i class="material-icons prefix">vpn_key</i>
                        <input id="password" name="password" type="text" class="validate" required>
                        <label for="icon_prefix">密碼</label>
                    </div>
                </div>
            </div>
            <center>
                <button type="button" class="btn cancelButton">取消</button>
                <button type="submit" class="btn indexButton" id="btnLogin">登入</button>
            </center>
            <br/>
        </div>
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
    </form>
</div>
</body>
</html>