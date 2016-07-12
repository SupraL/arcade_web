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
    <link rel="stylesheet" href="{{ secure_asset('css/custom_nav.css') }}">
    <script src="{{ secure_asset('js/jquery.min.js')}}"></script>
    <script src="{{ secure_asset('js/bootstrap.min.js')}}"></script>
    <script src="{{ secure_asset('js/mdb.js')}}"></script>
    <meta charset="UTF-8">
    <title>ArcadeCrafts</title>
</head>
<body>
@extends('header')
    <div id="carousel-example-1" class="carousel slide carousel-fade carousel-bg" data-interval="false">
        <ol class="carousel-indicators">
            @foreach($gameData as $key=>$game)
                @if($key == 0)
                    <li data-target="#carousel-example-1" data-slide-to="{{$key}}" class="active"></li>
                @else
                    <li data-target="#carousel-example-1" data-slide-to="{{$key}}"></li>
                @endif
            @endforeach
        </ol>
        <div class="carousel-inner" role="listbox">
            @foreach($gameData as $key=>$game)
                <div class="item {{($key == 0)?'active':''}}">
                    <img class="indexGameImage" src="./image/{{$game->gameID}}?bg=1" alt="First slide">
                    <div class="carousel-caption">
                        <div class="verticalcenter">
                            <div class="animated fadeInDown">
                                <h3 class="h3-responsive">{{$game->gameName}}</h3>
                                <p>{!!html_entity_decode($game->gameDescription)  !!}</p>
                                <a class="btn-floating btn-large red" href="./games/{{$game->gameID}}"><i class="fa fa-home"></i></a>
                                <a class="btn-floating btn-large success-color-dark" href="./download"><i class="fa fa-download"></i></a>
                                <a class="btn-floating btn-large blue" href="./shop"><i class="fa fa-shopping-cart"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <a class="left carousel-control" href="#carousel-example-1" role="button" data-slide="prev">
            <span class="icon-prev" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-1" role="button" data-slide="next">
            <span class="icon-next" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="row" style="margin:10px">
                        <div class="col-md-3">
                            <img height="60px" width="60px" src="{{ URL::asset('img/logo.jpg') }}"/>
                        </div>
                        <div class="col-md-9">
                            <a href="https://www.facebook.com/Arcade-Crafts-Studio-1746892298886678/" style="font-size:20px">ArcadeCrafts</a><br/>
                            <div class="fb-like" data-href="https://www.facebook.com/Arcade-Crafts-Studio-1746892298886678/" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div>                        </div>
                    </div>
                </div>
                <button type="button" class="btn indexButton btn-lg btn-block">遊戲下載</button>
                <button type="button" class="btn indexButton btn-lg btn-block">付費介紹</button>
                <button type="button" class="btn indexButton btn-lg btn-block">討論專區</button>
            </div>
            <div class="col-md-4">
                <div class="text-xs-center">
                    <h5 class="h5-responsive"><b>新聞活動</b><i class="fa fa-ellipsis-h fa-lg right"></i></h5>
                    <hr>
                    <ul class="list-group">
                        @foreach($noticeList as $notice)
                                <a href="viewNotice/{{$notice->noticesID}}"><li class="list-group-item"><span class="label {{$notice->gameColor}} label-pill">[{{$notice->gameName}}]</span> {{$notice->title}}</li></a>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="text-xs-center">
                    <h5 class="h5-responsive"><b>玩家論壇</b><i class="fa fa-ellipsis-h fa-lg right"></i></h5>
                    <hr>
                    <ul class="list-group">
                        <script type="text/javascript" src="{{Config::get('app.bbsUrl')}}/api.php?mod=js&bid=3"></script>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    @extends('footer')
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/zh_HK/sdk.js#xfbml=1&version=v2.6&appId=396299537210860";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
</body>
</html>