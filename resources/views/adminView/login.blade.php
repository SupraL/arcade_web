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
    <script src="{{ secure_asset('js/jquery.min.js')}}"></script>
    <script src="{{ secure_asset('js/bootstrap.min.js')}}"></script>
    <script src="{{ secure_asset('js/mdb.js')}}"></script>
    <meta charset="UTF-8">
    <title>ArcadeCrafts</title>
</head>
<body>
<?php
if(isset($errorCode)){
    if($errorCode == 1){
        echo "<script>toastr.warning('帳號或密碼錯誤!');</script>";
    }
    if($errorCode == -1){
        echo '<meta http-equiv="refresh" content="0; url=./admin/index" />';
    }
}
?>
<div class="container">
    <div class="col-md-7 col-md-offset-2" style="margin-top:20px">
        <div class="card testimonial-card">

            <div class="card-up default-color-dark">
            </div>

            <div class="avatar"><img src="{{ secure_asset('img/images.jpg')}}" class="img-circle img-responsive" height="120">
            </div>

            <div class="card-block">
                <form action="./admin" method="POST">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <div class="input-field">
                                <i class="material-icons prefix">account_circle</i>
                                <input id="username" name="username" type="text" class="validate" >
                                <label for="icon_prefix">帳號名稱</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <div class="input-field">
                                <i class="material-icons prefix">vpn_key</i>
                                <input id="password" name="password" type="password" class="validate">
                                <label for="icon_prefix">密碼</label>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <a href="#" class="pull-right" style="margin-bottom:10px;margin-right:20px" onclick="this.parentNode.submit()"><i class="fa fa-sign-in"></i> Login</a>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                </form>
            </div>

        </div>
    </div>
</div>
</body>
</html>