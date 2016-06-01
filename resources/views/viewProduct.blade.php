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
@extends('header')
<br/>
<br/>
<br/>
<br/>
<div style="height:40px;width:100%;background:#F5F5F5">
    <div class="container">
        <ol class="breadcrumb" style="padding: 10px">
            <li><a href="../">主頁</a></li>
            <li><a href="../shop">商店</a></li>
            <li class="active">{{$productData->productID}}</li>
        </ol>
    </div>
</div>
<div class="container">
    <div class="jumbotron product-panel">
        <form action="../placeOrder" method="POST">
            <div class="row">
                <div class="col-md-6">
                    <img class="img-fluid" src="../image/{{$productData->productID}}" style="width:100%;height:100%">
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <h4 class="h4-responsive">{{$productData->productName}} <div class="pull-right">${{$productData->price}}</div></h4>
                        <select>
                            <option value="" disabled>購買選項</option>
                            <option value="1" selected>直接購買</option>
                            <option value="2">送禮</option>
                        </select>
                        <hr/>
                    </div>
                    <div class="col-md-6">
                        <h5 class="h5-responsive">付款方法</h5>
                        <div class="col-md-4">
                            <input name="paymentMethodOptions" type="radio" class="with-gap" id="radio_bank" checked>
                            <label for="radio_bank">銀行轉帳</label>
                        </div>
                        <div class="col-md-4">
                            <input name="paymentMethodOptions" type="radio" class="with-gap" id="radio_paypal">
                            <label for="radio_paypal">Paypal</label>
                        </div>
                        <div class="col-md-4">
                            <button type="submit" class="btn indexButton pull-right" style="margin:0px">購買</button>
                        </div>
                    </div>
                </div>
            </div>
            <input type="hidden" name="productID" id="productID" value="{{$productData->productID}}"/>
            <input type="hidden" name="quantity" id="quantity" value="1"/>
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
        </form>
        <hr/>
        <h5 class="h5-responsive">商品簡介</h5>
        <pre>{{$productData->description}}</pre>
    </div>
</div>
</body>
</html>