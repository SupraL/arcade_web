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

            $('#search_input').change(function(){
                if($(this).val() != "") {
                    $("tr").hide(500);
                    $("." + $(this).val()).show(500);
                } else {
                    $("tr").show(500);
                }
            });
        });
    </script>
</head>
<body>
@extends('adminView/header')
<div class="verticalContainer">
    <h4 class="h4-responsive">訂單記錄</h4>
    <hr/>
    <div class="row">
        <div class="input-field col-md-3">
            <input placeholder="UID/用戶名稱" id="search_input" type="text" class="validate">
        </div>
    </div>
    <table class="table">
        <thead>
        <tr>
            <th>#</th>
            <th>用戶名稱</th>
            <th>總價格</th>
            <th>時間</th>
            <th>狀態</th>
            <th>付款方法</th>
        </tr>
        </thead>
        <tbody>
        @foreach($orderList as $order)
            <tr class="{{$order->uid}} {{$order->username}}">
                <th scope="row"><a href="#">{{$order->orderID}}</a></th>
                <td>{{$order->username}}</td>
                <td>{{$order->totalPrice}}</td>
                <td>{{$order->orderDateTime}}</td>
                <td>{{$order->statusName}}</td>
                <td>{{$order->methodName}}</td>
                <td><button type="button" class="btn btn-default btn-sm btn-block" data-toggle="modal" data-target="#myModal">編輯</button></td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</body>
</html>