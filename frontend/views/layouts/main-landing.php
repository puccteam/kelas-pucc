<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
$this->registerJs(
    "      AOS.init();

      $(document).ready(function(){
        $(window).scroll(function(){
          var scroll = $(window).scrollTop();
          console.log(scroll);
          if(scroll > 784){
            $('header').addClass('header-fixed');
          }else{
            $('header').removeClass('header-fixed');
          }


          //hover menu
          if(scroll >= 0 && scroll < 1430){
            $('.home li').css('color', '#ee2760');
            $('.about-us li, .service li, .portfolio li, .contact li').css('color', '#292562');
          }else if(scroll >= 1430 && scroll < 2015){
            $('.about-us li').css('color', '#ee2760');
            $('.home li, .service li, .portfolio li, .contact li').css('color', '#292562');
          }else if(scroll >= 2015 && scroll < 2940){
            $('.service li').css('color', '#ee2760');
            $('.home li, .about-us li, .portfolio li, .contact li').css('color', '#292562');
          }else if(scroll >= 2940 && scroll < 3665){
            $('.portfolio li').css('color', '#ee2760');
            $('.home li, .about-us li, .service li, .contact li').css('color', '#292562');
          }
          else if(scroll >= 3665 && scroll <= 3938){
            $('.contact li').css('color', '#ee2760');
            $('.home li, .about-us li, .service li, .portfolio li').css('color', '#292562');
          }else{
            $('.home li, .about-us li, .service li, .portfolio li, .contact li').css('color', '#292562');
          }


        });

        $('.page-scroll').on('click', function(e){
          var tujuan = $(this).attr('href');
          var elemenTujuan = $(tujuan);
          console.log(elemenTujuan);

          $('html, body').animate({
            scrollTop: elemenTujuan.offset().top - 50
          }, 1250, 'easeInOutExpo');

          e.preventDefault();

        });

      });
"
);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

    <div class="wrap-all-content">
        <!-- Jumbotron  -->
        <div class="jumbotron" id="home">
          <div class="container">
            <div class="row">
              <div class="col-md-6">
              <div class="content-landing">
                <h1 data-aos="fade-right">Pucc Learning</h1>
                <p data-aos="zoom-in">Belajar ngoding dengan seru dan menyenangkan<br>
                  #pucclearning #pucc</p>
                  <p>Mulai Belajar Sekarang</p> 

                  <?php

                    if (!Yii::$app->user->identity) {
                      echo "
                      <a href=". \Yii::$app->urlManagerFrontEnd->createUrl('site/login').">Login</a> or 
                      <a href=". \Yii::$app->urlManagerFrontEnd->createUrl('site/signup').">Register</a>
                      ";
                    }

                  ?>
                  
                
                </div>
              </div>
          </div>
        </div>
