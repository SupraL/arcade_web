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
    <h4 class="h4-responsive">序號管理</h4>
    <hr/>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">新增序號</button>
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
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">新增序號</h4>
            </div>
            <form action="./redeemCode" method="POST">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="input-field" style="margin-top:0px">
                                <input id="codeHeader" name="codeHeader" type="text" class="validate" value="ACDCS">
                                <label for="icon_prefix">序號前綴</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <select name="productOption" id="productOption">
                                <option value="" disabled selected>選擇物品</option>
                                @foreach($productList as $product)
                                    <option value="{{$product->productID}}">{{$product->productName}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6">
                            <div class="input-field" style="margin-top:0px">
                                <input id="quantity" name="quantity" type="text" class="validate">
                                <label for="icon_prefix">數量</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn cancelButton" data-dismiss="modal">關閉</button>
                    <button type="submit" class="btn indexButton" style="margin:0px">新增</button>
                </div>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
            </form>
        </div>
    </div>
</div>
</body>
</html>