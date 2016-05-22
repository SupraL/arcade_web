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
            <li class="active">關於我們</li>
        </ol>
    </div>
</div>
<div class="container">
    <ul class="nav nav-tabs tabs-3" role="tablist" style="margin-top: 15px;">
	    <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#tabGame3" role="tab"><img height="30" width="30" src="{{ URL::asset('img/lineage2.jpg') }}"/> 關於我們</a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" data-toggle="tab" href="#tabGame1" role="tab"><img height="30" width="30" src="{{ URL::asset('img/library-books.png') }}"/> 服務條款</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#tabGame2" role="tab"><img height="30" width="30" src="{{ URL::asset('img/aion.ico') }}"/> 私隱政策</a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane fade in active" id="tabGame1" role="tabpanel">
            <div class="card">
                <div class="container">
                    <h3 class="h3-responsive">關於我們</h3>
                    <hr />

                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="tabGame2" role="tabpanel">
            <div class="card">
                <div class="container">
                    <h3 class="h3-responsive">服務條款</h3>
                    <hr />

                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="tabGame3" role="tabpanel">
            <div class="card">
                <div class="container">
                    <h3 class="h3-responsive">私隱政策</h3>
                    <hr />

                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>