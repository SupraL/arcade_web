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
<body background="{{ secure_asset('img/minecraftBg.png')}}" style="background-repeat: no-repeat;background-size: 100% 600px">
@extends('header')
<br/>
<br/>
<br/>
<br/>
<div style="height:40px;width:100%;background:#F5F5F5">
    <div class="container">
        <ol class="breadcrumb" style="padding: 10px">
            <li><a href="../">主頁</a></li>
            <li><a href="./">遊戲</a></li>
            <li class="active">Minecraft</li>
        </ol>
    </div>
</div>
<div class="container">
    <div class="card" style="margin-top:50px;background-color:rgba(255,255,255,0.8);">
        <div class="container">
            <h4 class="h4-responsive">背景故事</h4>
            <hr/>
            <pre style="margin-right: 30px;word-wrap: break-word;white-space: pre-wrap">2000多年前,人類因為地獄神凱拉的冰河魔法和惡靈魔法兩大原因而瀕危滅絕, 剩下在地球最多為半神族和少量神族, 或者是被毒龍尼德霍格的血 所腐化的神族或人族---魔族, 人類成了最少數量的種族。<br/><br/>上古時期,凱拉的兩位哥哥-耶夢加得和芬里爾 為了拯救他們的父親---洛基,而引發「諸神的黃昏」, 大部分神祇都因為這場戰難陣亡, 而剩下的都來到地球,凱拉想連最後的神族都殺光, 為她的父親和兩位哥哥報仇,在遠古時期 她找到他們後發動冰河魔法和惡靈魔法企圖殺光他們, 但結果是殺了97%人類, 卻只殺死少數神/半神,而且還讓奧丁等神 趁機從冥界突破空間桎梏逃走, 所以派了很多怪物來地球報仇<br/><br/>之後...遠古時期後人族和神族共同建立 公國以對抗凱拉的進攻,歷史上有8個公國 分別是遠古公國,阿斯加特,大和公國,不落公國 月夜公國,耶阿特,血月公國和聖光公國 其中聖光公國和月夜公國聯合,成為現在的 公國聯盟,不落公國則因為王的死靈魔法研究 失敗而滅亡,血月公國和遠古公國因為凱拉的進攻 而滅亡,最強大的2個公國分別是阿斯加特和耶阿特, 阿斯加特是奧丁和其他神族所建立的, 為了對抗凱拉和收服聖城阿斯加特, 耶阿特則是遠古人族屠龍英雄貝奧武夫所建立, 為了對抗凱拉和神族,因為貝奧武夫認為人族的危機 是奧丁這些所謂自稱為神族的人帶來的,就連終焉之龍 世界啃蝕者--尼德霍格都是他殺掉的,他認為與其相信 所謂神族,不如倚靠自己人族和被龍血侵蝕的轉化為 魔族的人比較好,阿斯加特和耶阿特互相合作或戰鬥 但他們的共同目標都是擊敗凱拉
            </pre>
        </div>
    </div>
</div>
</body>
</html>