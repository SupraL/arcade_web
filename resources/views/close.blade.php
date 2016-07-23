<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ secure_asset('css/font-awesome-animation.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ secure_asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('css/mdb.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('css/custom_style.css') }}">
    <script src="{{ secure_asset('js/jquery.min.js')}}"></script>
    <script src="{{ secure_asset('js/bootstrap.min.js')}}"></script>
    <script src="{{ secure_asset('js/mdb.js')}}"></script>
    <meta charset="UTF-8">
    <title>ArcadeCrafts</title>
</head>
<body class="info-color">
<?php
    if($settingData->isOpen == 1){
        echo '<meta http-equiv="refresh" content="0; url=./" />';
    }
?>
<div class="container" style="margin-top:100px">
    <center>
        <i class="fa fa-wrench faa-wrench animated fa-5x" aria-hidden="true" style="color:white"></i>
        <h4 class="h4-responsive" style="color:white">網站正在進行維護，請稍後再試。</h4>
        <h5 class="h5-responsive" style="color:white">Our website is under maintenance, please try again later.</h5>
        <pre>{{$settingData->closeDescription}}</pre>
    </center>
</div>
</body>
</html>