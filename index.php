<?php include_once "base220.php";?>

<!DOCTYPE html>
<html lang="zh-tw">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>科技大學介紹網</title>
  <!-- <link rel="stylesheet" href="./plugins/bootstrap.css">  在根目錄 -->
  <link rel="stylesheet" href="plugins/bootstrap.min.css">
  <!-- css -->
  <link rel="stylesheet" href="plugins/custom.css">
  <!-- icon -->
  <link rel="shortcut icon" href="imgs/favicon.ico" type="image/x-icon">
  <!-- 字型在css -->
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC&family=Open+Sans:ital@1&display=swap"
    rel="stylesheet">
  <script src="https://kit.fontawesome.com/145a02c86c.js" crossorigin="anonymous"></script>
  <script src="plugins/jquery-3.5.1.min.js"></script>
  <script src="./js/js.js"></script>
  <script src="plugins/bootstrap.bundle.min.js"></script>
</head>

<body>

<nav class="nav fixed-top font-weight-bold">
      <nav class="navbar navbar-dark navbar-expand-lg bg-dark w-100">
        <a class="navbar-brand" href="#Asaslider">科技大學介紹網</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
          aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
          <ul class="navbar-nav w-100">
            <li class="nav-item">
              <a class="nav-link .a:hover" href="#lokiroom">校園介紹 <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#asanews">最新消息</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#asaunit">行政單位</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#asatraffic">交通資訊</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="asadown.php">下載專區</a>
            </li>
            <li class="nav-item ml-auto">
              <div class="nav-link text-white" style="color:white !important;">
                <?php
                  if(!empty($_SESSION['login'])){
                    // echo "歡迎，".$_SESSION['login'] ;
                    if($_SESSION['login']=='admin'){
                      echo "<a href='admin.php' style='color:white !important;'>後台管理</a>";
                      echo "|<a href='api/logout.php' style='color:white !important;'>登出</a>";
                    }else{
                      echo "<a href='api/logout.php' style='color:white !important;'>登出</a>";
                    }
                  }else{
                    echo "<a href='front/login.php' style='color:white !important;'>後台管理</a>";
                  }
                ?>
              </div>
            </li>
          </ul>
        </div>
      </nav>
    </nav>
  </header>
  </header>

  <!-- 頁首區 -->

  <?php
    $table='title';
    $db=new DB($table);
    $rows=$db->all();
  ?>

  <section id="Asaslider" class="carousel slide" data-ride="carousel" data-pause="false" data-interval="5000">
    <ol class="carousel-indicators">
      <li data-target="#Asaslider" data-slide-to="0" class="active"></li>
      <li data-target="#Asaslider" data-slide-to="1"></li>
      <li data-target="#Asaslider" data-slide-to="2"></li>
      <li data-target="#Asaslider" data-slide-to="3"></li>
    </ol>
    <div class="carousel-inner">
      <div class=" carousel-item vh-100 active">
        <img src="img/<?=$rows[0]['img'];?>" class="w-100 h-100">
        <div class="carousel-caption d-flex flex-column justify-content-center  ">
          <h1><i class="fab fa-asymmetrik"></i><?=$rows[0]['text'];?></h1>
        </div>
      </div>
      <div class=" carousel-item vh-100">
        <img src="img/<?=$rows[1]['img'];?>" class="w-100 h-100">
        <div class="carousel-caption d-flex flex-column justify-content-center  ">
          <h1><i class="fab fa-asymmetrik"></i><?=$rows[1]['text'];?></h1>
        </div>
      </div>
      <div class=" carousel-item vh-100">
        <img src="img/<?=$rows[2]['img'];?>" class="w-100 h-100">
        <div class="carousel-caption d-flex flex-column justify-content-center  ">
          <h1><i class="fab fa-asymmetrik"></i><?=$rows[2]['text'];?></h1>
        </div>
      </div>
      <div class=" carousel-item vh-100">
        <img src="img/<?=$rows[3]['img'];?>" class="w-100 h-100">
        <div class="carousel-caption d-flex flex-column justify-content-center  ">
          <h1><i class="fab fa-asymmetrik"></i><?=$rows[3]['text'];?></h1>
        </div>
      </div>

    </div>
    <a class="carousel-control-prev" href="#Asaslider" role="button" data-slide="prev">
      <span class="fas fa-caret-left fa-5x"></span>
    </a>
    <a class="carousel-control-next" href="#Asaslider" role="button" data-slide="next">
      <span class="fas fa-caret-right fa-5x"></span>
    </a>
  </section>
