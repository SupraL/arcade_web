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
    <script src="{{ secure_asset('js/jquery.min.js')}}"></script>
    <script src="{{ secure_asset('js/bootstrap.min.js')}}"></script>
    <script src="{{ secure_asset('js/mdb.js')}}"></script>
    <meta charset="UTF-8">
    <title>ArcadeCrafts</title>
    <style>
        #footer{
            width:100%;
            position:absolute;
            bottom:0;
        }
    </style>
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
            <li class="active">遊戲公告</li>
        </ol>
    </div>
</div>
<div class="container">
    <ul class="nav nav-tabs tabs-{{count($gameData)}}" role="tablist" style="margin-top: 15px;">
        @foreach($gameData as $game)
            <li id="{{$game->gameID}}Tab" class="nav-item {{$game->gameID == "gam00001"? "active":""}}">
                <a class="nav-link" data-toggle="tab" href="#{{$game->gameID}}" role="tab"><img height="30" width="30" src="./image/{{$game->gameID}}"/> {{$game->gameName}}</a>
            </li>
        @endforeach
    </ul>
    <div class="tab-content">
        @foreach($gameData as $game)
            <div class="tab-pane fade{{$game->gameID == "gam00001"?" in active":""}}" id="{{$game->gameID}}" role="tablist">
                <div class="card">
                    <div class="container">
                        <table id="example" class="table" cellspacing="0" width="100%" style="margin-right: 50px">
                            <thead><tr><th style="width:10%">#</th><th style="width:10%">類型</th><th style="width:60%">標題</th><th style="width:20%">日期</th></tr></thead>
                            <tbody>
                                <script type="text/javascript" src="{{Config::get('app.bbsUrl')}}{{Config::get('app.'.$game->gameID.'ForumNoticeBinding')}}"></script>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
<script>
    $(document).ready(function(){
        $(".label-pill").each(function(){
            if($(this).text() == "公告"){
                $( this ).addClass( "danger-color" );
            }
        });
    });
    /*var hash = window.location.hash;
    if(hash != ""){
        $(".nav-item")[0].classList.remove("active");
        $("#tabGame1")[0].classList.remove("active");
        switch(hash){
            case "#game1":
                $(".nav-item")[0].classList.add("active");
                $("#tabGame1")[0].classList.add("active");
                $("#tabGame1")[0].classList.add("in");
                break;
            case "#game2":
                $(".nav-item")[1].classList.add("active");
                $("#tabGame2")[0].classList.add("active");
                $("#tabGame2")[0].classList.add("in");
                break;
            case "#game3":
                $(".nav-item")[2].classList.add("active");
                $("#tabGame3")[0].classList.add("active");
                $("#tabGame3")[0].classList.add("in");
                break;
            case "#game4":
                $(".nav-item")[3].classList.add("active");
                $("#tabGame4")[0].classList.add("active");
                $("#tabGame4")[0].classList.add("in");
                break;
            default:
                $(".nav-item")[0].classList.add("active");
                $("#tabGame1")[0].classList.add("active");
                $("#tabGame1")[0].classList.add("in");
                break;
        }
    }*/
</script>
</body>
</html>