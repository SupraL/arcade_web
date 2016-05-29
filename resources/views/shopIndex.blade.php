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
        </div>
        <div class="col-md-9">
            <div class="row">
                @foreach($productList as $product)
                    <div class="col-sm-6 col-md-4 {{$product->gameID}} productItem">
                        <div class="card card-product">
                            <div class="card-image waves-effect waves-block waves-light view overlay hm-white-slight">
                                <!--Discount label-->
                                <h5 class="card-label"> <span class="label {{$product->gameColor}}">{{$product->gameName}}</span></h5>
                                <a href=""><img class="img-fluid" src="./image/{{$product->productID}}" style="width:100%;height:140px">
                                    <div class="mask"> </div>
                                </a>
                            </div>
                            <div class="card-title">
                                <h5 class="card-title" style="color:#000000;margin-left:10px">{{$product->productName}} <div class="pull-right" style="margin-right:5px;"><i class="material-icons">attach_money</i>{{$product->price}}</div></h5>
                                <pre style="height:72px;font-size:12px;overflow-x:hidden;margin-left:5px;margin-right:5px">{{$product->description}}</pre>
                                <hr style="margin-bottom:5px"/>
                                <center><button class="btn indexButton">立即購買</button></center>
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