<!-- ------------------------------------------------------------------------------------------------------------------- -->
  <!-- 校園介紹   -->
  <section id="lokiroom" class="container py-5">
    <header class="text-center text-info ">
      <h2 class="pb-3">校園介紹</h2>
      <nav class="nav nav-tabs justify-content-around border-bottom border-info">
        <a class="border-0 mb-0 text-white shadow-sm alert-info nav-item nav-link active" data-toggle="tab"
          href="#roomA">校園簡介</a>
        <a class="border-0 mb-0 text-white shadow-sm alert-info nav-item nav-link" data-toggle="tab"
          href="#roomB">校園環境</a>
        <a class="border-0 mb-0 text-white shadow-sm alert-info nav-item nav-link" data-toggle="tab"
          href="#roomC">校園資源</a>
        <a class="border-0 mb-0 text-white shadow-sm alert-info nav-item nav-link" data-toggle="tab"
          href="#roomRule">報名資格</a>
      </nav>
    </header>

    <article class="tab-content py-5">
      <div class="row tab-pane  fade show active" id="roomA">

        <p class="col-12 text-muted  mb-5 ">
        1961年本校創建於新北市北泰山，1980年改制為大學。創校逾50年，規模漸備，校譽日隆，本校目前設有工、商、理、人文社會、資訊電機、建設、經營管理、金融、國際科技與管理、建築專業等10個學院，招生日間學制計有37個學士班、42個碩士班、14個博士班，進修學制計有17個碩士在職專班、3個進修學士班；共頒授57種學士學位、76種碩士學位及14種博士學位。全校大學部、碩博士班及在職進修學生逾2萬人，教職員工近2,200人，已培育出17萬名社會中堅，畢業生整體表現自2008年起每年均名列臺灣1,000大企業最愛大學生前10名，顯示優質的畢業生一直是企業最愛進用的人才本校以成為一所「教學卓越、研究重點突破之亞太地區知名大學」為校務發展願景，期能立足臺灣、縱橫亞太地區、進而放眼國際，並以「培育兼具人文素養與專業知識之現代民主社會公民」為教育目標。
        2005至2016年每年均獲得教育部獎勵大學教學卓越計畫，並八度榮獲教學卓越全國第一，顯示本校對學生專業知識的扎根與軟能力的養成深獲社會肯定；商管相關學系全數通過國際AACSB教育認證，工程相關學系全數通過國際IEET教育認證，確保本校教學品質符合國際標準。2012年成為全臺唯一校務評鑑及系所評鑑全數通過之綜合大學，獲教育部「辦理完善，績效卓著」績優大學殊榮。2016年《Cheers》再次進行全國152所公私立大學校長互評「辦學績效進步大學」，蟬聯第一。
        2012年《英國泰晤士高等教育特刊》評選本校為全球百大新興潛力大學。2013年該專刊首度公布之「亞洲百大」優質大學，本校亦名列其中。2014年榮登金磚五國及新興經濟體高等教育排名前百大與世界大學排名千大肯定，臺灣入榜的公私立綜合大學中，本校居全臺第18名，為私立綜合大學翹楚。近5年QS世界大學排名，均名列亞洲前200大。
          。
        </p>
      </div>

      <div class="row tab-pane fade" id="roomB">
      <?php
        $table='image';
        $db=new DB($table);
        $rows=$db->all();
      ?>
        <p class="col-12 text-muted text-center mb-5 ">大學位於擁有大量的綠地腹地花園，外種植有柏樹，每所學院皆有不同建築風格。
          打開教室就見到綠油油的寬廣草地，呼吸一口大自然最新鮮的空氣，三五好友一起聊天談心，是最愜意的享受。
        </p>

        <div class="col-12 col-md-6 col-lg-4 mb-5">
          <div class="card">
            <img src="img/<?=$rows[8]['img'];?>" width="300" height="200" class="card-img-top">
            <div class="card-body">
              <h5>藝術學院</h5>
              <p class="card-text">歐巴克風格<small class="float-right text-muted">| 閒適、浪漫卻不乏寧靜是地中海風格建築所蘊含生活方式的精髓所在</small> </p>
            </div>
          </div>
        </div>

        <div class="col-12 col-md-6 col-lg-4 mb-5">
          <div class="card">
            <img src="img/<?=$rows[9]['img'];?>" width="300" height="200" class="card-img-top">
            <div class="card-body">
              <h5>理工學院</h5>
              <p class="card-text">法式建築 <small class="float-right text-muted">| 不求簡單的協調，而是崇尚衝突之美，呈現出浪漫典雅風格。</small> </p>
            </div>
          </div>
        </div>

        <div class="col-12 col-md-6 col-lg-4 mb-5">
          <div class="card">
            <img src="img/<?=$rows[15]['img'];?>" width="300" height="200" class="card-img-top">
            <div class="card-body">
              <h5>文學院</h5>
              <p class="card-text">北美風格 <small class="float-right text-muted">| 學院發展成為既簡約大氣，又集各種建築精華於一身的獨特風格，充分體現了簡潔大方、輕鬆的特點。</small> </p>
            </div>
          </div>
        </div>

      </div>

      <div class="row tab-pane fade" id="roomC">
        <?php
          $table='image';
          $db=new DB($table);
          $rows=$db->all();
        ?>
        <p class="col-12 text-muted text-center mb-5 ">
          校園資源
        </p>

        <div class="col-12 col-md-6 col-lg-4 mb-5">
          <div class="card">
            <img src="img/<?=$rows[17]['img'];?>" width="300" height="200" class="card-img-top">
            <div class="card-body">
              <h5>圖書館</h5>
              <p class="card-text">皇家金黃風格  </p>
            </div>
          </div>
        </div>

        <div class="col-12 col-md-6 col-lg-4 mb-5">
          <div class="card">
            <img src="img/<?=$rows[18]['img'];?>" width="300" height="200" class="card-img-top ">
            <div class="card-body">
              <h5>校園診所</h5>
              <p class="card-text">照顧學生健康 </p>
            </div>
          </div>
        </div>

        <div class="col-12 col-md-6 col-lg-4 mb-5">
          <div class="card">
            <img src="img/<?=$rows[19]['img'];?>" width="300" height="200" class="card-img-top">
            <div class="card-body">
              <h5>音樂廰</h5>
              <p class="card-text">培養文藝氣質 </p>
            </div>
          </div>

        </div>
      </div>


      <!-- 報名資格 -->
      <?php
        $table='sign';
        $db=new DB($table);
        $rows=$db->all();
        foreach($rows as $row){
      ?>

      <div class="tab-pane fade" id="roomRule">
        <h3 class="border-bottom  text-center">報名資格</h3>
        <h5 class="text-info"> [ 報名日期 ]</h5>
        <p class="mb-5"> <?=$row['date'];?> </p>

        <h5 class="text-info">[ 報考資格 ]</h5>
        <p class="mb-5"> <?=$row['qual'];?></p>

        <h5 class="text-info">[ 相關規定 ]</h5>
        <p class="mb-5"> <?=$row['rule'];?> </p>

        <h5 class="text-info">[ 錄取方式 ]</h5>
        <p class="mb-5"> <?=$row['enroll'];?> </p>
      </div>
      
      <?php
        }
      ?>
    </article>
  </section>
