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
@extends('adminView/header')
<div class="verticalContainer">
    <h4 class="h4-responsive">綜合管理</h4>
    <hr/>
    <div class="col-sm-6">
        <div class="panel panel-{{($settingData->isOpen == 1)?"success":"danger"}}">
            <div class="panel-heading">
                網站管理
                <div class="pull-right">
                    <form action="./index" method="POST">
                        <input type="hidden" name="chk_webStatus" value="0" />
                        <div class="switch">
                            <label>
                                關閉
                                <input type="checkbox" {{($settingData->isOpen == 1)?"checked":""}} name="chk_webStatus" onChange="this.form.submit()" value="1">
                                <span class="lever"></span>
                                開啟
                            </label>
                        </div>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    </form>
                </div>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="input-field">
                            <i class="material-icons prefix">home</i>
                            <input id="webName" name="webName" type="text" value="{{$settingData->webTitle}}">
                            <label for="icon_prefix">網站名稱</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col-md-12">
                        <i class="material-icons prefix">pan_tool</i>
                        <textarea id="textarea1" class="materialize-textarea" length="120"></textarea>
                        <label for="textarea1">關閉原因</label>
                    </div>
                </div>
                <center>
                    <button type="submit" class="btn indexButton" id="btnSubmit">儲存</button>
                </center>
            </div>
        </div>
    </div>
</div>
</body>
</html>