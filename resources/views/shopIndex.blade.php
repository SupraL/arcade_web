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
        $(document).ready(function() {
            $(".list-group-item").click(function(){
                var typeID = $(this).attr("id");
                if(typeID == "catAll"){
                    $(".productItem").show(500);
                } else {
                    $(".productItem").hide();
                    $("." + typeID).show(500);
                }
            });
        });
    </script>
</head>
<body>
@extends('header')
<?php

if(Session::has('errorCode')){
    $errorCode = Session::get('errorCode');
    if(isset($errorCode)){
        switch($errorCode){
            case "-1":
                echo "<script>toastr.success('購買成功! 詳情可到帳戶資訊 > 交易記錄中查看!');</script>";
                break;
            case "1":
                echo "<script>toastr.warning('抱歉，您的AP並不足夠，或請進行儲值再進行購買!');</script>";
                break;
            case "2":
                echo "<script>toastr.warning('抱歉，此物品似乎並不存在;)');</script>";
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
            <li><a href="./">主頁</a></li>
            <li class="active">商店</li>
        </ol>

    </div>
</div>
<div class="container">
    <div class="row" style="margin-top:50px">
        <div class="col-md-3">
            <div class="list-group">
                <a href="#" class="list-group-item" id="catAll">全部</a>
                @foreach($gameList as $game)
                    <a href="#" class="list-group-item" id="{{$game->gameID}}">{{$game->gameName}}</a>
                @endforeach
            </div>
            <div class="jumbotron" style="padding:10px">
                <h5 class="h5-responsive">購物車概況</h5>
                <hr style="margin-top:5px"/>
                您的購物車內有 {{$cartArray["productCount"]}} 件物品<br/>
                總值：$ {{$cartArray["totalPrice"]}}
                <Button class="btn btn-block shoppingCartButton" style="width:100%">查看購物車</Button>
            </div>
        </div>
        <div class="col-md-9">
            <div class="row">
                @foreach($productList as $product)
                    <div class="col-sm-6 col-md-4 {{$product->gameID}} productItem">
                        <div class="card card-product">
                            <div class="card-image waves-effect waves-block waves-light view overlay hm-white-slight">
                                <!--Discount label-->
                                <h5 class="card-label"> <span class="label {{$product->gameColor}}">{{$product->gameName}}</span></h5>
                                <a href="#"><img class="img-fluid" src="./image/{{$product->productID}}" style="width:100%;height:140px">
                                    <div class="mask"> </div>
                                </a>
                            </div>
                            <form action="./addToCart" method="POST">
                                <div class="action-buttons">
                                    <a class="btn-floating btn-small blue" onclick="this.parentNode.parentNode.submit()" href="#"><i class="fa fa-cart-plus"></i></a>
                                </div>
                                <input type="hidden" name="productID" value="{{$product->productID}}"/>
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            </form>
                            <div class="card-title">
                                <h5 class="card-title" style="color:#000000;margin-left:10px">{{$product->productName}} <div class="pull-right" style="margin-right:5px;"><i class="material-icons">attach_money</i>{{$product->price}}</div></h5>
                                <pre style="height:72px;font-size:12px;overflow-x:hidden;margin-left:5px;margin-right:5px">{{$product->description}}</pre>
                                <hr style="margin-bottom:5px"/>
                                <center><a class="btn stylish-color-dark btn-block" href="./viewProduct/{{$product->productID}}" style="color:#FFFFFF;margin:0px">詳細資料</a></center>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
</body>
</html>