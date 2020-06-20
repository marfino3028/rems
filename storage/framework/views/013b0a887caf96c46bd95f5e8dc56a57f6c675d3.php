<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="canonical" href="index.html">
    <meta http-equiv="content-language" content="en">
    <link rel="shortcut icon" href="<?php echo e(asset('assets/fe/images/logo/favicon.ico')); ?>">
    <title>Flex Home - Real Estate site</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link media="all" type="text/css" rel="stylesheet" href="<?php echo e(asset('assets/fe/css/language-public.css')); ?>">
    <link media="all" type="text/css" rel="stylesheet" href="<?php echo e(asset('assets/fe/libraries/bootstrap/bootstrap.min.v4.css')); ?>">
    <link media="all" type="text/css" rel="stylesheet" href="<?php echo e(asset('assets/fe/libraries/fontawesome/css/all.min.css')); ?>">
    <link media="all" type="text/css" rel="stylesheet" href="<?php echo e(asset('assets/fe/libraries/owl-carousel/owl.carousel.min.css')); ?>">
    <link media="all" type="text/css" rel="stylesheet" href="<?php echo e(asset('assets/fe/libraries/owl-carousel/owl.theme.default.css')); ?>">
    <link media="all" type="text/css" rel="stylesheet" href="<?php echo e(asset('assets/fe/css/style.css')); ?>">
    <script src="<?php echo e(asset('assets/fe/libraries/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/fe/libraries/bootstrap/popper.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/fe/libraries/bootstrap/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/fe/libraries/owl-carousel/owl.carousel.min.js')); ?>"></script>
    <link rel="alternate" href="en/index.html" hreflang="en" />
    <link rel="alternate" href="vi/index.html" hreflang="vi" />
    <!-- Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Nunito%20Sans:300,600,700,800" rel="stylesheet" type="text/css">
    <!-- CSS Library-->
    <style>
      :root {
        --primary-color: #1890ff;
        --primary-color-hover: rgb(23, 149, 78);
      }
      body {
        font-family: 'Nunito Sans', sans-serif !important;
      }
    </style>
  </head>
  <body>
    <!-- TOP BAR -->
    <div class="bravo_topbar">
      <div class="container-fluid w90">
        <div class="row">
          <div class="col-12">
            <div class="content">
              <div class="topbar-left d-none d-sm-block">
                <div class="top-socials">
                  <a href="https://www.facebook.com/" title="Facebook" class="fab fa-facebook-f"></a>
                  <a href="#" title="Twitter" class="fab fa-twitter"></a>
                  <a href="https://youtube.com/" title="Youtube" class="fab fa-youtube"></a>
                </div>
                <span class="line"></span>
                <a href="javascript:void(0)">ventus@gmail.com</a>
              </div>
              <div class="topbar-right">
                <!-- <div class="padtop10 mb-2 language">
                  <strong class="language-label">Languages</strong>:
                  <a rel="alternate" hreflang="vi" href="vi.html">
                  <img src="vendor/core/images/flags/vn.svg" title="Tiếng Việt" width="16" alt="Tiếng Việt">                            <span>Tiếng Việt</span>                        </a> &nbsp;
                </div> -->
                <ul class="topbar-items">
                  <li class="login-item">
                    <a href="<?php echo e(route('front.index')); ?>"><i class="fas fa-sign-in-alt"></i>  Login</a>
                  </li>
                  <li class="login-item">
                    <a href="<?php echo e(route('front.index')); ?>"><i class="fas fa-user-plus"></i> Register</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- HEADER -->
    <header class="topmenu bg-light">
      <div class="container-fluid w90">
        <div class="row">
          <div class="col-12">
            <nav class="navbar navbar-expand-lg navbar-light">
              <a class="navbar-brand" href="<?php echo e(route('front.index')); ?>">
              <img src="<?php echo e(asset('assets/fe/images/logo/logo.png')); ?>"
                class="logo" height="40" alt="">
              </a>
              <button class="navbar-toggler" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
              <span class="fas fa-bars"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul  class="navbar-nav justify-content-end">
                  <li class="nav-item ">
                    <a class="nav-link " href="<?php echo e(route('front.index')); ?>" target="_self">
                    Projects
                    </a>
                  </li>
                  <li class="nav-item ">
                    <a class="nav-link " href="<?php echo e(route('front.index')); ?>" target="_self">
                    Properties
                    </a>
                  </li>
                  <li class="nav-item ">
                    <a class="nav-link " href="<?php echo e(route('front.index')); ?>" target="_self">
                    News
                    </a>
                  </li>
                  <li class="nav-item ">
                    <a class="nav-link " href="<?php echo e(route('front.index')); ?>" target="_self">
                    Careers
                    </a>
                  </li>
                  <li class="nav-item ">
                    <a class="nav-link " href="<?php echo e(route('front.index')); ?>" target="_self">
                    Contact
                    </a>
                  </li>
                </ul>
                <a class="btn btn-primary add-property" href="<?php echo e(route('front.index')); ?>">
                <i class="fas fa-plus-circle"></i> Add Property
                </a>
              </div>
            </nav>
          </div>
        </div>
      </div>
      <div class="home_banner" style="background-image: url(<?php echo e(asset('assets/fe/images/pict/banner.jpg')); ?>)">
        <div class="topsearch">
          <form action="<?php echo e(route('front.index')); ?>" method="GET" id="frmhomesearch">
            <div class="typesearch" id="hometypesearch">
              <a href="javascript:void(0)" class="active" rel="project" data-url="projects.html">Projects</a>
              <a href="javascript:void(0)" rel="sale" data-url="properties.html">Sale</a>
              <a href="javascript:void(0)" rel="rent" data-url="properties.html">Rent</a>
            </div>
            <div class="input-group input-group-lg">
              <div class="input-group-prepend">
                <span class="input-group-text"><img src="<?php echo e(asset('assets/fe/images/pict/search_icon.png')); ?>" alt="search"></span>
              </div>
              <input type="hidden" name="type" value="project" id="txttypesearch">
              <input type="text" class="form-control" name="k"
                placeholder="Enter keyword..." id="txtkey" autocomplete="off">
              <div class="input-group-append">
                <button class="btn btn-orange" type="submit">Search</button>
              </div>
            </div>
            <div class="listsuggest stylebar">
            </div>
          </form>
        </div>
      </div>
      </div>
    </header>

    <!-- CONTENT -->
    <div id="app">
      <div id="ismain-homes">
        <p>
        <div class="box_shadow" style="margin-top: 0;">
          <div class="container-fluid w90">
            <div class="projecthome">
              <div class="row">
                <div class="col-12">
                  <h2>Featured projects</h2>
                  <p style="margin: 0; margin-bottom: 10px">We make the best choices with the hottest and most prestigious projects, please visit the details below to find out more</p>
                </div>
              </div>
              <div class="row rowm10">
                <div class="col-6 col-sm-4  col-md-3 colm10">
                  <div class="item">
                    <div class="blii">
                      <div class="img"><img class="thumb" data-src="https://via.placeholder.com/410x270" src="https://via.placeholder.com/410x270" alt="Walnut Park Apartments">
                      </div>
                      <a href="projects/walnut-park-apartment.html" class="linkdetail"></a>
                    </div>
                    <div class="description">
                      <a href="projects/walnut-park-apartment.html">
                        <h5>Walnut Park Apartments</h5>
                        <p class="dia_chi"><i class="fas fa-map-marker-alt"></i> Austin, Texas 78753, USA</p>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-6 col-sm-4  col-md-3 colm10">
                  <div class="item">
                    <div class="blii">
                      <div class="img"><img class="thumb" data-src="https://via.placeholder.com/410x270" src="https://via.placeholder.com/410x270" alt="Osaka Heights">
                      </div>
                      <a href="projects/osaka-heights.html" class="linkdetail"></a>
                    </div>
                    <div class="description">
                      <a href="projects/osaka-heights.html">
                        <h5>Osaka Heights</h5>
                        <p class="dia_chi"><i class="fas fa-map-marker-alt"></i> Kirulapone, Colombo 06, Colombo, Sri Lanka</p>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-6 col-sm-4  col-md-3 colm10">
                  <div class="item">
                    <div class="blii">
                      <div class="img"><img class="thumb" data-src="https://via.placeholder.com/410x270" src="https://via.placeholder.com/410x270" alt="Mimaroba Paradise">
                      </div>
                      <a href="projects/mimaroba-paradise.html" class="linkdetail"></a>
                    </div>
                    <div class="description">
                      <a href="projects/mimaroba-paradise.html">
                        <h5>Mimaroba Paradise</h5>
                        <p class="dia_chi"><i class="fas fa-map-marker-alt"></i> Texas, USA</p>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-6 col-sm-4  col-md-3 colm10">
                  <div class="item">
                    <div class="blii">
                      <div class="img"><img class="thumb" data-src="https://via.placeholder.com/410x270" src="https://via.placeholder.com/410x270" alt="Aegean Villas">
                      </div>
                      <a href="projects/aegean-villas.html" class="linkdetail"></a>
                    </div>
                    <div class="description">
                      <a href="projects/aegean-villas.html">
                        <h5>Aegean Villas</h5>
                        <p class="dia_chi"><i class="fas fa-map-marker-alt"></i> Büyükçekmece, İstanbul, Turkey</p>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        </p>
        <p>
        <div class="container-fluid w90">
          <div class="padtop70">
            <div class="areahome">
              <div class="row">
                <div class="col-12">
                  <h2>Projects by locations</h2>
                  <p>Each place is a good choice, it will help you make the right decision, do not miss the opportunity to discover our wonderful properties.</p>
                </div>
              </div>
              <div style="position:relative;">
                <div class="owl-carousel" id="cityslide">
                  <div class="item itemarea">
                    <a href="projects/city/alhambra.html">
                      <img src="https://via.placeholder.com/410x270"
                        alt="Alhambra">
                      <h4>Alhambra</h4>
                    </a>
                  </div>
                  <div class="item itemarea">
                    <a href="projects/city/oakland.html">
                      <img src="https://via.placeholder.com/410x270"
                        alt="Oakland">
                      <h4>Oakland</h4>
                    </a>
                  </div>
                  <div class="item itemarea">
                    <a href="projects/city/bakersfield.html">
                      <img src="https://via.placeholder.com/410x270"
                        alt="Bakersfield">
                      <h4>Bakersfield</h4>
                    </a>
                  </div>
                  <div class="item itemarea">
                    <a href="projects/city/anaheim.html">
                      <img src="https://via.placeholder.com/410x270"
                        alt="Anaheim">
                      <h4>Anaheim</h4>
                    </a>
                  </div>
                  <div class="item itemarea">
                    <a href="projects/city/san-francisco.html">
                      <img src="https://via.placeholder.com/410x270"
                        alt="San Francisco">
                      <h4>San Francisco</h4>
                    </a>
                  </div>
                </div>
                <i class="am-next"><img src="<?php echo e(asset('assets/fe/images/pict/aleft.png')); ?>" alt="pre"></i>
                <i class="am-prev"><img src="<?php echo e(asset('assets/fe/images/pict/aright.png')); ?>" alt="next"></i>
              </div>
            </div>
          </div>
        </div>
        </p>
        <p>
        <div class="padtop70">
          <div class="box_shadow">
            <div class="container-fluid w90">
              <div class="homehouse">
                <div class="row">
                  <div class="col-12">
                    <h2>Properties For Sale</h2>
                    <p>Below is a list of properties that are currently up for sale</p>
                  </div>
                </div>
                <property-component type="sale" url="ajax/properties.json"></property-component>
              </div>
            </div>
          </div>
        </div>
        </p>
        <p>
        <div class="container-fluid w90">
          <div class="homehouse padtop30">
            <div class="row">
              <div class="col-12">
                <h2>Properties For Rent</h2>
                <p>Below is a detailed price list of each property for rent</p>
              </div>
            </div>
            <property-component type="rent" url="ajax/properties.json"></property-component>
          </div>
        </div>
        </p>
        <p>
        <div class="box_shadow" style="margin-bottom: 0;padding-bottom: 80px;">
          <div class="container-fluid w90">
            <div class="discover">
              <div class="row">
                <div class="col-12">
                  <h2>News</h2>
                  <p>Below is the latest real estate news we get regularly updated from reliable sources.</p>
                  <br>
                  <div class="blog-container">
                    <news-component url="ajax/posts.json"></news-component>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        </p>
      </div>
    </div>
    
    <!--FOOTER-->
    <footer>
      <br>
      <div class="container-fluid w90">
        <div class="row">
          <div class="col-sm-3">
            <p>
              <a href="index.html">
              <img src="<?php echo e(asset('assets/fe/images/logo/logo.png')); ?>" style="max-height: 38px" alt="asd">
              </a>
            </p>
            <p><i class="fas fa-map-marker-alt"></i> &nbsp;Gandaria City, Jl. Kebayoran Lama, 757695 Jakarta</p>
            <p><i class="fas fa-phone-square"></i> WhatsApp &nbsp;<a href="https://wa.me/6289649668279">+6289649668279</a></p>
            <p><i class="fas fa-envelope"></i> Email &nbsp;<a href="javascript:void(0)">ventus@gmail.com</a>
            </p>
          </div>
          <div class="col-sm-9 padtop10">
            <div class="row">
              <div class="col-sm-4">
                <div class="menufooter">
                  <h4>About</h4>
                  <ul >
                    <li>
                      <a href="about-us.html"  target="_self" >
                      <span>About us</span>
                      </a>
                    </li>
                    <li>
                      <a href="contact.html"  target="_self" >
                      <span>Contact us</span>
                      </a>
                    </li>
                    <li>
                      <a href="careers.html"  target="_self" >
                      <span>Careers</span>
                      </a>
                    </li>
                    <li>
                      <a href="terms-conditions.html"  target="_self" >
                      <span>Terms &amp; Conditions</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="menufooter">
                  <h4>More information</h4>
                  <ul >
                    <li>
                      <a href="projects.html"  target="_self" >
                      <span>All projects</span>
                      </a>
                    </li>
                    <li>
                      <a href="properties.html"  target="_self" >
                      <span>All properties</span>
                      </a>
                    </li>
                    <li>
                      <a href="properties1e1d.html?type=sale"  target="_self" >
                      <span>Houses for sale</span>
                      </a>
                    </li>
                    <li>
                      <a href="properties530f.html?type=rent"  target="_self" >
                      <span>Houses for rent</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="menufooter">
                  <h4>News</h4>
                  <ul >
                    <li>
                      <a href="news.html"  target="_self" >
                      <span>Latest news</span>
                      </a>
                    </li>
                    <li>
                      <a href="building-materials.html"  target="_self" >
                      <span>Building materials</span>
                      </a>
                    </li>
                    <li>
                      <a href="house-architecture.html"  target="_self" >
                      <span>House architecture</span>
                      </a>
                    </li>
                    <li>
                      <a href="house-design.html"  target="_self" >
                      <span>House design</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- <div class="row">
          <div class="col-12">
            <div class="padtop10 mb-2 language">
              <strong class="language-label">Languages</strong>:
              <a rel="alternate" hreflang="vi" href="vi.html">
              <img src="vendor/core/images/flags/vn.svg" title="Tiếng Việt" width="16" alt="Tiếng Việt">                            <span>Tiếng Việt</span>                        </a> &nbsp;
            </div>
          </div>
        </div> -->
        <div class="copyright">
          <div class="col-sm-12">
            <p class="text-center">
              © 2020 Develop By Riventus
            </p>
          </div>
        </div>
      </div>
    </footer>
    <!--FOOTER-->
    <script type="text/javascript">
      window.trans = {
          "Price": "Price",
          "Number of rooms": "Number of rooms",
          "Number of rest rooms": "Number of rest rooms",
          "Square": "Square",
          "No property found": "No property found",
          "million": "million",
          "billion": "billion",
          "m2": "m2",
      }
    </script>
    <!--END FOOTER-->
    <div class="action_footer">
      <a href="#" class="cd-top"><i class="fas fa-arrow-up"></i></a>
      <a href="https://wa.me/6289649668279" style="color: white;font-size: 17px;"><i class="fas fa-phone"></i> <span>  &nbsp;CS</span></a>
    </div>
    <div id="loading">
      <div class="lds-hourglass">
      </div>
    </div>
  </body>
