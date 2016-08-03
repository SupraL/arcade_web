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
<body background="{{ secure_asset('https://na.cx/i/w163TE.png')}}" style="background-repeat: no-repeat;background-size: 100% ;background-attachment: fixed">
@extends('header')
<br/>
<br/>
<br/>
<br/>
<div style="height:40px;width:100%;background:#F5F5F5">
    <div class="container">
        <ol class="breadcrumb" style="padding: 10px">
            <li><a href="../">主頁</a></li>
            <li><a href="../games">遊戲</a></li>
            <li class="active">Minecraft</li>
        </ol>
    </div>
</div>
<div class="container">
    <ul class="nav nav-tabs tabs-2" role="tablist" style="margin-top: 15px;background-color:rgba(255,255,255,0.8);">
        <li id="tab1" class="nav-item active">
            <a class="nav-link" data-toggle="tab" href="#tabBg" role="tab">背景故事</a>
        </li>
        <li id="tab2" class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#tabJob" role="tab">職業介紹</a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane fade in active" id="tabBg" role="tabpanel">
            <div class="card" style="background-color:rgba(255,255,255,0.8);">
                <div class="container">
					<h4 class="h4-responsive">背景故事</h4>
                    <hr/>
					<img src="https://na.cx/i/1J00Sn.jpg" height="500" width="97%" style="display:block"><br/><br/>
                    <pre style="margin-right: 30px;word-wrap: break-word;white-space: pre-wrap">