<!--           <div class="why-us">
            <div class="list-button">
            <a href="#slide" class="page-scroll">Login</a>
            </div>
            <div class="list-button">
            <a href="#slide" class="page-scroll">Register</a>
            </div>
          </div> -->
          <div class="section-roket">
            <img src="img/roket.png" alt="roket" class="roket" id="roket">
          </div>
          <div class="asap">
            <img src="img/asap.png" alt="asap">
          </div>
        </div>
        <!-- Akhir Jumbotron -->

        <!-- header -->
        <header>
          <div class="container">
            <div class="row container-header">
              <div class="col-md-3">
                <span class="logo float-left">
                  <h3>Logo</h3>
                </span>
                <i class="fa fa-bars float-right" aria-hidden="true" onclick="showMenu()"></i>
              </div>
              <div class="col-md-9">
                <nav class="float-right">
                  <ul class="biru-primary">

                    <a href="#home" class="page-scroll home"><li>Home</li></a>
                    <a href="#about" class="page-scroll about-us"><li>About Us</li></a>
                    <a href="#service"  class="page-scroll service"><li>Service</li></a>
                    <a href="#portfolio" class="page-scroll portfolio"><li >Portfolio</li></a>
                    <a href="#contact" class="page-scroll contact"><li >Contact</li></a>

                    <?php

                      if (Yii::$app->user->identity) {
                        echo "
                        <a href=".\Yii::$app->urlManagerFrontEnd->createUrl('site/logout')." class='page-scroll' data-method='post'><li >Logout</li></a>";
                      }

                    ?>

                  </ul>
                </nav>
              </div>
            </div>

          </div>
        </header>

        <div class="menu-smarthphone">
          <div class="container">
            <div class="btn-close float-right">
              <i class="fa fa-times-circle" aria-hidden="true" onclick="hideMenu()"></i>
            </div>
            <div class="clear"></div>
            <ul class="biru-primary">
              <a href="#home"  class="page-scroll" onclick="hideMenu()"><li>Home</li></a>
              <a href="#about" class="page-scroll" onclick="hideMenu()"><li>About Us</li></a>
              <a href="#service"  class="page-scroll" onclick="hideMenu()"><li>Service</li></a>
              <a href="#portfolio" class="page-scroll" onclick="hideMenu()"><li >Portfolio</li></a>
              <a href="#contact" class="page-scroll" onclick="hideMenu()"><li >Contact</li></a>
            </ul>
          </div>
        </div>
        <!-- akhhir header -->
      <div class="clear"></div>
        <!-- SLide -->
        <section id="slide">
          <div class="container">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="item active"> <img src="img/slidev2.png" alt="First slide">
                <div class="carousel-caption">
                  <h1>Slide 1</h1>
                  <p>Aenean a rutrum nulla. Vestibulum a arcu at nisi tristique pretium.</p>
                </div>
              </div>
              <div class="item"> <img src="img/slidev2.png" data-src="" alt="Second    slide">
                <div class="carousel-caption">
                  <h1>Slide 2</h1>
                  <p>Aenean a rutrum nulla. Vestibulum a arcu at nisi tristique pretium.</p>
                </div>
              </div>
              <div class="item"> <img src="img/slidev2.png" data-src="" alt="Third slide">
                <div class="carousel-caption">
                  <h1>Slide 3</h1>
                  <p>Aenean a rutrum nulla. Vestibulum a arcu at nisi tristique pretium.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        </section>
        <!-- Akhir slide -->

        <!-- section about -->
        <section id="about" >
          <div class="container">
            <div class="row" data-aos="fade-up">
              <div class="col-md-12">
                <h3 class="biru-gelap">Tentang Kami</h3>
                <hr>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <div class="btn-selengkapnya text-center">
                  <a href="about.html"  class="text-center">Selengkapnya</a>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- akhir section about -->

        <!-- service -->
        <section id="service">
          <div class="container">
            <h3 class="putih">Layanan</h3>
            <hr>
            <div class="row">
              <div class="col-md-6" data-aos="zoom-in">
                <div class="service-item text-center">
                  <img src="img/webdev.png" alt="web-development">
                  <h4>Web Development</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                  <div class="btn-selengkapnya">
                    <a href="web-development.html">Selengkapnya</a>
                  </div>
                </div>
              </div>

              <div class="col-md-6" data-aos="zoom-in">
                <div class="service-item text-center">
                  <img src="img/deksev.png" alt="web-development">
                  <h4>Dekstop Development</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                  <div class="btn-selengkapnya">
                    <a href="dekstop-development.html">Selengkapnya</a>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6" data-aos="zoom-in">
                <div class="service-item text-center">
                  <img src="img/appsdev.png" alt="web-development">
                  <h4>Mobile Development</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                  <div class="btn-selengkapnya">
                    <a href="mobile-development.html">Selengkapnya</a>
                  </div>
                </div>
              </div>

              <div class="col-md-6" data-aos="zoom-in">
                <div class="service-item text-center">
                  <img src="img/schooldev.png" alt="web-development">
                  <h4>Aplikasi Pendidikan</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                  <div class="btn-selengkapnya">
                    <a href="app-pendidikan.html">Selengkapnya</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- Akhir service -->
    <div style="clear:both">

    </div>
        <!-- Portfolio -->
        <section id="portfolio">
          <div class="container">
            <h3>Portfolio</h3>
            <hr>
            <div class="text-right" style="margin-top:21px">
              <a href="portfolio.html" class="link-pindah">Lihat semua portfolio >></a>
            </div>
          </div>

          <div id="owl-demo" class="owl-carousel owl-theme" data-aos="fade-left">

            <div class="item"><img src="img/slider1.png" alt="">
            <a href="single-portfolio.html">View Detail</a></div>
            <div class="item"><img src="img/slider3.png" alt="">
            <a href="single-portfolio.html">View Detail</a></div>
            <div class="item"><img src="img/slider4.png" alt="">
            <a href="single-portfolio.html">View Detail</a></div>
            <div class="item"><img src="img/slider3.png" alt="">
            <a href="single-portfolio.html">View Detail</a></div>
            <div class="item"><img src="img/slider1.png" alt="">
            <a href="single-portfolio.html">View Detail</a></div>
            <div class="item"><img src="img/slider3.png" alt="">
            <a href="single-portfolio.html">View Detail</a></div>
            <div class="item"><img src="img/slider4.png" alt="">
            <a href="single-portfolio.html">View Detail</a></div>
            <div class="item"><img src="img/slider3.png" alt="">
            <a href="single-portfolio.html">View Detail</a></div>
          </div>

        </section>
        <!-- Akhir Portfolio -->

        <!-- Contact -->
        <section id="contact" data-aos="fade-up"
         data-aos-anchor-placement="top-bottom">
          <div class="container-contact">
            <div class="container">
              <h3 class="putih">Contact</h3>
              <hr>
              <div class="row">
                <div class="col-md-6">
                  <div class="icon-kontak">
                    <img src="img/roket2.png" alt="roket medandigi">
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="item-list">
                  <div class="list-kontak">
                    <div class="item-kontak">
                      <i class="fa fa-phone-square" aria-hidden="true"></i><span>0123456789</span>
                    </div>
                    <div class="item-kontak">
                      <i class="fa fa-envelope" aria-hidden="true"></i><span>medandigi.team@gmail.com</span>
                    </div>
                    <div class="item-kontak">
                      <i class="fa fa-facebook-official" aria-hidden="true"></i><span>Medandigi</span>
                    </div>
                    <div class="item-kontak">
                      <i class="fa fa-twitter-square" aria-hidden="true"></i><span>@medandigi</span>
                    </div>
                    <div class="item-kontak">
                      <i class="fa fa-instagram"  aria-hidden="true"></i><span>@medandigi</span>
                    </div>

                  </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- Akhir Contact -->

        <!-- Footer -->
        <footer>
          <div class="container">
            <p>&copyCopyright MedanDigi 2017 || Di <i class="fa fa-code" aria-hidden="true"></i> dengan <i class="fa fa-heart" aria-hidden="true"></i></p>
          </div>
        </footer>
        <!-- Akhir Footer -->
    </div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
