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
    <script>
        $(document).ready(function () {
            $('select').material_select();
        });
    </script>
</head>
<body>
@extends('adminView/header')
<div class="verticalContainer">
    <h4 class="h4-responsive">遊戲管理</h4>
    <hr/>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">新增遊戲</button>
    <table class="table">
        <thead>
        <tr>
            <th>#</th>
            <th>遊戲名稱</th>
            <th>現時版本</th>
            <th>下載連接</th>
        </tr>
        </thead>
        <tbody>
        @foreach($gameList as $game)
            <tr>
                <th scope="row">{{$game->gameID}}</th>
                <td>{{$game->gameName}}</td>
                <td>{{$game->currentVersion}}</td>
                <td>{{$game->downloadLink}}</td>
                <td style="width:20%">
                    <div class="row">
                        <div class="col-md-6">
                            <button type="button" class="btn btn-default btn-sm btn-block" data-toggle="modal" data-target="#myModal">編輯</button>
                        </div>
                        <div class="col-md-6">
                            <button type="button" class="btn btn-warning btn-sm btn-block" data-toggle="modal" data-target="#myModal">刪除</button>
                        </div>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</body>
</html>