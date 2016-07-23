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
        <hr/>
        <div class="row">
            <div class="col-md-6">
                <h5 class="section-title st-mdb" style="margin-bottom:5px">伺服器特色</h5>
                <h5><small>AlsaceWork使用比例型式製作伺服器,三個主題伺服,三個小遊戲伺服.令伺服器不失多類型及特色.現時主題伺服器以公會生存為主,既擁有RPG特色又有生存樂趣,迎合不同玩家的不同需求!而MiniGame方面以戰爭為主,令玩家遊戲時不但有快速的節奏而且不失其策略性.小遊戲分為三個伺服,以多種戰鬥格式:槍’刀’速’智進行遊戲,考驗你的智慧’思考及速度等等.</small></h5>
            </div>
            <div class="col-md-6">
                <h5 class="section-title st-mdb" style="margin-bottom:5px">團隊介紹</h5>
                <h5><small>AlsaceWork團隊團員各自擁有相當的伺服器製作經驗,由武器設計師到管理級別都有專業人士.團員製作出高質素的伺服,為的是令玩家擁有一個真真正正的難忘的遊戲時光.AlsaceWork團隊分為"系統管理-伺服託管-技術-製作及優化-伺服管理"作子團隊,各自不同的分工令AlsaceWork可以以較高質素營運.其中各子團隊都有不同工作,令每一個細節都可以運作得清晰明確.</small></h5>
            </div>
        </div>
        <hr/>
        <div class="row">
            <div class="col-md-4">
                <center>
                    <div class="row">
                        <div class="col-md-3"><img class="featureIcon" src="{{ secure_asset('img/code.png')}}"/></div>
                        <div class="col-md-9">
                            <h4 style="text-align:left;margin-top:0"><small><b>WEBPRESS</b> NEW WEB SYSTEM</small></h4>
                        </div>
                    </div>
                    <h5 style="text-align:left"><small>網服使用WordPress網頁系統,以方便即時發佈有關伺服器更新資訊.而且伺服更自行製作不同的動態GUI頁面,令用戶不需進行繁複的動作瀏覽網頁.</small></h5>
                </center>
            </div>
            <div class="col-md-4">
                <center>
                    <div class="row">
                        <div class="col-md-3"><img class="featureIcon" src="{{ secure_asset('img/link.png')}}"/></div>
                        <div class="col-md-9">
                            <h4 style="text-align:left;margin-top:0"><small><b>DATA LINK</b><br/>SUPPORT</small></h4>
                        </div>
                    </div>
                    <h5 style="text-align:left"><small>伺服器及資料庫系統連結是本伺服的特色之一,因此網頁的系統功能也因此與Minecraft伺服器連接起來.可令玩家與網頁及伺服器有更多的互動.</small></h5>
                </center>
            </div>
            <div class="col-md-4">
                <center>
                    <div class="row">
                        <div class="col-md-3"><img class="featureIcon" src="{{ secure_asset('img/talk.png')}}"/></div>
                        <div class="col-md-9">
                            <h4 style="text-align:left;margin-top:0"><small><b>XENFORO 1.5</b><br/>FORUM</small></h4>
                        </div>
                    </div>
                    <h5 style="text-align:left"><small>AlsaceWork是一個強調網頁互動的伺服團隊,因此只有一堆自製系統是沒有用的.所以我們使用了Xenforo網上論壇,給大家遊玩伺服器之餘,也可以上上論壇與玩家討論一下.</small></h5>
                </center>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <center>
                    <div class="row" style="margin-top:10px">
                        <div class="col-md-3"><img class="featureIcon" src="{{ secure_asset('img/shop.png')}}"/></div>
                        <div class="col-md-9">
                            <h4 style="text-align:left;margin-top:0"><small><b>ALSACEWORK</b><br/>ONLINE SHOP</small></h4>
                        </div>
                    </div>
                    <h5 style="text-align:left"><small>AlsaceWork團隊的技術人員自行製作網上商店系統,擁有全面的php製作,數據庫系統選用32GB Ram伺服器主機存記數據,因此玩家可以快捷地在我們的網上商店進行交易,買賣等.</small></h5>
                </center>
            </div>
            <div class="col-md-4">
                <center>
                    <div class="row" style="margin-top:10px">
                        <div class="col-md-3"><img class="featureIcon" src="{{ secure_asset('img/lock.png')}}"/></div>
                        <div class="col-md-9">
                            <h4 style="text-align:left;margin-top:0"><small><b>WEB SECURITY</b><br/>SSL</small></h4>
                        </div>
                    </div>
                    <h5 style="text-align:left"><small>我們使用SSL安全系統,保護玩家網上用戶資料.保障玩家不會因為黑客攻擊而損失用戶資料,所以可以放心使用我們的網上系統.</small></h5>
                </center>
            </div>
            <div class="col-md-4">
                <center>
                    <div class="row" style="margin-top:10px">
                        <div class="col-md-3"><img class="featureIcon" src="{{ secure_asset('img/file.png')}}"/></div>
                        <div class="col-md-9">
                            <h4 style="text-align:left;margin-top:0"><small><b>SERVER SKIN</b><br/>RESOURCEPACK</small></h4>
                        </div>
                    </div>
                    <h5 style="text-align:left"><small>自家製作Minecraft資源包,以加強玩家在伺服器的遊戲體驗.資源包內有大量字體材質圖,物品等等,可以令伺服器的物品,文字有突破性的轉變.讓玩家可體驗AlsaceWork更多!</small></h5>
                </center>
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