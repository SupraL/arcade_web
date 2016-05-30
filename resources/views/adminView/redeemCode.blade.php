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
    <h4 class="h4-responsive">序號管理</h4>
    <hr/>
    <button type="button" class="btn btn-primary">新增序號</button>
    <table class="table">
        <thead>
        <tr>
            <th>#</th>
            <th>卡號</th>
            <th>物品</th>
            <th>數量</th>
            <th>狀態</th>
        </tr>
        </thead>
        <tbody>
        @foreach($cashCodeList as $cashCode)
        <tr>
            <th scope="row">{{$cashCode->cardID}}</th>
            <td>{{$cashCode->cardNumber}}</td>
            <td>{{$cashCode->productName}}</td>
            <td>{{$cashCode->quantity}}</td>
            <td>
                @if($cashCode->used == 0)
                    <img src="{{secure_asset('img/available.png')}}" style="width:25px;height:25px"/>
                @else
                    <img src="{{secure_asset('img/unavailable.png')}}" style="width:25px;height:25px"/>
                @endif
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
</div>
</body>
</html>