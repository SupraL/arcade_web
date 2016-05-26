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
            <li data-target="#carousel-example-1" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-1" data-slide-to="1"></li>
            <li data-target="#carousel-example-1" data-slide-to="2"></li>
            <li data-target="#carousel-example-1" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img class="indexGameImage" src="{{ URL::asset('img/bns02_pc_1920.jpg') }}" alt="First slide">
                <div class="carousel-caption">
                    <div class="verticalcenter">
                        <div class="animated fadeInDown">
                            <h3 class="h3-responsive">劍靈</h3>
                            <p>開啟3D線上遊戲大門 畫下里程碑的不朽經典巨作<br/>劍與魔法交織的奇幻世界 英雄與戰亂的浪漫冒險</p>
                            <a class="btn-floating btn-large red" href="./download"><i class="fa fa-download"></i></a>
                            <a class="btn-floating btn-large blue"><i class="fa fa-shopping-cart"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <img class="indexGameImage" src="{{ URL::asset('img/aion01_pc_1920.jpg') }}" alt="Second slide">
                <div class="carousel-caption">
                    <div class="verticalcenter">
                        <div class="animated fadeInDown">
                            <h3 class="h3-responsive">AION</h3>
                            <p>扮演天族或魔族，為了生存與理想，努力成為種族的英雄<br/>展開華麗的翅膀飛翔及戰鬥、體驗超乎想像的奇幻世界</p>
                            <a class="btn-floating btn-large red" href="./download"><i class="fa fa-download"></i></a>
                            <a class="btn-floating btn-large blue"><i class="fa fa-shopping-cart"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <img class="indexGameImage" src="{{ URL::asset('img/l201_pc_1920.jpg') }}" alt="Third slide">
                <div class="carousel-caption">
                    <div class="verticalcenter">
                        <div class="animated fadeInDown">
                            <h3 class="h3-responsive">新天堂II</h3>
                            <p>開啟3D線上遊戲大門 畫下里程碑的不朽經典巨作<br/>劍與魔法交織的奇幻世界 英雄與戰亂的浪漫冒險</p>
                            <a class="btn-floating btn-large red" href="./download"><i class="fa fa-download"></i></a>
                            <a class="btn-floating btn-large blue"><i class="fa fa-shopping-cart"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <img class="indexGameImage" src="{{ URL::asset('img/mxm02_pc_1920.jpg') }}" alt="Third slide">
                <div class="carousel-caption">
                    <div class="verticalcenter">
                        <div class="animated fadeInDown">
                            <h3 class="h3-responsive">MXM</h3>
                            <p>集結NC全明星的華麗對戰 熟悉的角色和全新英雄連袂出擊<br/>千變萬化的全新玩法 顛覆傳統MOBA與動作遊戲的刻板印象</p>
                            <a class="btn-floating btn-large red" href="./download"><i class="fa fa-download"></i></a>
                            <a class="btn-floating btn-large blue"><i class="fa fa-shopping-cart"></i></a>
                        </div>
                    </div>
                </div>
            </div>
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
                            <a href="#" style="font-size:20px">ArcadeCrafts</a><br/>
                            <div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div>
                        </div>
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
                        <!--<li class="list-group-item">
                            <div class="row">
                                <div class="col-md-8">
                                    asd
                                </div>
                                <div class="col-md-4">
                                    2016-05-18
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-md-8">
                                    asd
                                </div>
                                <div class="col-md-4">
                                    2016-05-18
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-md-8">
                                    asd
                                </div>
                                <div class="col-md-4">
                                    2016-05-18
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-md-8">
                                    asd
                                </div>
                                <div class="col-md-4">
                                    2016-05-18
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-md-8">
                                    asd
                                </div>
                                <div class="col-md-4">
                                    2016-05-18
                                </div>
                            </div>
                        </li>-->
                        <script type="text/javascript" src="https://localhost/forum/api.php?mod=js&bid=3"></script>
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