<!-- ------------------------------------------------------------------------------------------------------------------- -->
 <!-- 最新消息 -->
  <section id="asanews" class="py-5 text-white alert-secondary">
    <header class="text-center container">
      <h2 class="text-dark">最新消息</h2>
    </header>
    <article class="tab-content py-2 container">
        <table class="table table-striped table-dark">
          <thead>
            <tr class="text-center">
              <th scope="col" width="10%">NO</th>
              <th scope="col" width="75%">標題</th>
              <th scope="col" width="15%">公告時間</th>
            </tr>
          </thead>
          <?php
            $table='news';
            $db=new DB($table);
            $rows=$db->all();
            foreach($rows as $row){
          ?>
          <tbody>
            <tr>
              <td class="text-center"><?=$row['id'];?></td>
              <td><?=$row['text'];?></td>
              <td class="text-center"><?=mb_substr($row['date'],0,10,'utf8');?></td>
            </tr>
          <?php
            }
          ?>
          </tbody>
      </table>
    </article>
  </section>

<!-- ------------------------------------------------------------------------------------------------------------------- -->
<!-- 行政單位   -->

<?php
    $table='image';
    $db=new DB($table);
    $rows=$db->all();
?>
  <section id="asaunit" class="container py-5">
    <header class="text-center text-info">
      <h2 class="pb-3">行政單位</h2>
    </header>
    <article class="py-5 row">
      <!-- Tab Content   -->
      <div class="tab-content col-12 col-lg-6 mb-3" style="max-height:300px ;">
        <img id="fimg1" src="img/<?=$rows[20]['img'];?>"
          class="tab-pane fade show active w-100 img-fluid img-thumbnail " >
        <img id="fimg2" src="img/<?=$rows[21]['img'];?>"
          class="tab-pane fade w-100 img-fluid img-thumbnail">
        <img id="fimg3" src="img/<?=$rows[22]['img'];?>"
          class="tab-pane fade w-100 img-fluid img-thumbnail">
      </div>


      <!-- Accordin   -->
      <div class="accordion list-group col-sm-12 col-lg-6 list-group" id="foodmenu">
        <div class="card" data-toggle="list" data-target="#fimg1">
          <a href="#food1" class="card-header" data-toggle="collapse">            
            校長室
            <small class="float-right">教學大樓2F</small>
          </a>
          <div id="food1" class="collapse show" data-parent="#foodmenu">
            <div class="card-body">
              <p>
              不論您是未來可能要就讀的學生或學生家長、預計與學校進行學術研究或產學合作的國內外學者、業界專家或是已經從明志畢業，在社會各行各業裡擔任重要職務的優秀校友，透過學校的網站，我相信您可以從中了解明志卓越的研究表現與獨具特色的教學制度、及勤勞樸實的優良校風。自1963年創校迄今已逾半世紀，始終堅持以精緻辦學、實務致用的辦學理念培育青年學生；明志的師生，無論在學術上或是實務層面，都展現出活躍的多樣性與生命力，各項教學的努力與研發成果，讓我們培育出符合產業需求的學生，並在各專業領域裡對國家社會作出實質的貢獻。
              </p>
              <p class="small text-danger float-right">
                電話：02-2800-1234 分機4011 <br>
                開放時間：AM 08:00 ~ AM 17:00
              </p>
            </div>
          </div>
        </div>
        <div class="card" data-toggle="list" data-target="#fimg2">
          <a href="#food2" class="card-header" data-toggle="collapse">
            教務處
            <small class="float-right">教學大樓3F</small>
          </a>
          <div id="food2" class="collapse " data-parent="#foodmenu">
            <div class="card-body">
              <p>
              教務處為提供全校教學業務之服務，組織架構，設、課註組、招生、教學發展中心等三組，以提供全體師生一個多元化與優質化的教學與學習環境。 未來配合學校邁向「精緻教學研究型技術學院」計畫之執行，強化教師教學專業發展、e化教學、專業教育、國際化學習等項目之規劃與推動具體措施，以提昇教師教學品質及學生學習效果。
              </p>
              <p class="small text-danger float-right">
                電話：02-2800-1234 分機4012 <br>
                開放時間：AM 08:00 ~ AM 17:00
              </p>
            </div>
          </div>
        </div>

        <div class="card" data-toggle="list" data-target="#fimg3">
          <a href="#food3" class="card-header" data-toggle="collapse">
            研究發展處
            <small class="float-right">教學大樓4F</small>
          </a>
          <div id="food3" class="collapse " data-parent="#foodmenu">
            <div class="card-body">
              <p>
              由於學校研究工作日趨繁複與廣泛，為配合交大整體發展，並提升服務效能，故研究發展委員會於民國85年改置為研究發展處，負責規劃及推動全校學術研究與發展策略，整合研究資源、強化研究基礎建設、提昇產學研合作能量，擴大智財專利及創新育成之成效。
              <br>本處目前下設研發企劃組、計畫業務組二組。研發企劃組主掌本校教師研發成果指標之建立與獎勵業務、學生研發能量之推動與鼓勵等。計畫業務組主掌本校研究計畫相關事項、科技部研究獎勵等。
              </p>
              <p class="small text-danger float-right">
                電話：02-2800-1234 分機4013 <br>
                開放時間：AM 08:00 ~ AM 17:00
              </p>
            </div>
          </div>
        </div>

      </div>
    </article>
  </section>


