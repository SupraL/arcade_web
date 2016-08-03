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
<br/>
<br/>
<br/>
<br/>
<div style="height:40px;width:100%;background:#F5F5F5">
    <div class="container">
        <ol class="breadcrumb" style="padding: 10px">
            <li><a href="./">主頁</a></li>
            <li class="active">下載專區</li>
        </ol>
    </div>
</div>
<div class="container">
    <h3 class="h3-responsive">下載專區</h3>
    <hr/>
    <h5 class="h5-responsive"><b>遊戲主程式下載</b></h5>
	<ul class="collection with-header">
        <li class="collection-header">
            <h4>Minecraft - 《戰爭創界》伺服器模組包</h4><br/>用戶進入伺服器必須安裝此模組包，否則將會出現無法進入伺服器的錯誤。</li>
        <li class="collection-item">
            <div>Google Drive （共 <mark>3</mark> 個分流）； 分流狀態：<abbr title="Available"><span class="label rgba-green-strong">一</span></abbr> <abbr title="Available"><span class="label rgba-green-strong">二</span></abbr> <abbr title="Disabled"><span class="label rgba-red-strong">三</span></abbr> <abbr title="Server provide: Google - https://drive.google.com/"><i class="fa fa-ellipsis-h fa-lg right"></i></abbr><a href="#!" class="secondary-content" data-toggle="modal" data-target="#myModal"><i class="fa fa-download fa-2x"></i></a></div>
        </li>
        <li class="collection-item">
            <div>One Drive<a href="#!" class="secondary-content" data-toggle="modal" data-target="#myModal"><i class="fa fa-download fa-2x"></i></a></div>
        </li>
        <li class="collection-item">
            <div>Dropbox<a href="#!" class="secondary-content" data-toggle="modal" data-target="#myModal"><i class="fa fa-download fa-2x"></i></a></div>
        </li>
        <li class="collection-item">
            <div>BaiduYun 百度云<a href="#!" class="secondary-content" data-toggle="modal" data-target="#myModal"><i class="fa fa-download fa-2x"></i></a></div>
        </li>
    </ul>
</div>
 <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Google Drive</h4>
		  <p>《戰爭創界》伺服器模組包（～１２５ＭＢ）
		  <li>若一個分流無法下載請嘗試其他的下載分流</li>
		  <li>請不要惡意濫用下載服務，給予其他玩家一個好的體驗</li></p>
        </div>
        <div class="modal-body">
          <div class="btn-group" data-toggle="buttons">
  <label class="btn btn-primary active">
    <input type="radio" name="options" id="option1" autocomplete="off" checked> 分流一 (建議)
  </label>
  <label class="btn btn-primary">
    <input type="radio" name="options" id="option2" autocomplete="off"> 分流二
  </label>
  <label class="btn btn-primary" disabled>
    <input type="radio" name="options" id="option3" autocomplete="off"> 分流三
  </label>
</div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">關閉</button>
        </div>
      </div>
      
    </div>
  </div>
</body>
</html>