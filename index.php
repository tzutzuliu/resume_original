<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>myweb</title>
    <!--自己先製作的第一版resume-->
    <!--引入bootstrap CSS-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" 
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!--cdn css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

    <!--aos.css-->
    <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">

    <!-- 引入自定義my CSS -->
    <link rel="stylesheet" href="./css/style.css">

    <!-- 引入Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

</head>

<body>
<!-- Navigation star-->
<!-- navbar-dark 文字顏色 .bg-dark 背景顏色 -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top myNav">
      <a class="navbar-brand" href="#introduce">
        <span class="h3 mx-1">Tzu-Chun</span>
      </a>
    <!-- .navbar-toggler 漢堡式選單按鈕 -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <!-- .navbar-toggler-icon 漢堡式選單Icon -->
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <!-- .collapse.navbar-collapse 用於外層中斷點群組和隱藏導覽列內容 -->
    <!-- 選單項目&漢堡式折疊選單 -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <!-- active表示當前頁面 -->
          <li class="nav-item active">
            <a class="nav-link" href="#introduce">About me<span class="sr-only"></span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#EXPERIENCE">Experience</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#Portfolio">Portfolio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact">Contact</a>
          </li>
        </ul>
    </div>
 </nav>

  <!--slider start-->
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="margin-top: 50px;">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>

			<div class="carousel-inner">
			  <div class="carousel-item active">
				  <img class="d-block w-100" src="./pic/mybanner.jpg" alt="First slide">
			  </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="./pic/pp1048-1920x600.jpg" alt="Second slide"/>
        </div>
			  <div class="carousel-item">
				  <img class="d-block w-100" src="./pic/myself001.jpg" alt="Third slide">
			  </div>
			  <div class="carousel-item">
				  <img class="d-block w-100" src="./pic/mypage01.jpg" alt="Fourth slide">
			  </div>
			  <div class="carousel-item">
				  <img class="d-block w-100" src="./pic/mytext.jpg" alt="Fifth slide">
			  </div>

			</div>
			<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			  <span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			  <span class="carousel-control-next-icon" aria-hidden="true"></span>
			  <span class="sr-only">Next</span>
			</a>
		</div>
		<div class="carousel-item">
			  <img src="..." alt="...">
			<div class="carousel-caption d-none d-md-block">          
			</div>
		</div>
	<!--slider end-->


  <!--About me Star-->
  <div class="fh5co-section-gray" id="introduce">
	<div class="container">
		<div class="row" style="justify-content: center;">
			<div class="couple-wrap animate-box">
				<div class="couple-half">
					<div class="groom">
						<img src="./img/tzu001.png" alt="groom" class="img-responsive">
					</div>
					<div class="desc-groom">
						<h3 style="font-weight: bolder;">劉姿鈞</h3>
						<p class="heart text-center"><i class="icon-heart2"></i>畢業於國立臺灣海洋大學
            <br>
            我的個性隨和、樂觀，喜歡學習新的事物
            <br>
            對於好奇的事物以積極認真的態度達成目標
            <br>
            興趣：聽音樂、唱歌、閱讀
            <br>
            求學期間很嚮往能在學術、教育界服務
            <br>
            很幸運地，畢業後我完成了在學術界服務的夢想
            <br>
            <br>
            在過去的工作經驗裡，須負責維護網頁
            <br>
            管理並更新網頁資訊
            <br>
            意外的發現自己對網頁設計產生了興趣
            <br>
            進而萌生轉職念頭的我
            <br>
            報名了泰山職業訓練場-PHP資料庫網頁設計班，展開了我的轉職受訓之路
            <br>
            <br>
            期許自己在未來在工作上能運用程式解決問題
            <br>
            並不斷的精進自己專業能力，持續成長!
            <br>
            </p>
					</div>
				</div>
			</div>
		</div>
	</div>
  <!--About me end-->

    <!--container_experience start-->
    <section class="intro" id="EXPERIENCE">
        <div class="container">
          <h1 style="position: relative; top: 10px;">EXPERIENCE</h1>
        </div>
    </section>
    <section class="timeline">
      <ul>
        <li>
            <div>
              <time>1992</time>西元1992年2月7日出生，出生地：新竹市
            </div>
        </li>

        <li>
            <div>
              <time>2016</time>研究所畢業，主要研究運輸配送及路線規劃領域，
              碩論研究方法運用多目標決策理論
              <br>
              使用(ArcGIS)Network Analyst工具解決規劃路線問題，並計算取得出最短路徑權重指標。
              <br>
              (就讀期間:2014-2016)
            </div>
        </li>

        <li>
            <div>
              <time>2016</time>國立清華大學_服務創新與分析研究中心，負責即時解決USER端操作上技術問題、線上FAQ系統
            </div>
        </li>

        <li>
            <div>
              <time>2017</time>中華大學_資訊管理學系-辦事員
              <br>
              統籌規劃規模超過200人以上的活動數十場，均獨自承包負責，備受主管肯定與讚賞。
              <br>
              (工作期間:2017-2020)
            </div>
        </li>

        <li>
            <div>
              <time>2017</time>中華大學_資訊管理學系-辦事員
              <br>
              主要：所有資管系上各項業務(學務、教務、總務)
              <br>
              1.負責資管系網路儲存伺服器(NAS)管理維護。
              <br>
              2.負責資管系學生畢業專題資料庫系統管理維護。
              <br>
              3.負責資管系各項會議排程、追蹤紀錄及召開會議。
              <br>
              4.負責資管系年度預算製作、執行與視覺報表製作。
              <br>
              5.研究計畫進度追蹤、時程控管與績效考核彙整。
            </div>
        </li>

        <li>
            <div>
              <time>2018</time>中華大學_資訊管理學系-辦事員
              <br>
              1.負責維護管理及更新系上網頁
              <br>
              2.建置系上RWD網頁
            </div>
        </li>

        <li>
            <div>
              <time>2021</time>大學入學考試中心-專任助理(工作期間:2021-2022)
            </div>
        </li>

        <li>
            <div>
              <time>2021</time>大學入學考試中心-專任助理
              <br>
              1.負責執行及宣導110年試辦考試所有試務工作
              <br>
              2.負責全國高中生施測之心理測驗量表網頁
              <br>
              管理者端進行維護，並定期更新網頁資訊
              <br>
              3.心理測驗量表讀卡程式維護
            </div>
        </li>

        <li>
            <div>
              <time>2021</time>大學入學考試中心-專任助理
              <br>
              於執行工作任務期間內通過試用期及中心內部考核，深獲主管肯定順利完成所有專案任務。
            </div>
        </li>

        <li>
            <div>
              <time>2022</time>報名泰山職業訓練場-PHP資料庫網頁設計班
              <br>
              1.學習HTML、CSS語法
              <br>
              2.學習JavaScript基本概念
              <br>
              3.JavaScript框架與函式庫-(JQuery)
              <br>
              4.學習PHP程式基本概念
              <br>
              5.PHP & MySQL 連結資料庫進行增、刪、改、查
              <br>
              6.學習使用photoshop處理圖片
              <br>
              7.學習使用illustrator處理向量圖層
            </div>
        </li>

        <li>
            <div>
              <time>2022</time>努力朝目標邁進..
            </div>
        </li>
      </ul>
    </section>
    <!--container_experience end-->
    <br>

  <!--skill portfolio star-->
  <div class="container mt-3" id="Portfolio">
  <h2>作品集使用到的技術</h2>

  <!-- Nav tabs -->
  <ul class="nav nav-tabs">
    <li class="nav-item">
      <a class="nav-link active" data-toggle="tab" href="#home">繪圖工具</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu1">網頁設計基礎語法</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu2">JavaScript</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu3">JQuery</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu4">PHP</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu5">套件使用</a>
    </li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div id="home" class="container tab-pane active"><br>
      <p>作品集4、作品集5使用到photoshop繪圖工具，
        整個作品集區域使用illustrator繪圖工具繪製</p>
    </div>
    <div id="menu1" class="container tab-pane fade"><br>
      <p>熟悉HTML各標籤語法，能建構出網頁基本架構，並能獨自完成排版到畫面呈現，
         熟悉CSS各項基本屬性，美化網站整體樣式
      </p>
    </div>
    <div id="menu2" class="container tab-pane fade"><br>
      <p>熟悉JavaScrip語法，抓取HTMLDOM的元件，能動態修改網頁內容並做出互動效果
      </p>
    </div>
    <div id="menu3" class="container tab-pane fade"><br>
      <p>熟悉JQuery選擇器及事件，並能做出動畫效果</p>
    </div>
    <div id="menu4" class="container tab-pane fade"><br>
      <p>熟悉PHP基礎程式語言，運用PHP程式語言作為開發工具</p>
    </div>
    <div id="menu5" class="container tab-pane fade"><br>
      <p>熟悉Bootstrap、Sweetalert 套件使用，幫助前端網頁的快速開發</p>
    </div>
  </div>
