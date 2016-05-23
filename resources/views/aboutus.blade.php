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
    <script src="{{ URL::asset('js/jquery.min.js')}}"></script>
    <script src="{{ URL::asset('js/bootstrap.min.js')}}"></script>
    <script src="{{ URL::asset('js/mdb.js')}}"></script>
    <meta charset="UTF-8">
    <title>ArcadeCrafts</title>
    <script>
        if(window.location.hash) {
            $("#tabus1").removeClass("active");
            $("#tabus2").removeClass("active");
            $("#tabus3").removeClass("active");
            $("#tabus4").removeClass("active");
                    var hash = window.location.hash.substring(1);
            switch(hash){
                case "tabus1":
                    $("#tabus1").addClass("active");
                    break;
                case "tabus2":
                    $("#tabus2").addClass("active");
                    break;
                case "tabus3":
                    $("#tabus3").addClass("active");
                    break;
                case "tabus4":
                    $("#tabus4").addClass("active");
                    break;
            }
        }
    </script>
</head>
<body onSelectStart="event.returnValue=false">

@extends('header')
<br/>
<br/>
<br/>
<br/>
<div style="height:40px;width:100%;background:#F5F5F5">
    <div class="container">
        <ol class="breadcrumb" style="padding: 10px">
            <li><a href="./">主頁</a></li>
            <li class="active">關於我們</li>
        </ol>
    </div>
</div>
<div class="container">
    <ul class="nav nav-tabs tabs-4" role="tablist" style="margin-top: 15px;">
	    <li class="nav-item active">
            <a class="nav-link" data-toggle="tab" href="#tabus1" role="tab"><i class="fa fa-users" aria-hidden="true"></i> 關於我們</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#tabus2" role="tab"><i class="fa fa-book" aria-hidden="true"></i> 服務條款</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#tabus3" role="tab"><i class="fa fa-tty" aria-hidden="true"></i> 服務政策</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#tabus4" role="tab"><i class="fa fa-bank" aria-hidden="true"></i> 私隱政策</a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane fade in active" id="tabus1" role="tabpanel">
            <div class="card">
                <div class="container">
                    <h3 class="h3-responsive">關於我們</h3>
                    <hr />
						<pre style="margin-right: 30px;word-wrap: break-word">
test<br><br><br><br><br><br><br>3252352332><br>4<br><br><br><br><br><br><br><br>3<br><br>
						</pre>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="tabus2" role="tabpanel">
            <div class="card">
                <div class="container">
                    <h3 class="h3-responsive">服務條款</h3>
                    <hr />
						<pre style="margin-right: 30px;word-wrap: break-word;white-space: pre-wrap">
本網站—— Arcade Crafts 遊戲工作室（以下簡稱本工作室）為提供資訊與服務之目的而設置。在瀏覽本網站之前，請詳細閱讀本服務條款；倘若您未滿二十歲，則請您與您的法定代理人共同詳細閱讀本服務條款。如果您或您的法定代理人不同意服務條款的規定，則請您立即停止瀏覽或使用本工作室提供之任何資訊與服務。一旦您繼續瀏覽或使用本工作室提供之任何資訊與服務，則視為您與您的法定代理人同意遵守本服務條款。本工作室得隨時更改本工作室之內容與服務條款，且所有修改將於本服務條款刊登後生效。倘若您或您的法定代理人不同意本工作室對於網站內容與服務條款所為之更改，亦請您立刻停止瀏覽或使用本工作室提供之任何資訊與服務。本服務條款所提及之其他由本工作室製作的使用準則、條款、協議、交易頁面所呈現之相關資訊、網站活動辦法及其他應注意事項，亦為本服務條款的一部份。

免責聲明
本工作室對於用戶於遊戲、論壇或是其它社群平台上的行為及言論蓋不負擔任何責任。同時本工作室保留權力移除任何用戶內容、並且無須事先通知或警告。
我們強烈建議用戶不向他人分享或是洩露您的個人資訊，這包含任何可以證實用戶個人身分的資料（身分證字號、電話號碼、地址等等），或是任何可以危害用戶帳號安全的資料（個人電子信箱、安全問題答案等等）。
請留意代表本工作室的工作人員皆不會向您索取帳號密碼。

(1) 本網站的部份內容可能係由第三方網站所提供，且本網站將可能引導您至第三方網站的服務或網站。若您決定使用第三方網站的服務或網站，您應接受第三方網站的條款與約定。本工作室對於您與第三方網站間的所有約定，及其他第三方網站所提供的服務或網站內容不負責任。

