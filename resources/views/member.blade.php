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
            $errorCode = Session::get('errorCode');
            $cashCodeData = Session::get('cashCodeData');
            if($type == "redeem"){
                switch($errorCode){
                    case "1":
                        echo "<script>toastr.warning('序號錯誤!');</script>";
                        break;
                    case "-1":
                        echo "<script>toastr.success('恭喜您獲得 $cashCodeData->productName $cashCodeData->quantity 件!');</script>";
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
            <li class="active">帳戶資訊</li>
        </ol>
    </div>
</div>
<div class="container">
    <ul class="nav nav-tabs tabs-4" role="tablist" style="margin-top: 15px;">
        <li class="nav-item active">
            <a class="nav-link" data-toggle="tab" href="#tabPage1" role="tab"><i class="material-icons">account_circle</i> 帳戶資訊</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#tabPage2" role="tab"><i class="material-icons">redeem</i> 序號兌換</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#tabPage3" role="tab"><i class="material-icons">receipt</i> 儲值記錄</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#tabPage4" role="tab"><i class="material-icons">reorder</i> 交易記錄</a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane fade in active" id="tabPage1" role="tabpanel">
            <div class="card">
                <h4 class="panel-heading">帳戶資料</h4>
                <div class="card-block container">
                    <label style="font-size: 18px;color:#000000">用戶名稱：{{Session::get("username")}}</label><br/>
                    <label style="font-size: 18px;color:#000000">電郵地址：{{Session::get("email")}}</label><br/>
                    <label style="font-size: 18px;color:#000000">點數剩餘：{{$userData->cashPoint}}<br/>
                    <a href="#" class="btn btn-primary">更改密碼</a>
                </div>
            </div>
        </div>
        <div class="tab-pane fade in" id="tabPage2" role="tabpanel">
            <div class="card">
                <div class="container">
                    <h4 class="h4-responsive">輸入您的序號</h4>
                    <hr/>
                    <form action="./redeemCode" method="POST">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3">
                                <div class="input-field">
                                    <i class="material-icons prefix">credit_card</i>
                                    <input id="cashcode" name="cashcode" type="text" class="validate">
                                    <label for="icon_prefix">序號</label>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <center><button type="submit" class="btn indexButton" id="btnSubmit">儲值</button></center>
                    </form>
                </div>
            </div>
        </div>
        <div class="tab-pane fade in" id="tabPage3" role="tabpanel">
            <div class="card">
                <div class="conatiner">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <table class="table table-striped table-hover">
                                <thead><tr><th>儲值編號</th><th>卡號</th><th>貨品名稱</th><th>數量</th><th>儲值時間</th></tr></thead>
                                @foreach($redeemRecordList as $redeemRecord)
                                    <tr>
                                        <td>{{$redeemRecord->redeemID}}</td>
                                        <td>{{$redeemRecord->cardNumber}}</td>
                                        <td>{{$redeemRecord->productName}}</td>
                                        <td>{{$redeemRecord->quantity}}</td>
                                        <td>{{$redeemRecord->redeemDate}}</td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade in" id="tabPage4" role="tabpanel">
            <div class="card">
                <div class="conatiner">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <table class="table table-striped table-hover">
                                <thead><tr><th>訂單編號</th><th>價錢</th><th>時間</th><th>付款方法</th><th>狀態</th></tr></thead>
                                @foreach($orderRecordList as $order)
                                    <tr>
                                        <td>{{$order->orderID}}</td>

                                        <td>{{$order->totalPrice}}</td>
                                        <td>{{$order->orderDateTime}}</td>
                                        <td>{{$order->methodName}}</td>
                                        <td>{{$order->statusName}}</td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    var hash = window.location.hash;
    if(hash != "") {
        $(".nav-item")[0].classList.remove("active");
        $("#tabPage1")[0].classList.remove("active");
        switch (hash) {
            case "#info":
                $(".nav-item")[0].classList.add("active");
                $("#tabPage1")[0].classList.add("active");
                $("#tabPage1")[0].classList.add("in");
                break;
            case "#redeem":
                $(".nav-item")[1].classList.add("active");
                $("#tabPage2")[0].classList.add("active");
                $("#tabPage2")[0].classList.add("in");
                break;
            case "#record":
                $(".nav-item")[2].classList.add("active");
                $("#tabPage3")[0].classList.add("active");
                $("#tabPage3")[0].classList.add("in");
                break;
            case "#buyRecord":
                $(".nav-item")[3].classList.add("active");
                $("#tabPage4")[0].classList.add("active");
                $("#tabPage4")[0].classList.add("in");
                break;
            default:
                $(".nav-item")[0].classList.add("active");
                $("#tabPage1")[0].classList.add("active");
                $("#tabPage1")[0].classList.add("in");
                break;
        }
    }
</script>
</body>
</html>