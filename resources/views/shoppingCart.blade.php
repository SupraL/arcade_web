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
@extends('header')
<?php
    if(Session::has('errorCode')){
        $type = Session::get('type');
        if($type == 'del'){
            $errorCode = Session::get('errorCode');
            switch($errorCode){
                case "-1":
                    echo "<script>toastr.success('成功由購物車刪除物品!');</script>";
                    break;
                case "1":
                    echo "<script>toastr.warning('您的購物車不存在此物品!');</script>";
                    break;
            }
        }
        if($type == 'updateCart'){
            $errorCode = Session::get('errorCode');
            switch($errorCode){
                case "-2":
                    echo "<script>toastr.warning('您可不能對數量使壞哦>.^!');</script>";
                    break;
                case "-1":
                    echo "<script>toastr.success('成功更新購物車!');</script>";
                    break;
                case "0":
                    echo "<script>toastr.warning('物品並不存在於您的購物車中;)');</script>";
                    break;
            }
        }
    }
?>
<br/>
<br/>
<br/>
<br/>
<div style="height:40px;width:100%;background:#F5F5F5">
    <div class="container">
        <ol class="breadcrumb" style="padding: 10px">
            <li><a href="../">主頁</a></li>
            <li><a href="./shop">商店</a></li>
            <li class="active">購物車</li>
        </ol>
    </div>
</div>
<div class="container">
    <div class="card">
        <div class="conatiner">
            <h4 class="h4-responsive text-center">您的購物車</h4>
            <hr/>
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <table class="table table-striped table-hover">
                        <thead><tr><th>圖片</th><th>名稱</th><th>單價</th><th>數量</th><th></th></tr></thead>
                        @foreach($productArray as $index=>$product)
                            <tr>
                                <td  style="width:30%"><img src="./image/{{$product->productID}} " style="width:200px;height:100px"/></td>
                                <td>{{$product->productName}}</td>
                                <td>{{$product->price}}</td>
                                <td style="width:20%">
                                    <div class="md-form input-group">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <form action="./updateCart" method="post">
                                                    <span class="input-group-btn">
                                                        <button class="btn btn-danger btn-sm danger-color" type="submit" {{($cart_productList[$index]['quantity'] == 1)?"disabled":""}}>&nbsp-&nbsp</button>
                                                    </span>
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                    <input type="hidden" name="updateType" value="minus"/>
                                                    <input type="hidden" name="productID" value="{{$cart_productList[$index]['productID']}}">
                                                </form>
                                            </div>
                                            <div class="col-md-6" style="padding-right: 0px">
                                                <input type="text" class="form-control text-center" name="productQuantity" value="{{$cart_productList[$index]['quantity']}}" readonly>
                                            </div>
                                            <div class="col-md-3">
                                                <form action="./updateCart" method="post">
                                                    <span class="input-group-btn">
                                                        <button class="btn btn-default btn-sm cartAddButton" type="submit">&nbsp+&nbsp</button>
                                                    </span>
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                    <input type="hidden" name="updateType" value="plus"/>
                                                    <input type="hidden" name="productID" value="{{$cart_productList[$index]['productID']}}">
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <form action="./delCartProduct" method="POST">
                                        <i class="material-icons pull-right delCartProduct" style="margin:10px" onclick="this.parentNode.submit()">clear</i>
                                        <input type="hidden" name="productID" value="{{$cart_productList[$index]['productID']}}"/>
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                    </table>
                    @if(count($productArray) == 0)
                        <center><h4 class="h4-responsive" style="color:#bdbdbd">您的購物車還沒有任何物品!</h4></center>
                     @endif
                    <hr/>
                    <form action="./doCartCheckout" method="POST">
                    <div class="row">
                        <div class="col-md-12">
                            <h5 class="h5-responsive">
                            <div class="col-md-2">
                                付款方法：
                            </div>

                            <div class="col-md-2">
                                <input name="paymentMethodOptions" type="radio" class="with-gap" id="radio_bank" value="mth00001" checked>
                                <label for="radio_bank">銀行轉帳</label>
                            </div>
                            <div class="col-md-2">
                                <input name="paymentMethodOptions" type="radio" class="with-gap" id="radio_paypal" value="mth00002">
                                <label for="radio_paypal">Paypal</label>
                            </div>
                            </h5>
                        </div>
                    </div>
                    <hr/>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <h5 class="h5-responsive">總金額 : ${{$totalPrice}}<button type="submit" class="btn indexButton pull-right" style="margin-top:0px">結帳</button></h5>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>