(2) 本工作室所提供之任何資訊與服務，包含文字、程式、軟體、音樂、聲音、影像、圖片、動態影帶、網站之格式與安排或其他資料之所有權、著作權、商標權、專利 權及其他權利，均屬本工作室及/或其他權利人擁有並受法律的保護，未經本工作室或該權利人之同意，任何人均無權擅自重製、散布、改作、編輯、公開播送、公 開傳輸、移轉、租用或出售上述資料或從事其他不法之利用，若因此發生侵權情事，行為人應自行承擔法律責任，本工作室並將行使一切法律上得追究的權利。

(3) 任何人如有意下載並安裝或使用本工作室製作之軟體，均須接受軟體本身之授權合約之拘束。如果不同意接受軟體授權合約之拘束，則不得安裝或使用該軟體，並且禁止將軟體拷貝或重製至其他伺服器或其他媒介、或進行修改、進行還原工程、解編或反向組譯，或對於該軟體從事其他之開發，或移除或變更任何軟體上之註冊商標、標誌與使用者注意事項。

(4) 任何人在瀏覽或使用本工作室所提供之任何資訊與服務時，均應遵守相關之法律或規範，並且不得有以下之行為：
(4.1) 服務內容
(4.1.1)	使用本工作室所提供之服務從事非法行為。
(4.1.2)	進行干擾或中斷本工作室網站之服務或連接至此服務之伺服器或網路的行為。
(4.1.3)	轉售本工作室網站之免費服務或連接至此的各項免費服務而居中牟利。
(4.1.4)	張貼、傳輸或散佈任何不實、誘騙、誤導或引人錯誤性質之廣告或其他任何宣傳資料。
(4.1.5)	傳輸任何有侵犯他人權利之虞的資料。
(4.1.6)	傳輸任何可能教唆他人從事犯罪或其他不法行為的資料。
(4.1.7)	傳輸違反國內外現行法令的資料。
(4.1.8)	利用本站傳輸任何有害、不當、違法、威脅、辱罵、干擾性、誹謗、粗俗、淫穢、憎恨或其他任何令人厭惡或反感的訊息、文字、圖片、檔案、連結、軟體或其他形式之資料。
(4.1.9)	以言語或文字形式騷擾或威脅其他玩家。本工作室不會容忍任何形式的騷擾行為，違者帳號將可能以停權或撤銷處分。
(4.1.10) 以本工作室提供的服務散布任何色情內容。

(4.2) 遊戲內容
(4.2.1)	於論壇、遊戲內聊天頻道、遊戲語音散布具有違法、脅迫、辱罵、猥褻、誹謗、歧視或任何構成攻擊性行的騷擾內容。
(4.2.2)	以言語或口語攻擊本工作室之任何一位工作人員，違者帳號將可能以停權或撤銷處分。
(4.2.3)	於論壇重新張貼已受列管內容。如有對於該文章被更改或移除的疑問，請聯絡社群管理員。
(4.2.4)	刻意濫用遊戲錯誤或漏洞，違者帳號將可能以停權或撤銷處分。
(4.2.5)	更改或破壞遊戲或伺服器代碼，違者帳號將以立即撤銷處分，另外將可能涉及法律責任。
(4.2.6)	使用任何第三方作弊程式。

(4.3) 用戶名稱
(4.3.1) 使用違反行為規範的名稱。這包含具有色情、辱罵、猥褻、誹謗、歧視或任何構成攻擊性行的字眼。
(4.3.2) 使用騷擾或誹謗其他用戶的名稱。
(4.3.3) 使用冒充本工作室之工作人員的名稱。
(4.3.4) 使用侵犯版權或商標的名稱。
(4.3.5) 使用流行文化與媒體相關的名稱。
(4.3.6) 使用涉及宗教或歷史意義的名稱。
(4.3.7) 使用涉及恐怖組織或事件的名稱。
(4.3.8) 使用以錯字或諧音違反以上項目的名稱。
(4.3.9) 使用與疾病、藥物、毒品及酒精飲料相關的名稱。
(4.3.10) 使用因結合姓氏與姓名而違反以上項目的名稱。
(4.3.11) 本工作室保留使用與本工作室推出之遊戲服務相關之名稱的權利。
任何涉及違反行為規範或使用條款的行為將會遭受本工作室的工作人員進一步的調查。本工作室保留權力暫停、終止或刪除用戶帳號，並且無須事先通知或警告，詳情請參閱有關本工作室的服務政策。