</div>
<!--skill portfolio end-->


 
    <!--Container_card_portfolio start-->
    <div class="container">
      <div class="row">
      <div class="col-sm-4" data-aos="fade-zoom-in">
              <h2>Calculator</h2>
              <div class="card" style="width:100%">
                  <img class="card-img-top" src="./pic/BMI.jpg" style="width: 350; height: 350;" alt="Card image"
                      style="width:100%">
                  <div class="card-body">
                      <p class="card-text">作品集1：BMI計算器
                      </p>
                      <a href="http://220.128.133.15/s1110220/BMI/bmi.html" class="btn btn-primary">點我看看</a>
                  </div>
              </div>
              <br>
          </div>
          <div class="col-sm-4" data-aos="fade-zoom-in">
              <h2>Calendar</h2>
              <div class="card" style="width:100%">
                  <img class="card-img-top" src="./pic/GEMC09.jpg" style="width: 350; height: 350;" alt="Card image"
                      style="width:100%">
                  <div class="card-body">
                      <p class="card-text">作品集2：線上萬年曆
                      </p>
                      <a href="http://220.128.133.15/s1110220/PerpetualCalendar-tzutzuliu/index-calendarhw.php" class="btn btn-primary">點我看看</a>
                  </div>
              </div>
              <br>
          </div>
          <div class="col-sm-4" data-aos="fade-zoom-in">
              <h2>Voting</h2>
              <div class="card" style="width:100%">
                  <img class="card-img-top" src="./pic/voting10.jpg" style="width: 350; height: 350;" alt="Card image"
                      style="width:100%">
                  <div class="card-body">
                      <p class="card-text">作品集3：投票系統
                      </p>
                      <a href="http://220.128.133.15/s1110220/Vote_tzu/" class="btn btn-primary">點我看看</a>
                  </div>
              </div>
              <br>
          </div>
          <div class="col-sm-4" data-aos="fade-zoom-in">
              <h2>Banner</h2>
              <div class="card" style="width:100%">
                  <img class="card-img-bottom " src="./pic/PSBanner.jpg" style="width: 350; height: 350;" alt="Card image"
                      style="width:100%">
                  <div class="card-body">
                      <p class="card-text">作品集4：職前招生
                      </p>
                      <a href="./PS/banner.jpg" class="btn btn-primary">點我看看</a>
                  </div>
              </div>
              <br>
          </div>
          <div class="col-sm-4" data-aos="fade-zoom-in">
              <h2>Newsletter</h2>
              <div class="card" style="width:100%">
                  <img class="card-img-top" src="./pic/newsletter.jpg" style="width: 350; height: 350;" alt="Card image"
                      style="width:100%">
                  <div class="card-body">
                      <p class="card-text">作品集5：旅遊電子報
                      </p>
                      <a href="./PS/tzunewsletter.jpg" class="btn btn-primary">點我看看</a>
                  </div>
              </div>
              <br>
          </div>
          <div class="col-sm-4" data-aos="fade-zoom-in">
              <h2>SHOP</h2>
              <div class="card" style="width:100%">
                  <img class="card-img-top" src="./pic/PSC.jpg" style="width: 350; height: 350;" alt="Card image"
                      style="width:100%">
                  <div class="card-body">
                      <p class="card-text">作品集6：SHOP
                      </p>
                      <a href="http://220.128.133.15/s1110220/myshop/store.html" class="btn btn-primary">點我看看</a>
                  </div>
              </div>
              <br>
          </div>
          <div class="col-sm-4" data-aos="fade-zoom-in">
              <h2>Digital</h2>
              <div class="card" style="width:100%">
                  <img class="card-img-bottom " src="./pic/digital.jpg" style="width: 350; height: 350;" alt="Card image"
                      style="width:100%">
                  <div class="card-body">
                      <p class="card-text">作品集7：數位時鐘
                      </p>
                      <a href="http://220.128.133.15/s1110220/project_002/digital.html" class="btn btn-primary">點我看看</a>
                  </div>
              </div>
              <br>
          </div>
          <div class="col-sm-4" data-aos="fade-zoom-in">
              <h2>OOTD</h2>
              <div class="card" style="width:100%">
                  <img class="card-img-top" src="./pic/ootd.jpg" style="width: 350; height: 350;" alt="Card image"
                      style="width:100%">
                  <div class="card-body">
                      <p class="card-text">作品集8：當日穿搭
                      </p>
                      <a href="http://220.128.133.15/s1110220/project_001/myootd.html" class="btn btn-primary">點我看看</a>
                  </div>
              </div>
              <br>
          </div>
          <div class="col-sm-4" data-aos="fade-zoom-in">
              <h2>Weather</h2>
              <div class="card" style="width:100%">
                  <img class="card-img-top" src="./pic/weather.jpg" style="width: 350; height: 350;" alt="Card image"
                      style="width:100%">
                  <div class="card-body">
                      <p class="card-text">作品集9：天氣資料
                      </p>
                      <a href="http://220.128.133.15/s1110220/project_003/API_homework/weather06%20.html" class="btn btn-primary">點我看看</a>
                  </div>
              </div>
              <br>
          </div>
      </div>
    </div>
    <!--Container_card_portfolio end-->

      <!-- tzuContact_star--------------------------------------------->
      <section class="contact">
        <div class="container pt-5" id="contact">
            <header class="h2 text-secondary mb-5 pt-1 mt-5">
                CONTACT
            </header>
            <form id="form" class="row  gy-3 text-dark border border-secondary mb-5 bg-light" action="./api/add.php" method="POST">
                <div class="col-12 ">

                    <label for="dataUser" class="form-label">姓名:</label>
                    <div class="input-group">
                        <!-- 輸入姓名 -->
                        <input type="text" class="form-control" id="dataUser" name="dataUser" placeholder="Full Name" required>
                    </div>
                </div>

                <div class="col-12 ">
                    <label for="dataTel" class="form-label">手機:</label>
                    <input type="tel" class="form-control" id="dataTel" name="dataTel" placeholder="Phone Number" required>
                </div>
                <div class="col-12 ">
                    <label for="dataMail" class="form-label">E-mail:</label>
                    <input type="email" class="form-control" id="dataMail" name="dataMail" placeholder="Email Address" required>
                </div>
                <div class="col-12">
                    <label for="dataQue" class="form-label">Title:</label>
                    <textarea class="form-control" id="subject" name="subject" rows="1" placeholder="Title"></textarea>
                </div>
                <div class="col-12">
                    <label for="dataMsg" class="form-label">Content:</label>
                    <textarea class="form-control" id="dataMsg" name="dataMsg" rows="5" placeholder="Writer Your Message..."></textarea>
                </div>

                <div class="col-12 text-center">
                    <input type="hidden" name="table" value="msg">
                    <input type="submit" value="確認送出" class="btn btn-secondary mb-3" name="send" id="myContactBtn">
                </div>
            </form>
        </div>
    </section>
    <!-- tzuContact_end--------------------------------------------->

    <!-- container Collapse Start -->
        <div class="container mt-5">
              <div class="col-9">
                  <div class="tab-content" style="position: relative;">                        
                      <div>
                          <h3 style="display: flex; justify-content:center; position: relative; left: 70px;">我的職訓場位置-泰山職業訓練場</h3>
                          <iframe
                              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3614.7036497990543!2d121.41732691537095!3d25.044129283967493!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3442a7bec9ad74b1%3A0xa639904a89f26435!2z5Yue5YuV6YOo5Yue5YuV5Yqb55m85bGV572y5YyX5Z-65a6c6Iqx6YeR6aas5YiG572y5rOw5bGx6IG35qWt6KiT57e05aC0!5e0!3m2!1szh-TW!2stw!4v1658382998145!5m2!1szh-TW!2stw"
                              width="140%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                              referrerpolicy="no-referrer-when-downgrade"></iframe>
                      </div>
                  </div>
              </div>
          </div>
    <!-- container Collapse end-->

    <!--footer-->
    <footer class="footer">© 2022 Tzu-Chun</footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
    <!--sweetalert -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="sweetalert2.all.min.js"></script>

