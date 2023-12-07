<!DOCTYPE html>
<html lang="en">
<head>
  <title>Search Results</title>
  <meta charset="utf-8">
  <meta name = "format-detection" content = "telephone=no" />
  <link rel="icon" href="images/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="css/grid.css">
  <link rel="stylesheet" href="css/search.css">
  <link rel="stylesheet" href="css/style.css">
  <script src="js/jquery.js"></script>
  <script src="js/jquery-migrate-1.2.1.js"></script>
  <script src="search/search.js"></script>
  <!--[if (gt IE 9)|!(IE)]><!-->
  <script src="js/wow/wow.js"></script>
  <script>
    $(document).ready(function () {
      if ($('html').hasClass('desktop')) {
        new WOW().init();
      }
    });
  </script>
  <!--<![endif]-->
  <script>
    $(document).ready(function () {
      var state = 0;
      document.getElementById('icon').onclick = function() {
        if (state == 1) {
          document.getElementById('search').style.display = 'none';
          state = 0;
          return;
        }
        document.getElementById('search').style.display = 'block';
        state = 1;
      };
    });
  </script>
  <!--[if lt IE 9]>
  <script src="js/html5shiv.js"></script>
  <div id="ie6-alert" style="width: 100%; text-align:center; margin-top: 227px;">
      <link rel="stylesheet" type="text/css" href="css/ie.css"/>
    <img src="http://beatie6.frontcube.com/images/ie6.jpg" alt="Upgrade IE 6" width="640" height="344" border="0" usemap="#Map" longdesc="http://die6.frontcube.com" />
    <map name="Map" id="Map"><area shape="rect" coords="496,201,604,329" href="http://www.microsoft.com/windows/internet-explorer/default.aspx" target="_blank" alt="Download Interent Explorer" /><area shape="rect" coords="380,201,488,329" href="http://www.apple.com/safari/download/" target="_blank" alt="Download Apple Safari" /><area shape="rect" coords="268,202,376,330" href="http://www.opera.com/download/" target="_blank" alt="Download Opera" /><area shape="rect" coords="155,202,263,330" href="http://www.mozilla.com/" target="_blank" alt="Download Firefox" />
      <area shape="rect" coords="35,201,143,329" href="http://www.google.com/chrome" target="_blank" alt="Download Google Chrome" />
    </map>
  </div>
  <![endif]-->
</head>


<body class="hashAncor">

<!--========================================================
                          HEADER
=========================================================-->
<header id="header">
  <div id="stuck_container">
    <div class="wrapper">
      <h1>
        <a href="index.html">
          <span class="first">pool maintenance</span>
          <span class="second">paradiso</span>
        </a>
      </h1>
      <div class="search-block" id="search-block">
        <div class="icon" id="icon">
          <i class="fa fa-search"></i>
        </div>
        <form id="search" action="search.php" method="GET" accept-charset="utf-8">
          <input type="text" name="s" placeholder="Enter keyword:"/>
          <a onclick="document.getElementById('search').submit()"><div class="search_icon"></div>
          </a>
        </form>
      </div>
      <nav>
        <ul class="sf-menu">
          <li><a href="index.html#about">About us</a></li>
          <li><a href="index.html#team">Team</a></li>
          <li><a href="index.html#news">News</a></li>
          <li><a href="index.html#services">Services</a></li>
          <li><a href="index.html#pricing">Pricing</a></li>
          <li><a href="index.html#portfolio">Portfolio</a></li>
          <li><a href="index.html#contacts">Contacts</a></li>
        </ul>
      </nav>
    </div>
    <div class="clearfix"></div>
  </div>
</header>


<!--========================================================
                          CONTENT
=========================================================-->
<section id="content">
  <div class="wrapper8">
    <div class="container">
      <div class="row">
        <div class="grid_12">
          <div class="heading1">
            <h2>Search results</h2>
            <span class="second">Pulvinar ac estibulum sed ante ddone nec sagittis euismod purus.</span>
          </div>
		  <div id="search-results"></div>
        </div>
      </div>
    </div>
  </div>
</section>

<!--========================================================
                          FOOTER
=========================================================-->
<footer id="footer">
  <div class="wrapper">
    <div class="container">
      <div class="row">
        <div class="grid_12">
<div class="privacy-block wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
            <a href="index.html">PARADISO pool maintenance</a> &copy; <span id="copyright-year"></span> <a
                  href="privacy.html">Privacy policy</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>

<script src="js/script.js"></script>

</body>
</html>