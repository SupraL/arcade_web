<?php
    if($settingData->isOpen == 0){
        echo '<meta http-equiv="refresh" content="0; url=./close" />';
    }
?>
<script>
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();
    });
</script>
<nav class="navbar unique-color-dark navbar-fixed-top z-depth-1" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand waves-effect waves-light" href="{{ URL::asset('/') }}">ArcadeCrafts</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="nav-item">
                    @if (Session::has('username'))
                        <a class="nav-link" href="{{ URL::asset('/shop') }}">商店</a>
                    @endif
                    @if (Session::has('username'))
                        <li class="dropdown hidden-xs">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{Session::get('username')}} <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li class="divider hidden-lg"></li>
                                <li><a href="{{ URL::asset('/member') }}">帳號資訊</a></li>
                                <li><a href="{{ URL::asset('/member#record') }}">交易記錄</a></li>
                            </ul>
                        </li>
                    @else
                        <a class="nav-link" href="{{ URL::asset('/register') }}">免費註冊</a>
                    @endif
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">客服中心</a>
                </li>
                <li class="nav-item">
                    @if (Session::has('username'))
                        <a class="nav-link" href="{{ URL::asset('/logout') }}">登出</a>
                        @else
                        <a class="nav-link" href="{{ URL::asset('/login') }}">登入</a>
                    @endif
                </li>
            </ul>
        </div>
    </div>
</nav>
<div style="position:fixed;right:50px;bottom:50px;">
    <a href="http://m.me/1746892298886678" target="_blank" type="button" class="btn-floating btn-large btn-fb" style="background-color: #3b5999" data-toggle="tooltip" data-placement="top" title="線上客服">
        <img style="width:100%;height:100%" src="{{ secure_asset('img/fbMessage.png') }}"/>
    </a>
</div>
@extends('footer')