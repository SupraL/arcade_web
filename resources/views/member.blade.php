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
            if($type == "openGame"){
                switch($errorCode){
                    case "1":
                        echo "<script>toastr.warning('Mojang帳號或密碼錯誤！');</script>";
                        break;
                    case "2":
                        echo "<script>toastr.warning('此帳號已經綁定過了>.^');</script>";
                        break;
                    case "-1":
                        echo "<script>toastr.success('Minecraft帳號綁定成功！');</script>";
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
                <div class="row">
                    <div class="col-md-6">
                        <h4 class="panel-heading">帳戶資料</h4>
                        <div class="card-block container">
                            <label style="font-size: 18px;color:#000000">用戶名稱：{{Session::get("username")}}</label><br/>
                            <label style="font-size: 18px;color:#000000">電郵地址：{{Session::get("email")}}</label><br/>
                            <label style="font-size: 18px;color:#000000">點數剩餘：{{$userData->cashPoint}}</label><br/>
                            <a href="#" class="btn btn-primary">更改密碼</a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h4 class="panel-heading">開通遊戲</h4>
                        <div class="col-md-4" style="margin-top:10px">
                            @if(empty($userData->mcID))
                                <a href="#" data-toggle="modal" data-target="#MinecraftAuthModal"><img class="greyImage" src="./image/gam00005" style="width:100px;height:100px"/></a>
                            @else
                                @if(isset($userData->UUID))
                                    <div class="skinItem"><a href="#" data-toggle="tooltip" data-container="body" title="{{$userData->nickName}}<br/><img src='./mcSkinViewer/{{$userData->nickName}}'/>" data-html="true" data-placement="left"><img src="./image/gam00005" style="width:100px;height:100px"/></a></div>
                                @else
                                    <div class="skinItem"><a href="#" data-toggle="tooltip" data-container="body" title="{{$userData->nickName}}<br/><img src='./mcSkinViewer/ArcadeCraftsDefault'/>" data-html="true" data-placement="left"><img src="./image/gam00005" style="width:100px;height:100px"/></a></div>
                                @endif
                            @endif
                        </div>
                    </div>
                </div>
                <br/>
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
                                        <td><a href="#" class="orderDetailsLink" data-toggle="modal" data-target="#orderDetailsModal">{{$order->orderID}}</a></td>
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
<div class="modal fade" id="orderDetailsModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <!--Content-->
        <div class="modal-content">
            <!--Header-->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="modalTitle">Modal title</h4>
            </div>
            <!--Body-->
            <div class="modal-body">
                <iframe id="orderDetailsFrame" src="" frameBorder="0" scrolling="yes" style="width:100%;height:100%"></iframe>
            </div>
            <!--Footer-->
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
        <!--/.Content-->
    </div>
</div>
<script>
    $(document).ready(function(){
        $(".orderDetailsLink").click(function(){
            $("#modalTitle").text($(this).text());
            $("#orderDetailsFrame").attr('src',"./viewOrderDetails/" + $(this).text());
            $("#orderDetailsFrame").css('overflow-x','hidden');
        });
    });


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

@if(empty($userData->mcID))
<div class="modal fade" id="MinecraftAuthModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <!--Content-->
        <div class="modal-content">
            <!--Header-->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">註冊戰爭創界帳號</h4>
            </div>

                <ul class="nav nav-tabs tabs-2" role="tablist">
                    <li class="nav-item active">
                        <a class="nav-link" data-toggle="tab" href="#genuineUser" role="tab">正版玩家</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#happyVerUser" role="tab">開心版玩家</a>
                    </li>
                </ul>
            <div class="tab-content">
                <div class="tab-pane active fade in" id="genuineUser" role="tabpanel">
                    <form action="./mojangAuthGateway" method="POST">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="input-field">
                                    <i class="material-icons prefix">account_circle</i>
                                    <input id="username" name="moj_username" type="text" class="validate">
                                    <label for="icon_prefix">Mojang電郵</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="input-field">
                                    <i class="material-icons prefix">vpn_key</i>
                                    <input id="moj_password" name="moj_password" type="password" class="validate">
                                    <label for="icon_prefix">Mojang密碼</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="input-field">
                                    <i class="material-icons prefix">pan_tool</i>
                                    <input id="server_password" name="server_password" type="password" class="validate">
                                    <label for="icon_prefix">伺服器登入密碼</label>
                                </div>
                            </div>
                        </div>
                        <hr/>
                        <center>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">關閉</button>
                            <button type="submit" class="btn btn-primary">註冊</button>
                        </center>
                        <br/>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    </form>
                </div>
                <div class="tab-pane fade in" id="mcHappyVerUser" role="tabpanel">
                    <form action="./mcHappyVerReg" method="POST">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="input-field">
                                    <i class="material-icons prefix">account_circle</i>
                                    <input id="mc_username" name="mc_username" type="text" class="validate">
                                    <label for="icon_prefix">伺服器登入帳號</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="input-field">
                                    <i class="material-icons prefix">pan_tool</i>
                                    <input id="mc_password" name="mc_password" type="text" class="validate">
                                    <label for="icon_prefix">伺服器登入密碼</label>
                                </div>
                            </div>
                        </div>
                        <hr/>
                        <center>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">關閉</button>
                            <button type="button" class="btn btn-primary">註冊</button>
                        </center>
                        <br/>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
</body>
</html>