<!-- ------------------------------------------------------------------------------------------------------------------- -->
  <!-- 交通資訊地圖區 -->
  <section id="asatraffic" class=" py-5 embed-responsive">
    <iframe class="embed-responsive-item"
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3614.7021523244125!2d121.41729491500641!3d25.044180083967568!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3442a7bed3dc9b59%3A0x57e6439a2db0fa2a!2zMjQz5paw5YyX5biC5rOw5bGx5Y2A5rOw5bGx6IG36KiT5Lit5b-D!5e0!3m2!1szh-TW!2stw!4v1590556856576!5m2!1szh-TW!2stw">
    </iframe>

    <article class="py-5 container">
      <div class="row">
        <header class="col-12 col-lg-6 text-center text-info mb-3 ">
          <h2 class="py-2 m-0 card">交通資訊</h2>
        </header>
        <!-- 將 header和card 推到左邊，加一空白 div -->
        <div class="col-lg-6"></div>


        <div class="col-12 col-lg-6">
          <div class="card">
            <div class="card-body">
              <strong>公車、捷運 </strong>
              <ul class="pl-4">
                <li>公車：三重客運(637、638)、指南客運(797、798、801、858、880、883、1501、1503)，至明志科技大學站下車。
                  新北市泰山區免費公車(泰山區F216明志國小-台北車站(北三門搭車))：至貴子路下車後，步行至貴子路口左轉明志路3段，明志路直行約100公尺至工專路右轉，再直行即可至明志科技大學。</li>
                <li>
                  捷運：臺北捷運中和新蘆線至丹鳳站1號出口或桃園捷運機場線至泰山貴和站（明志科大）1號出口，再轉乘公車或騎乘YouBike微笑單車（約10~15分鐘）至明志科技大學。</li>
              </ul class="pl-4">
              <strong>自行開車 </strong>
              <ul>
                <li>高速公路五股交流道下(往新莊、泰山)，經新五路至新北大道右轉，直行至貴子路口右轉，貴子路直行至明志路左轉。於明 志路繼續前行約100公尺右轉工專路，即可抵達明科技大學。</li>
                <li>
                  由台北車站走忠孝橋，直行高架道路，下到平面道路之後直行至貴子路口右轉，貴子路直行至明志路左轉，於明志路繼續前行約100公尺右轉工專路，即可抵達明科技大學。</li>
                <li>
                  明志科大「汽車」停車費30元/小時，請儘量搭乘大眾交通工具或機車(免停車費)。</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </article>
  </section>


<!-- ------------------------------------------------------------------------------------------------------------------- -->
  <!-- footer Inf區 -->
  <article class="bg-secondary py-5 text-center">
    <!-- footerInfo -->

    <div>
      <a class="text-light" href="tel:02-2901-8274">電話：02-2800-1234</a>　
      ｜　
      <span class="text-light">傳真：02-2908-4773</span>　
      ｜　
      <a class="text-light" href="mainto:service@toyugi.com.tw">信箱：service@toyugi.com.tw</a>
      <address>
        <a class="text-light" href="https://goo.gl/maps/NDzTUToVSbMQYLwv6" target="_blank">243 新北市泰山區貴子里致遠新村 55 之 1 號</a>
      </address>
    </div>
    
    <?php
      $table='bottom';
      $db=new DB($table);
      $rows=$db->all();
      foreach($rows as $row){
    ?>

    <small>
      <?=$row['bottom'];?>
      <br>
      <?=$row['bottom2'];?>
    </small>

    <?php
      }
    ?>


  </article>


</body>

</html>