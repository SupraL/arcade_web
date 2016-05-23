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
    <script src="{{ URL::asset('js/jquery.min.js')}}"></script>
    <script src="{{ URL::asset('js/bootstrap.min.js')}}"></script>
    <script src="{{ URL::asset('js/mdb.js')}}"></script>
    <meta charset="UTF-8">
    <title>ArcadeCrafts</title>
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
    <ul class="nav nav-tabs tabs-4" role="tablist" style="margin-top: 15px;">
        <li id="tab1" class="nav-item active">
            <a class="nav-link" data-toggle="tab" href="#tabGame1" role="tab"><img height="30" width="30" src="{{ URL::asset('img/bns.ico') }}"/> 劍靈</a>
        </li>
        <li id="tab2" class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#tabGame2" role="tab"><img height="30" width="30" src="{{ URL::asset('img/aion.ico') }}"/> AION</a>
        </li>
        <li id="tab3" class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#tabGame3" role="tab"><img height="30" width="30" src="{{ URL::asset('img/lineage2.jpg') }}"/> 新天堂II</a>
        </li>
        <li id="tab4" class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#tabGame4" role="tab"><img height="30" width="30" src="{{ URL::asset('img/mxm.png') }}"/> MXM</a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane fade in active" id="tabGame1" role="tabpanel">
            <div class="card">
                <div class="container">
                    <h3 class="h3-responsive">公告消息</h3>
                    <hr />
                    <table id="example" class="table" cellspacing="0" width="100%" style="margin-right: 50px">
                        <thead><tr><th style="width:10%">#</th><th style="width:70%">標題</th><th style="width:20%">日期</th></tr></thead>
                        <tbody>
                            @foreach($gameNoticeList1 as $notice)
                                <tr><td>{{$notice->noticesID}}</td><td><a href="viewNotice/{{$notice->noticesID}}">{{$notice->title}}</a></td><td>{{$notice->noticeDate}}</td></tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="tabGame2" role="tabpanel">
            <div class="card">
                <div class="container">
                    <h3 class="h3-responsive">公告消息</h3>
                    <hr />
                    <table id="example" class="table" cellspacing="0" width="100%">
                        <thead><tr><th style="width:10%">#</th><th style="width:70%">標題</th><th style="width:20%">日期</th></tr></thead>
                        <tbody>
                        @foreach($gameNoticeList2 as $notice)
                            <tr><td>{{$notice->noticesID}}</td><td><a href="viewNotice/{{$notice->noticesID}}">{{$notice->title}}</a></td><td>{{$notice->noticeDate}}</td></tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="tabGame3" role="tabpanel">
            <div class="card">
                <div class="container">
                    <h3 class="h3-responsive">公告消息</h3>
                    <hr />
                    <table id="example" class="table" cellspacing="0" width="100%" style="margin-right: 50px">
                        <thead><tr><th style="width:10%">#</th><th style="width:70%">標題</th><th style="width:20%">日期</th></tr></thead>
                        <tbody>
                        @foreach($gameNoticeList3 as $notice)
                            <tr><td>{{$notice->noticesID}}</td><td><a href="viewNotice/{{$notice->noticesID}}">{{$notice->title}}</a></td><td>{{$notice->noticeDate}}</td></tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="tabGame4" role="tabpanel">
            <div class="card">
                <div class="container">
                    <h3 class="h3-responsive">公告消息</h3>
                    <hr />
                    <table id="example" class="table" cellspacing="0" width="100%" style="margin-right: 50px">
                        <thead><tr><th style="width:10%">#</th><th style="width:70%">標題</th><th style="width:20%">日期</th></tr></thead>
                        <tbody>
                        @foreach($gameNoticeList4 as $notice)
                            <tr><td>{{$notice->noticesID}}</td><td><a href="viewNotice/{{$notice->noticesID}}">{{$notice->title}}</a></td><td>{{$notice->noticeDate}}</td></tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    var hash = window.location.hash;
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
    }
    function removeClass(ele,cls) {
        if (hasClass(ele,cls)) {
            var reg = new RegExp('(\\s|^)'+cls+'(\\s|$)');
            ele.className=ele.className.replace(reg,' ');
        }
    }
    function hasClass(ele,cls) {
        return ele.className.match(new RegExp('(\\s|^)'+cls+'(\\s|$)'));
    }

</script>
</body>
</html>