神話記載時期，冥界女神“凱拉”的兩位哥哥——“耶夢加得”和“芬里爾”，為了拯救他們的父親——“洛基”繼而引發「<abbr title="HyperText Markup Language" class="initialism">諸神的黃昏</abbr>」事件，導致大部分神族都因為這場戰難而陣亡，而剩下的神族都逃來到地球。而 “凱拉”想連最後的神族都殺光，是為了替她的父親和兩位哥哥報仇。<br/>
在遠古時期(2016年~2099年)，“凱拉”找到他們後發動冰河魔法和死靈魔法企圖殺光他們，人類則因為她的施法而瀕危滅絕。地球最後剩下的種族，大多為半神族，剩餘的分別是神族以及因毒龍“尼德霍格”的血而腐化的神族及人族——統稱為魔族。人類由起初的地球之主削減成數量最少的種族。此時，已在數百年前逝去的“奧丁”及其餘神、人兩族的傳說英雄更把握機會趁機從冥界成功突破空間「桎梏」逃走，重返人間。因遺反冥界規條，身為冥界女神的“凱拉”不得不命令大量怪物來地球捉拿他們。<br/>
直到2100年，人族和神族共同建立公國以對抗凱拉的怪物進攻。歷史上一共有8個公國，分別是「聯合公國」、「阿斯加特」、「大和公國」、「不落公國」、「月夜公國」、「卡美洛」、「血月公國」和「聖光公國」。 <br/>
其中「聖光公國」和「月夜公國」聯合，成為現在的「公國聯盟」；「不落公國」則因為國王的死靈魔法研究失敗而導致滅亡；「血月公國」和「聯合公國」因為“凱拉”的進攻而導致滅亡；最強大的2個公國分別是「阿斯加特」和「卡美洛」。<br/>
「阿斯加特」是奧丁和其他神族為了對抗“凱拉”和收服聖城阿斯加特而建立；「卡美洛」則是遠古人族傳說英雄“亞瑟王”所建立。<br/>
為了對抗“凱拉”和神族，“亞瑟王”認為人族的危機是“奧丁”這些所謂的神族所帶來的禍害，他認為與其相信神族，不如倚靠自己所統領的人族和被龍血侵蝕而轉化為魔族的人比較好。另一邊廂，「阿斯加特」和「卡美洛」則互相合作，他們的共同目標都是擊敗“凱拉”。<br/>
“凱拉”第一次降臨時(2800年)，“亞瑟王”和“奧丁”犠牲了王者之劍和永恆之槍去擊退她；第二次降臨時(3500年)時，「聯合公國」舉全國之力製作出人類科技的巔峰之作——“人工智慧天使沙法莉葉”和“沙法莉雅”來對抗“凱拉”，不過最終以「聯合公國」的滅亡、“沙法莉葉”的暴走以及奧丁的八腳馬死亡作為代價而暫時打退“凱拉”。現在距離“凱拉”的第三次的降臨(4200年)不遠了，究竟剩餘的最後4個公國透過「新人族計劃」製造出來的能力者能否把“凱拉”打退呢？
                    </pre>
					
                </div>
            </div>
        </div>
        <div class="tab-pane fade in" id="tabJob" role="tabpanel">
            <div class="card" style="background-color:rgba(255,255,255,0.8);">
                <div class="container">
                    <h4 class="h4-responsive">職業介紹</h4>
                    <hr/>
                    <div class="row">
                        <div class="col-md-2">
                        </div>

                        <div class="col-md-8">
                            <h4 class="h4-responsive">聖騎士<br/><small>近戰坦克</small></h4>
                            <div class="jumbotron">
                                <h5 class="h5-responsive">神族中最強的騎士,以聖城阿斯嘉特的最終守護者而驕傲,而這種驕傲在諸神黃昏中被摧毀掉,所以即使其他人在獲得聖騎士的力量後都會不自覺有仇恨凱拉的心態</h5>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="pull-right">
                                <a class="btn rating ">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </a>
                                <br/>
                                <br/>
                                <h5 class="h5-responsive">技能介紹</h5>
                                <div class="col-md-6 skillItem" style="padding:0">
                                    <a href="#" data-toggle="tooltip" title="[被動] 騎士意志<br/><font size='2px'>獲得回復藥水lv1(+1)效果<br/>技能等級上限: 2<br/>學習等級: 15<br/>再學習等級間隔: +35</font>" data-html="true" data-placement="left">
                                        <img style="height:50px;width:50px"/>
                                    </a>
                                </div>
                                <div class="col-md-6 skillItem" style="padding:0">
                                    <a href="#" data-toggle="tooltip" title="[主動] 衝鋒<br/><font size='2px'>獲得速度藥水lv3效果和3(+2)物理攻擊,持續3秒<br/>冷卻時間: 8秒 <br/>技能等級上限: 15 <br/>學習等級: 15 <br/>再學習等級間隔: +3</font>" data-html="true" data-placement="left">
                                        <img style="height:50px;width:50px"/>
                                    </a>
                                </div>
                                <div class="col-md-6 skillItem" style="padding:0;margin-top:10px">
                                    <a href="#" data-toggle="tooltip" title="[主動] 堅定意志<br/><font size='2px'>獲得抗性lv2(減免40%傷害),持續3(+1)秒<br/>冷卻時間: 20秒<br/>技能等級上限: 3<br/>學習等級: 15<br/>再學習等級間隔: +15</font>" data-html="true" data-placement="left">
                                        <img style="height:50px;width:50px"/>
                                    </a>
                                </div>
                                <div class="col-md-6 skillItem" style="padding:0;margin-top:10px">
                                    <a href="#" data-toggle="tooltip" title="[主動] 鋼鐵護盾<br/><font size='2px'>把附近5格敵人拉過來,獲得20(+60)護盾,持續3(+1)秒<br/>冷卻時間: 22(-2)秒<br/>技能等級上限: 4<br/>學習等級: 15<br/>再學習等級間隔: +25</font>" data-html="true" data-placement="left">
                                        <img style="height:50px;width:50px"/>
                                    </a>
                                </div>
                                <div class="col-md-6 skillItem" style="padding:0;margin-top:10px">
                                    <a href="#" data-toggle="tooltip" title="[大招] 正義裁決<br/><font size='2px'>對3格內的1名目標造成50(+50)傷害,目標低於50%血,造成額外50(+25)傷害,低於25%再造成,額外75(+25)傷害<br/>冷卻時間: 180(-40)秒<br/>技能等級上限: 3<br/>學習等級: 40<br/>再學習等級間隔: +25</font>" data-html="true" data-placement="left">
                                        <img style="height:50px;width:50px"/>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr/>
                    <div class="row">
                        <div class="col-md-2">
                        </div>

                        <div class="col-md-8">
                            <h4 class="h4-responsive">死亡騎士<br/><small>近戰,集坦克,輸出於一身</small></h4>
                            <div class="jumbotron">
                                <h5 class="h5-responsive">神族中最瘋狂的騎士,本來的隊伍的名字叫英靈殿騎士,是英靈殿所訓練的死士,在諸神黃昏中以命換命般殺敵,因此被後來的人稱為死亡騎士</h5>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="pull-right">
                                <a class="btn rating ">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </a>
                                <br/>
                                <br/>
                                <h5 class="h5-responsive">技能介紹</h5>
                                <div class="col-md-6 skillItem" style="padding:0">
                                    <a href="#" data-toggle="tooltip" title="[被動] 光榮戰死<br/><font size='2px'>死亡後對5格內的敵人造成25(+20)點傷害<br/>技能等級上限: 6<br/>學習等級: 15<br/>再學習等級間隔: +8</font>" data-html="true" data-placement="left">
                                        <img style="height:50px;width:50px"/>
                                    </a>
                                </div>
                                <div class="col-md-6 skillItem" style="padding:0">
                                    <a href="#" data-toggle="tooltip" title="[主動] 衝鋒<br/><font size='2px'>獲得速度藥水lv3效果和3(+2)物理攻擊,持續3秒<br/>冷卻時間: 8秒 <br/>技能等級上限: 15 <br/>學習等級: 15 <br/>再學習等級間隔: +3</font>" data-html="true" data-placement="left">
                                        <img style="height:50px;width:50px"/>
                                    </a>
                                </div>
                                <div class="col-md-6 skillItem" style="padding:0;margin-top:10px">
                                    <a href="#" data-toggle="tooltip" title="[主動] 堅定意志<br/><font size='2px'>獲得抗性lv2(減免40%傷害),持續3(+1)秒<br/>冷卻時間: 20秒<br/>技能等級上限: 3<br/>學習等級: 15<br/>再學習等級間隔: +15</font>" data-html="true" data-placement="left">
                                        <img style="height:50px;width:50px"/>
                                    </a>
                                </div>
                                <div class="col-md-6 skillItem" style="padding:0;margin-top:10px">
                                    <a href="#" data-toggle="tooltip" title="[主動] 奉獻<br/><font size='2px'>擊飛身旁敵人,對其造成20(+12)傷害<br/>冷卻時間: 8秒<br/>技能等級上限: 10<br/>學習等級: 15<br/>再學習等級間隔: +8</font>" data-html="true" data-placement="left">
                                        <img style="height:50px;width:50px"/>
                                    </a>
                                </div>
                                <div class="col-md-6 skillItem" style="padding:0;margin-top:10px">
                                    <a href="#" data-toggle="tooltip" title="[大招] 亡命突擊<br/><font size='2px'>清除所有負面效果,獲得2倍速度,持續2(+1)秒和20(+20)攻擊,持續5秒<br/>冷卻時間: 140(-25)秒<br/>技能等級上限: 3<br/>學習等級: 40<br/>再學習等級間隔: +20</font>" data-html="true" data-placement="left">
                                        <img style="height:50px;width:50px"/>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr/>
                    <div class="row">
                        <div class="col-md-2">
                        </div>

                        <div class="col-md-8">
                            <h4 class="h4-responsive">劍聖<br/><small>近戰輸出</small></h4>
                            <div class="jumbotron">
                                <h5 class="h5-responsive">神族中最崇高的職業,勝利之神費雷和弒龍戰神齊格菲的職業都是劍聖,由此可見劍聖這個職業的厲害</h5>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="pull-right">
                                <a class="btn rating ">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                </a>
                                <br/>
                                <br/>
                                <h5 class="h5-responsive">技能介紹</h5>
                                <div class="col-md-6 skillItem" style="padding:0">
                                    <a href="#" data-toggle="tooltip" title="[被動] 風之祝福<br/><font size='2px'>被動獲得4(+4)點護盾,持續30秒,每30秒刷新<br/>技能等級上限: 15<br/>學習等級: 15<br/>再學習等級間隔: +4</font>" data-html="true" data-placement="left">
                                        <img style="height:50px;width:50px"/>
                                    </a>
                                </div>
                                <div class="col-md-6 skillItem" style="padding:0">
                                    <a href="#" data-toggle="tooltip" title="[被動] 風刃<br/><font size='2px'>增加4(+4)普攻傷害<br/>冷卻時間: 8秒 <br/>技能等級上限: 5<br/>學習等級: 15<br/>再學習等級間隔: +18</font>" data-html="true" data-placement="left">
                                        <img style="height:50px;width:50px"/>
                                    </a>
                                </div>
                                <div class="col-md-6 skillItem" style="padding:0;margin-top:10px">
                                    <a href="#" data-toggle="tooltip" title="[主動] 暴風之刃<br/><font size='2px'>對直線4格範圍造成6(+3)傷害,增加自身速度80%,持續2秒並標記該敵人,持續10秒,當標記疊了第三次時會擊飛敵人,擊飛後2秒內才可使用大招<br/>冷卻時間: 3秒<br/>技能等級上限: 14<br/>學習等級: 15<br/>再學習等級間隔: +4</font>" data-html="true" data-placement="left">
                                        <img style="height:50px;width:50px"/>
                                    </a>
                                </div>
                                <div class="col-md-6 skillItem" style="padding:0;margin-top:10px">
                                    <a href="#" data-toggle="tooltip" title="[主動] 冥想<br/><font size='2px'>4秒內治療自身8次,共回復80(+40)血量,其間獲得50%傷害減免,無法攻擊和100%緩速<br/>冷卻時間: 30(-3)秒<br/>技能等級上限: 5<br/>學習等級: 15<br/>再學習等級間隔: +12</font>" data-html="true" data-placement="left">
                                        <img style="height:50px;width:50px"/>
                                    </a>
                                </div>
                                <div class="col-md-6 skillItem" style="padding:0;margin-top:10px">
                                    <a href="#" data-toggle="tooltip" title="[大招] 終結一擊<br/><font size='2px'>飛到被暴風之刃擊飛的敵人身邊,對其造成125(+75)傷害,並增加自身10(+8)點普攻傷害,持續10秒<br/>冷卻時間: 120(-30)秒<br/>技能等級上限: 3<br/>學習等級: 40<br/>再學習等級間隔: +15</font>" data-html="true" data-placement="left">
                                        <img style="height:50px;width:50px"/>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr/>
                    <div class="row">
                        <div class="col-md-2">
                        </div>

                        <div class="col-md-8">
                            <h4 class="h4-responsive">審判者<br/><small>近戰,集坦克,輸出於一身</small></h4>
                            <div class="jumbotron">
                                <h5 class="h5-responsive">人族中最神聖的兩種職業之一,以保護弱者和審判邪惡聞名</h5>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="pull-right">
                                <a class="btn rating ">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </a>
                                <br/>
                                <br/>
                                <h5 class="h5-responsive">技能介紹</h5>
                                <div class="col-md-6 skillItem" style="padding:0">
                                    <a href="#" data-toggle="tooltip" title="[被動] 審判之力<br/><font size='2px'>每22(-1)秒,普攻點燃敵人,在5秒內對敵人造成15(+10)真實傷害,並緩速敵人15%<br/>技能等級上限: 18<br/>學習等級: 15<br/>再學習等級間隔: +5</font>" data-html="true" data-placement="left">
                                        <img style="height:50px;width:50px"/>
                                    </a>
                                </div>
                                <div class="col-md-6 skillItem" style="padding:0">
                                    <a href="#" data-toggle="tooltip" title="[被動] 罪惡審判<br/><font size='2px'>每當你擊殺時,回復2(+3)點血量<br/>技能等級上限: 10<br/>學習等級: 15<br/>再學習等級間隔: +8</font>" data-html="true" data-placement="left">
                                        <img style="height:50px;width:50px"/>
                                    </a>
                                </div>
                                <div class="col-md-6 skillItem" style="padding:0;margin-top:10px">
                                    <a href="#" data-toggle="tooltip" title="[主動] 審判之光(80[+2]魔力)<br/><font size='2px'>自己獲得5(+3)點傷害減免,持續10秒<br/>冷卻時間: 30秒<br/>技能等級上限: 8<br/>學習等級: 19 再學習等級間隔: +10</font>" data-html="true" data-placement="left">
                                        <img style="height:50px;width:50px"/>
                                    </a>
                                </div>
                                <div class="col-md-6 skillItem" style="padding:0;margin-top:10px">
                                    <a href="#" data-toggle="tooltip" title="[主動] 審判輔助(40魔力)<br/><font size='2px'>召喚一隻狼,牠有20(+10)血量,4(+4)攻擊,持續12秒<br/>冷卻時間: 9(-1)秒 技能等級上限: 5<br/>學習等級: 15<br/>再學習等級間隔: +10</font>" data-html="true" data-placement="left">
                                        <img style="height:50px;width:50px"/>
                                    </a>
                                </div>
                                <div class="col-md-6 skillItem" style="padding:0;margin-top:10px">
                                    <a href="#" data-toggle="tooltip" title="[大招] 審判之火(150[+50]魔力)<br/><font size='2px'>向12格的目標範圍降臨3波火炮,每個火炮造成10傷害,每1波有90個火炮,其間緩速其內敵人45%<br/>冷卻時間: 120(-30)秒<br/>技能等級2時會先降臨1個50真實傷害的大炮<br/>技能等級3時會額外降臨3波火炮,從第3波開始降臨速度加快<br/>冷卻時間: 180(-30)秒<br/>技能等級上限: 3<br/>學習等級: 40<br/>再學習等級間隔: +20</font>" data-html="true" data-placement="left">
                                        <img style="height:50px;width:50px"/>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr/>
                    <div class="row">
                        <div class="col-md-2">
                        </div>

                        <div class="col-md-8">
                            <h4 class="h4-responsive">聖光牧<br/><small>遠程輸出,治療者,支援者</small></h4>
                            <div class="jumbotron">
                                <h5 class="h5-responsive">人族中最神聖的兩種職業之一,強大的治療能力和支援能力令聖光牧聞名天下,但似乎因為治療能力的關係,他們的近戰攻擊是沒有傷害的</h5>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="pull-right">
                                <a class="btn rating ">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </a>
                                <br/>
                                <br/>
                                <h5 class="h5-responsive">技能介紹</h5>
                                <div class="col-md-6 skillItem" style="padding:0">
                                    <a href="#" data-toggle="tooltip" title="[主動] 聖光之雷<br/><font size='2px'>對1個目標降下聖雷,造成13(+5)傷害<br/>冷卻時間: 3秒<br/>技能等級上限: 16<br/>學習等級: 15<br/>再學習等級間隔: +5</font>" data-html="true" data-placement="left">
                                        <img style="height:50px;width:50px"/>
                                    </a>
                                </div>
                                <div class="col-md-6 skillItem" style="padding:0">
                                    <a href="#" data-toggle="tooltip" title="[主動] 召喚聖光石粉<br/><font size='2px'>召喚1顆聖光石粉,可合成各種物品<br/>冷卻時間: 400(-30)秒<br/>技能等級上限: 5<br/>學習等級: 15<br/>再學習等級間隔: +15</font>" data-html="true" data-placement="left">
                                        <img style="height:50px;width:50px"/>
                                    </a>
                                </div>
                                <div class="col-md-6 skillItem" style="padding:0;margin-top:10px">
                                    <a href="#" data-toggle="tooltip" title="[主動] 治療術<br/><font size='2px'>回復友方+20(+4),50%血以下回復量增加50%<br/>冷卻時間: 6秒<br/>技能等級上限: 15<br/>學習等級: 15<br/>再學習等級間隔: +4</font>" data-html="true" data-placement="left">
                                        <img style="height:50px;width:50px"/>
                                    </a>
                                </div>
                                <div class="col-md-6 skillItem" style="padding:0;margin-top:10px">
                                    <a href="#" data-toggle="tooltip" title="[主動] 治療聖光盾<br/><font size='2px'>治療自身10%最大血量+20(+40),獲得8(+4)護盾,持續8秒<br/>冷卻時間: 16秒<br/>技能等級上限: 5<br/>學習等級: 15<br/>再學習等級間隔: +10</font>" data-html="true" data-placement="left">
                                        <img style="height:50px;width:50px"/>
                                    </a>
                                </div>
                                <div class="col-md-6 skillItem" style="padding:0;margin-top:10px">
                                    <a href="#" data-toggle="tooltip" title="[大招] 超級治療術<br/><font size='2px'>對5格內1位友方回復200(+100),目標50%血量以下增加50%和增加40(+40)護盾,持續15秒<br/>冷卻時間: 195(-20)秒<br/>技能等級上限: 3<br/>學習等級: 40<br/>再學習等級間隔: +15</font>" data-html="true" data-placement="left">
                                        <img style="height:50px;width:50px"/>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>