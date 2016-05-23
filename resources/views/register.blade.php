<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/mdb.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/custom_style.css') }}">
    <script src="{{ URL::asset('js/jquery.min.js')}}"></script>
    <script src="{{ URL::asset('js/bootstrap.min.js')}}"></script>
    <script src="{{ URL::asset('js/mdb.js')}}"></script>
    <meta charset="UTF-8">
    <title>ArcadeCrafts</title>
    <script>
        $(document).ready(function(){
            $("#chk_aggreement").click(function(){
                if($("#chk_aggreement").is(':checked')){
                    $("#btnSubmit").prop("disabled",false);
                }else{
                    $("#btnSubmit").prop("disabled",true);
                }
            });
        });
    </script>
</head>
<body>
@extends('header')
<br/>
<br/>
<br/>
<br/>
<div style="height:40px;width:100%;background:#F5F5F5">
    <div class="container">
        <ol class="breadcrumb" style="padding: 10px">
            <li><a href="./">主頁</a></li>
            <li class="active">帳號註冊</li>
        </ol>
    </div>
</div>
<div class="container">
    <h3 class="h3-responsive text-center">註冊會員 - 步驟(1 / 3)</h3>
    <progress class="progress" value="33" max="99">
        <div class="progress">
            <span class="progress-bar" style="width: 25%;">25%</span>
        </div>
    </progress>
    <?php
        if(isset($errorCode)){
            if($errorCode != -1){
                echo "<script>toastr.warning('註冊程序尚未完成!');</script>";
            }
            switch($errorCode){
                case "1":
                    echo "<script>toastr.error('兩次輸入的密碼並不一致!');</script>";
                    break;
                case "2":
                    echo "<script>toastr.error('帳號或密碼中不能包含特殊符號!');</script>";
                    break;
                case "3":
                    echo "<script>toastr.error('帳號或密碼不符合6位或以上長度的要求!');</script>";
                    break;
                case "-1":
                    echo "<script>toastr.success('帳號註冊成功!<br/>5秒後會自動跳轉至登入頁面');</script>";
                    echo '<meta http-equiv="refresh" content="5; url=./" />';
                    break;
            }
        }
    ?>
    <div class="card">
        <div class="container">
            <form method="POST" action="./register">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="input-field">
                            <i class="material-icons prefix">account_circle</i>
                            <input id="username" name="username" type="text" class="validate" >
                            <label for="icon_prefix">帳號名稱</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="input-field">
                            <i class="material-icons prefix">email</i>
                            <input id="emailAddr" name="emailAddr" type="email" class="validate">
                            <label for="icon_prefix">電郵地址</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="input-field">
                            <i class="material-icons prefix">vpn_key</i>
                            <input id="password" name="password" type="text" class="validate">
                            <label for="icon_prefix">密碼</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="input-field">
                            <i class="material-icons prefix">lock</i>
                            <input id="conPassword" name="conPassword" type="text" class="validate">
                            <label for="icon_prefix">確應密碼</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <input type="checkbox" id="chk_aggreement">
                        <label for="chk_aggreement">我接受並同意本工作室之<a href="aboutUs#tabus2">《服務條款及政策》</a>。</label>
                    </div>
                </div>
                <center>
                    <button type="button" class="btn cancelButton">取消</button>
                    <button type="submit" class="btn indexButton" id="btnSubmit" disabled>提交</button>
                </center>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
            </form>
            <br/>
        </div>
    </div>
</div>
</body>
</html>