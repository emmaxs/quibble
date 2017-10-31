<!DOCTYPE html>
<html lang="en">
<head>
  <title>Search results</title>
  <meta charset="utf-8">
  <meta name = "format-detection" content = "telephone=no" />
  <link rel="icon" href="images/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="css/grid.css">
  <link rel="stylesheet" href="css/style.css">
  <script src="js/jquery.js"></script>
  <script src="search/search.js"></script>
  <script src="js/jquery-migrate-1.2.1.js"></script>
  <!--[if (gt IE 9)|!(IE)]><!-->
  <script src="js/jquery.mobile.customized.min.js"></script>
  <script src="js/wow/wow.js"></script>
  <script>
    $(document).ready(function () {
      if ($('html').hasClass('desktop')) {
        new WOW().init();
      }
    });
  </script>
  <!--<![endif]-->



  <!--[if lt IE 8]>
  <div style=' clear: both; text-align:center; position: relative;'>
   <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
     <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
   </a>
  </div>
  <![endif]-->
  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
  <link rel="stylesheet" type="text/css" media="screen" href="css/ie.css">
  <![endif]-->
</head>
<body>


<div class="top_section">
  <div class="container">
    <div class="row">
      <div class="grid_5">
        <p class="txt1 marLeft1"><img src="images/icon1.png" alt="" class="img1 no_resize">9870 St Vincent Place, Glasgow, DC 45 Fr 45.</p>
      </div>
      <div class="grid_2">
        <p class="txt1 marLeft2"><img src="images/icon2.png" alt="" class="img1 no_resize"><a href="#" class="link">contact@demolink.org</a></p>
      </div>
      <div class="grid_2">
        <p class="txt1"><img src="images/icon3.png" alt="" class="img1 no_resize"> +1 800 559 6580</p>
      </div>
      <div class="grid_3">
        <ul class="soc_icons">
          <li><a href="#"><i class="fa fa-facebook"></i></a></li>
          <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
          <li><a href="#"><i class="fa fa-rss"></i></a></li>
          <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
          <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
        </ul>
      </div>
    </div>
  </div>
</div>

  <!--========================================================
                            HEADER 
  =========================================================-->
  <header id="header">
    <div id="stuck_container">
      <div class="container">
        <div class="row">
          <div class="grid_12 txt_cntr">
            <h1><a href="index.html"><img src="images/logo.png" alt="booklife"></a> </h1>
          </div>
          <div class="grid_12">
            <nav>
              <ul class="sf-menu">
                <li><a href="index.html">Home<strong></strong></a></li>
                <li><a href="index-1.html">About<strong></strong></a>
                  <ul class="submenu">
                    <li><a href="#">History</a></li>
                    <li><a href="#">News</a>
                      <ul class="submenu2">
                        <li><a href="#">Latest</a></li>
                        <li><a href="#">Archive</a></li>
                      </ul>
                    </li>
                    <li><a href="#">Testimonials</a></li>
                  </ul>
                </li>
                <li><a href="index-2.html">Top sellers<strong></strong></a></li>
                <li><a href="index-3.html">Authors<strong></strong></a></li>
                <li><a href="index-4.html">Books<strong></strong></a></li>
                <li><a href="index-5.html">Blog<strong></strong></a></li>
                <li id="last-li"><a href="index-6.html">Contacts<strong></strong></a></li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!--========================================================
                            CONTENT 
  =========================================================-->
  <section id="content">





    <div class="container">
        <h2 class="marTop6">Search result:</h2>
        <div id="search-results"></div>

        <div class="wrapper">
          <div class="indent1"></div>
        </div>


    </div>






  </section>



  <!--========================================================
                            FOOTER 
  =========================================================-->
  <footer id="footer">
    <div class="container">
      <div class="hline v2"></div>
      <div class="row">
        <div class="grid_12">

          <h1><a href="index.html">Booklife</a> </h1>
          <p class="txt_priv wow fadeInLeft">&copy; <span id="copyright-year"></span>. <a href="index-7.html">Privacy Policy</a></p>



          <ul class="soc_icons2 wow fadeInRight">
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
            <li><a href="#"><i class="fa fa-rss"></i></a></li>
            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
          </ul>

        </div>
      </div>
    </div>
  </footer>
<script src="js/script.js"></script>

</body>
</html>