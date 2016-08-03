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
                                @if($game->isTitleShow)
                                    <h3 class="h3-responsive">{{$game->gameName}}</h3>
                                @endif
                                <div class="alphaTextContainer">
                                <p>{!!html_entity_decode($game->gameDescription)  !!}</p>
                                </div>
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
                <a href="download"><button type="button" class="btn indexButton btn-lg btn-block">遊戲下載</button></a>
                <a href="http://m.me/1746892298886678"><button type="button" class="btn indexButton btn-lg btn-block">支援服務</button></a>
                <a href="http://bbs.arcadecrafts.net/"><button type="button" class="btn indexButton btn-lg btn-block">官方論壇</button></a>
            </div>
            <div class="col-md-4">
                <div class="text-xs-center">
                    <h5 class="h5-responsive"><b>新聞活動</b><a href="./viewNotice" style="color:#000000"><i class="fa fa-ellipsis-h fa-lg right"></i></a></h5>

                    <ul class="list-group">
                        <script type="text/javascript" src="{{Config::get('app.bbsUrl')}}/api.php?mod=js&bid=5"></script>
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="text-xs-center">
                    <h5 class="h5-responsive"><b>玩家論壇</b><i class="fa fa-ellipsis-h fa-lg right"></i></h5>

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
                <h5><small>購買伺服器全數由成員自資（不用害怕出現租約問題），製作伺服器並沒有任何的收益，有的只是各成員對電腦的興趣及熱情。<br><br>
                        完全自行控制的伺服器，任何除錯、故障均能夠即時處理，比坊間租用的伺服器等待供應商處理更加迅速、穩定。<br><br>
                        伺服器系統採用 Windows Server 2012，雖然比不上Linux的系統低耗，但使用起來更加方便，穩定。</small></h5>
            </div>
            <div class="col-md-6">
                <h5 class="section-title st-mdb" style="margin-bottom:5px">團隊介紹</h5>
                <h5><small>Arcade Crafts 是我們的工作室名稱，我們是由幾位具備數年不同的電腦及網頁程式編寫經驗的年輕人組成。<br><br>
                        工作室的成員均熱愛電子遊戲，希望透過成立工作室，把舊時曾經熱門的遊戲重新展現於廣大玩家眼前，延續該遊戲的歷程。<br><br>
                        我們由2015年中開始籌劃、收集資源、編寫網頁及客戶端、測試及改良舊有遊戲玩法。</small></h5>
            </div>
        </div>
        <hr/>
        <div class="card" style="padding:20px">
        <div class="row">
            <div class="col-md-4">
                <center>
                    <div class="row">
                        <div class="col-md-3"><i id="icon" class="fa fa-cc" style="text-shadow: rgb(179, 107, 36) 0px 0px 0px, rgb(198, 119, 40) 1px 1px 0px, rgb(217, 130, 43) 2px 2px 0px, rgb(236, 142, 47) 3px 3px 0px; font-size: 43px; color: rgb(255, 255, 255); height: 80px; width: 80px; line-height: 80px; border-radius: 50%; text-align: center; background-color: rgb(255, 153, 51);"></i></div>
                        <div class="col-md-9">
                            <h4 style="text-align:left;margin-top:0"><small><b>原創玩法</b><br/>獨特技能系統</small></h4>
                        </div>
                    </div>
                    <h5 style="text-align:left"><small>戰爭創界（當個創世神）伺服器採用模組及自定制插件，擁有特殊的技能狀態，比起一般的RPG伺服器的技能更加獨特，玩法創新，更為刺激！</small></h5>
                </center>
            </div>
            <div class="col-md-4">
                <center>
                    <div class="row">
                        <div type="button" class="col-md-3" data-toggle="modal" data-target="#quick-look-ex"><i id="icon" class="fa fa-server" style="text-shadow: rgb(29, 139, 179) 0px 0px 0px, rgb(32, 153, 198) 1px 1px 0px, rgb(35, 168, 217) 2px 2px 0px, rgb(38, 183, 236) 3px 3px 0px; font-size: 43px; color: rgb(255, 255, 255); height: 80px; width: 80px; line-height: 80px; border-radius: 50%; text-align: center; background-color: rgb(41, 198, 255);"></i></div>
                        <div class="col-md-9">
                            <h4 style="text-align:left;margin-top:0"><small><b>私人伺服器</b><br/>租約無煩惱<br/></small></h4>
                        </div>
                    </div>
                    <h5 style="text-align:left"><small>購買伺服器全數由成員自資（不用害怕出現租約問題），伺服器採用Windows Server系統，放置於一位成員家居網絡達1000Mbps的房間中。</small></h5>
                </center>
            </div>
            <div class="col-md-4">
                <center>
                    <div class="row">
                        <div class="col-md-3"><i id="icon" class="fa fa-download" style="text-shadow: rgb(42, 32, 179) 0px 0px 0px, rgb(46, 36, 198) 1px 1px 0px, rgb(51, 39, 217) 2px 2px 0px, rgb(56, 43, 236) 3px 3px 0px; font-size: 43px; color: rgb(255, 255, 255); height: 80px; width: 80px; line-height: 80px; border-radius: 50%; text-align: center; background-color: rgb(60, 46, 255);"></i></div>
                        <div class="col-md-9">
                            <h4 style="text-align:left;margin-top:0"><small><b>原創登錄器</b><br/>網遊必備遊戲啟動器</small></h4>
                        </div>
                    </div>
                    <h5 style="text-align:left"><small>擁有數年不同的電腦編程經驗的成員更加為伺服器建立了一套完整的客戶端，玩家可以使用登入器進行下載本工作室推出的所有遊戲，更內置自動更新功能，免卻一切手動安裝的煩惱！</small></h5>
                </center>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <center>
                    <div class="row" style="margin-top:10px">
                        <div class="col-md-3"><i id="icon" class="fa fa-cloud" style="text-shadow: rgb(95, 64, 179) 0px 0px 0px, rgb(105, 71, 198) 1px 1px 0px, rgb(115, 78, 217) 2px 2px 0px, rgb(125, 85, 236) 3px 3px 0px; font-size: 43px; color: rgb(255, 255, 255); height: 80px; width: 80px; line-height: 80px; border-radius: 50%; text-align: center; background-color: rgb(135, 92, 255);"></i></div>
                        <div class="col-md-9">
                            <h4 style="text-align:left;margin-top:0"><small><b>雲端伺服器</b><br/>多重備份更安心</small></h4>
                        </div>
                    </div>
                    <h5 style="text-align:left"><small>除了私人伺服器外，更採用加密雲端，每天定期將伺服器數據及資料備份至雲端伺服器，就算一個伺服器崩潰，也不用擔心遊戲進度遺失的問題！</small></h5>
                </center>
            </div>
            <div class="col-md-4">
                <center>
                    <div class="row" style="margin-top:10px">
                        <div class="col-md-3"><i id="icon" class="fa fa-bug" style="text-shadow: rgb(179, 54, 54) 0px 0px 0px, rgb(198, 60, 60) 1px 1px 0px, rgb(217, 65, 65) 2px 2px 0px, rgb(236, 71, 71) 3px 3px 0px; font-size: 43px; color: rgb(255, 255, 255); height: 80px; width: 80px; line-height: 80px; border-radius: 50%; text-align: center; background-color: rgb(255, 77, 77);"></i></div>
                        <div class="col-md-9">
                            <h4 style="text-align:left;margin-top:0"><small><b>除錯處理</b><br/>多種回報渠道</small></h4>
                        </div>
                    </div>
                    <h5 style="text-align:left"><small>玩家除了可以透過官方論壇的回報專區進行漏洞回報外，亦可以透過線上客服進行回報，工程組收到回報後會第一時間進行漏洞修復。若問題確實存在，舉報者更有遊戲資源的獎賞！</small></h5>
                </center>
            </div>
            <div class="col-md-4">
                <center>
                    <div class="row" style="margin-top:10px">
                        <div class="col-md-3"><i id="icon" class="fa fa-shopping-cart" style="text-shadow: rgb(8, 130, 0) 0px 0px 0px, rgb(9, 144, 0) 1px 1px 0px, rgb(10, 158, 0) 2px 2px 0px, rgb(11, 172, 0) 3px 3px 0px; font-size: 43px; color: rgb(255, 255, 255); height: 80px; width: 80px; line-height: 80px; border-radius: 50%; text-align: center; background-color: rgb(12, 186, 0);"></i></div>
                        <div class="col-md-9">
                            <h4 style="text-align:left;margin-top:0"><small><b>線上購物系統</b><br/>方便快捷的購物渠道</small></h4>
                        </div>
                    </div>
                    <h5 style="text-align:left"><small>完善的線上購物平台，玩家除了可以直接在商店購買遊戲內的專用點數用於遊戲內購買物品外，更可以購買定時推出的捆綁優惠包，在遊戲中成最為耀目的存在！</small></h5>
                </center>
            </div>
        </div>
        </div>
        <hr/>
        <blockquote class="blockquote bq-primary">
            <p class="bq-title"><b>我們非常需要您！</b></p>
            <p>由於製作《戰爭·創界》人手不足，為加快建設進度，我們懇請有興趣的你，加入我們共同建設一個完善、優質的當個創世神伺服器！</p>
        </blockquote>
        <table class="table">
            <thead>
            <tr>
                <th>#</th>
                <th>職位名稱</th>
                <th>工作摘要</th>
                <th>需求人數</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">1</th>
                <td>場景建築組</td>
                <td>負責伺服器副本、活動場景製作；修補地形、美化建築以及其他一般建築。</td>
                <td>~ 3 - 5</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>服裝設計組</td>
                <td>負責伺服器不同職業的服裝製作；定期為伺服器製作特別迎節服裝。</td>
                <td>~ 1 - 3</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>插件製作組</td>
                <td>負責伺服器的插件製作、除錯等；翻譯及重製市面上不兼容的插件亦是重要的工作之一。</td>
                <td>~ 2 - 3</td>
            </tr>
            <tr>
                <th scope="row">4</th>
                <td>繪圖組（師）</td>
                <td>負責伺服器日常宣傳圖、封面圖的製作；協助工作室成員繪畫人設、形象設計。</td>
                <td>~ 2 - 4</td>
            </tr>
            <tr>
                <th scope="row">備註</th>
                <td colspan="3">目前伺服器仍在建設階段，主要希望有喜歡建設的玩家加入我們，所以暫時開放申請沒有其他職位噢~待伺服器正式開放後才會陸續開放管理團隊的職位申請！</td>
            </tr>
            </tbody>
        </table>

        <blockquote class="blockquote">
            <p class="m-b-0">假如您對以上任何一項工作有興趣的話，請點 <mark><a href="http://joinus.arcadecrafts.net/minecraft">這裡進入申請系統</a></mark> ，填妥表格遞交申請，謝謝！</p>
        </blockquote>

</div>
<!-- Modal -->
<div class="modal fade ql-modal" id="quick-look-ex" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <!--Content-->
        <div class="modal-content">
            <!--Header-->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">私人伺服器</h4>
            </div>
            <!--Body-->
            <div class="modal-body">
                <!--Grid-->
                <div class="container-fluid">
                            <!--Carousel Wrapper-->
                            <div id="carousel-example-1" class="carousel slide carousel-fade" data-ride="carousel">
                                <img src="https://na.cx/i/85Eh8q.jpg" height="400" width="540">
                            </div>
                            <!--/.Carousel Wrapper-->
                </div>
                <!--/.Grid-->

            </div>
            <!--Footer-->
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">關閉</button>
            </div>
        </div>
        <!--/.Content-->
    </div>
</div>
<!--/Modal-->

    <div id="fb-root"></div>
    <script>
        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/zh_HK/sdk.js#xfbml=1&version=v2.6&appId=396299537210860";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
</body>
</html>