(5) 任何人如因有意使用本工作室所提供之任何服務，而依據該服務之個別服務條款自願傳輸或登錄個人資料，則必須保證其自行傳輸或登錄之個人資料之真實性，如有任何虛偽不實，應自行承擔所有責任。本工作室將依據刊登在本工作室的隱私權聲明，處理所傳輸或登錄的個人資料。除以下情況或該服務之個別服務條款或本工作室的隱私權政策另有規定外，本工作室未獲得使用者同意以前，將不會對外揭露登錄者之姓名、地址、電子郵件地址及其他依法受保護之個人資料：
(5.1)基於法律規定。
(5.2)受司法機關或其他有權機關基於法定程序之要求。
(5.3)為保障本工作室之財產及權益。
(5.4)在緊急情況下為維護其他登錄者、使用者或第三人之人身安全。
(5.5)本工作室絕不販售或任意提供登錄者或使用者之個人資料給第三者（個人或公司團體），但是本工作室或其關係企業，為了市場行銷之需要，得運用登錄者或使用者的部分個人資料。
本工作室會謹遵守相關的私隱政策。

(6) 本工作室對於本網站上之任何內容，均以該內容之現實狀態放置於網站上，本工作室在放置之前雖然已盡合理之檢查，但其內容是否具備特定之效能、是否 合用、可靠、未侵害他人權利等，本工作室無法提供任何擔保或保證。本工作室對於因為下列因素所致的一切直接、間接、附隨、衍生的或特別的損害，不負任何賠償責任:
(6.1) 因為使用本工作室所提供之任何資訊與服務;
(6.2) 因為中斷或無法使用本工作室所所提供之任何資訊與服務;
(6.3) 因為您或本網站所使用之設備或程式所產生的錯誤或不正確之資訊或技術上的錯誤;或
(6.4) 因為第三人未經授權而修改本網站之任何資訊。
此外，本工作室上之內容亦可能因為人 為錯誤而有疏漏、誤寫、誤算，甚至因為時間之經過，卻未及時更新而不具新穎或時效性，本工作室對此亦不負保證或擔保之義務。

(7) 本工作室之使用者必須遵守包括著作權法、商標法、刑法、個人資料保護法等法令在內的各相關法律與規範、本服務條款及本工作室所列之其他規定。若有違反，本工作室可以隨時停止其瀏覽或使用本工作室提供之各項服務的權利，並且追究相關法律責任，倘因違反以致本工作室遭受損失，使用者與其法定代理人應負賠償責任（包含合理之律師費用及訴訟費用）。

(8) 對於您上載、傳送、輸入或提供至本網站的各種資料，本工作室不負任何責任。您於本網站所表達的意見亦不代表本工作室之意見。 您同意授權本工作室及其關係企業得不限使用方式無償地於全球以任何形式在任何媒體管道推廣與發佈，包括但不限於修改、重製、公開播送、公開傳輸、改作、散布、發行、公開發表、或其他方式使用您上載、傳送、輸入或提供至本網站的各種資料，本工作室並有權將前述權利轉授權予他人。 您須確保您有權將該資料上載、傳送、輸入或提供至本網站並有權授予本工作室前述權利。
若您上載、傳送、輸入或提供至本網站的資訊涉嫌侵權行為，本工作室有權將有侵權疑慮之資料自本網站移除或不再提供您本網站之服務。 若您認為該資料或服務並無侵權情事者，您得檢具相關證據通知本工作室。

(9) 於註冊成為本網站會員(下稱會員)時，您應提供真實、正確、最新且完整的個人資料。
您應負責維護您帳戶的帳號密碼之機密性。
若本工作室知悉會員之帳號密碼被盜用時，得立即暫停或終止該會員的密碼、帳號或本網站之使用，或移除與該會員相關之資料。
您應遵守本服務條款所有相關法律規定。
本工作室保留得隨時在網站活動期間或結束後，行使包括但不限於確認您的參加資格、或取消因您的不當行為而獲得之獎勵等權利。不行使上述權利不表示本工作室放棄這些權利。

(10) 任何因瀏覽或使用本工作室提供之任何服務而產生之爭議，都應該以香港特別行政區之法律為準據法。萬一有爭議無法解決而涉訟，則應該以香港特別行政區轄下法院為第一審轄法院。
						</pre>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="tabus3" role="tabpanel">
            <div class="card">
                <div class="container">
                    <h3 class="h3-responsive">關於我們</h3>
                    <hr />
						<pre style="margin-right: 30px;word-wrap: break-word;">
test<br><br><br><br><br><br><br>3252352332><br>4<br><br><br><br><br><br><br><br>3<br><br>
						</pre>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="tabus4" role="tabpanel">
            <div class="card">
                <div class="container">
                    <h3 class="h3-responsive">私隱政策</h3>
                    <hr />
						<pre style="margin-right: 30px;word-wrap: break-word;">
							test
						</pre>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>