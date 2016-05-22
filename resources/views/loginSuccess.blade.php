<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/mdb.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/custom_style.css') }}">
    <script src="{{ URL::asset('js/jquery.min.js')}}"></script>
    <script src="{{ URL::asset('js/bootstrap.min.js')}}"></script>
    <script src="{{ URL::asset('js/mdb.js')}}"></script>
    <meta charset="UTF-8">
    <title>ArcadeCrafts</title>
</head>
<body>
<br/><br/><br/><br/>
    @if (Session::has('username'))
        <div class="container">
            <center>
                <div class="preloader-wrapper big active">
                    <div class="spinner-layer spinner-blue-only">
                        <div class="circle-clipper left">
                            <div class="circle"></div>
                        </div><div class="gap-patch">
                            <div class="circle"></div>
                        </div><div class="circle-clipper right">
                            <div class="circle"></div>
                        </div>
                    </div>
                </div>
                <br/>
                <h4 class="h4-responsive"><b>{{Session::get('username')}}</b>您好，系統正在準備您的內容...</h4>
            </center>
        </div>
        <meta http-equiv="refresh" content="2; url=../" />
    @else
        <meta http-equiv="refresh" content="0; url=../" />
@endif
</body>
</html>