<script>

  //myContactBtn submit 
  $('#myContactBtn').on('click',function(){
    
        let dataUser = $('#dataUser').val();
        let dataTel = $('#dataTel').val();
        let subject = $('#subject').val();
        let dataMail = $('#dataMail').val();
        let dataMsg = $('#dataMsg').val();

      Swal.fire({
          position: 'center',
          title: '已收到資料，謝謝您!',
          showConfirmButton: false,
      })


      if(dataMail == '' || dataUser == '' ||  subject == '' || dataMsg == '' || dataTel == '') {
            Swal.fire({
                icon: 'error',
                title: '新增失敗',
                text: '資料尚未填寫完畢!',
            })

        } else {

            $.post('./api/msg.php', {

                dataMail,
                dataUser,
                subject,
                dataMsg,
                dataTel
            }, (res) => {

                Swal.fire({
                    icon: 'success',
                    title: '送出成功囉!',
                    text: '成功送出資料',
                
                }).then((result) => {

                    if (result.isConfirmed) {
                        let email = $('#dataMail').val('');
                        let name = $('#dataUser').val('');
                        let title = $('#subject').val('');
                        let text = $('#dataMsg').val('');
                        let tel = $('#dataTel').val('');
                    }
                })

            })
        }
  })

  AOS.init();

  //mynavbar
  $(document).ready(function() {

  $(document).scroll(function() {

  if ($(document).scrollTop() > 90) {
      $('.myNav').addClass('myNavScroll');
      $('.myNav').addClass('shadow');
  } else {
      $('.myNav').removeClass('myNavScroll')
      $('.myNav').removeClass('shadow')
  }

})

  if ($(document).scrollTop() > 90) {
    $('.myNav').addClass('myNavScroll');
    $('.myNav').addClass('shadow');
  }

  //timeline js
    (function () {
    "use strict";


  // define variables
    var items = document.querySelectorAll(".timeline li");

    function isElementInViewport(el) {
      var rect = el.getBoundingClientRect();
      return (
        rect.top >= 0 &&
        rect.left >= 0 &&
        rect.bottom <=
          (window.innerHeight || document.documentElement.clientHeight) &&
        rect.right <= (window.innerWidth || document.documentElement.clientWidth)
      );
    }

    function callbackFunc() {
      for (var i = 0; i < items.length; i++) {
        if (isElementInViewport(items[i])) {
          items[i].classList.add("in-view");
        }
      }
    }

    // listen for events
    window.addEventListener("load", callbackFunc);
    window.addEventListener("resize", callbackFunc);
    window.addEventListener("scroll", callbackFunc);
  })();

})

</script>

</body>
</html>