</html>
<script src="<?php echo e(asset('assets/fe/js/app.js')); ?>"></script>
<script src="<?php echo e(asset('assets/fe/js/components.js')); ?>"></script>
<script src="<?php echo e(asset('assets/fe/js/language-public.js')); ?>"></script>
<link rel="stylesheet" href="<?php echo e(asset('assets/fe/css/cookie-consent.css')); ?>">
<div class="js-cookie-consent cookie-consent">
  <span class="cookie-consent__message">
  Your experience on this site will be improved by allowing cookies.
  </span>
  <button class="js-cookie-consent-agree cookie-consent__agree">
  Allow cookies
  </button>
</div>
<script>
  'use strict';
  
  window.botbleCookieConsent = (function () {
  
      const COOKIE_VALUE = 1;
      const COOKIE_DOMAIN = 'rhivent.github.io';
  
      function consentWithCookies() {
          setCookie('botble_cookie_consent', COOKIE_VALUE, 7300);
          hideCookieDialog();
      }
  
      function cookieExists(name) {
          return document.cookie.split('; ').indexOf(name + '=' + COOKIE_VALUE) !== -1;
      }
  
      function hideCookieDialog() {
          const dialogs = document.getElementsByClassName('js-cookie-consent');
  
          for (let i = 0; i < dialogs.length; ++i) {
              dialogs[i].style.display = 'none';
          }
      }
  
      function setCookie(name, value, expirationInDays) {
          const date = new Date();
          date.setTime(date.getTime() + (expirationInDays * 24 * 60 * 60 * 1000));
          document.cookie = name + '=' + value
              + ';expires=' + date.toUTCString()
              + ';domain=' + COOKIE_DOMAIN
              + ';path=/';
      }
  
      if (cookieExists('botble_cookie_consent')) {
          hideCookieDialog();
      }
  
      const buttons = document.getElementsByClassName('js-cookie-consent-agree');
  
      for (let i = 0; i < buttons.length; ++i) {
          buttons[i].addEventListener('click', consentWithCookies);
      }
  
      return {
          consentWithCookies: consentWithCookies,
          hideCookieDialog: hideCookieDialog
      };
  })();
</script>
<?php /**PATH C:\xampp\htdocs\rems\resources\views/layoutsFE/default.blade.php ENDPATH**/ ?>