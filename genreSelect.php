<?php

require_once('auth.php');
?>


<!doctype html>

<html>
  
  <head>
    <title>Cognitive Web</title>
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.0/css/font-awesome.css">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script>
      function refreshIframe() {
        var ifr = document.getElementsByName('Right')[0];
        ifr.src = ifr.src;
      }
    </script>
    <script type="text/javascript" src="https://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <style type="text/css">
      body {
        padding-top: 50px;
        padding-bottom: 20px;
      }
    </style>
    <meta charset="UTF-8">
    <style>
      /* This only works with JavaScript,        if it's not present, don't show loader */
      .no-js #loader {
        display: none;
      }
      .js #loader {
        display: block;
        position: absolute;
        left: 100px;
        top: 0;
      }
    </style>
    <script>
      function refreshIframe() {
        var ifr = document.getElementsByName('Right')[0];
        ifr.src = ifr.src;
      }
    </script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
    <script src="http://github.com/Modernizr/Modernizr/raw/master/modernizr.js"></script>
    <script>
      // Wait for window load   $(window).load(function() {     // Animate loader off screen      $("#loader").animate({        top: -200     }, 1500);   });
    </script>
  </head>
  
  <body background="Office.jpg">

    <div class="navbar navbar-inverse navbar-fixed-top" width="100%" height="8%">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="home.html"><i class="fa fa-renren"></i>Cognitive Web</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active">
              <a href="home.html">Home</a>
            </li>
            <li>
              <a href="about.html">About</a>
            </li>
            <li>
              <a href="contact.html">Contact us</a>
            </li>
            <li>
              <a href="upgrade.php">Upgrade Account</a>
            </li>
          </ul>
<?php
         echo "<p align = 'right' style='color:white; padding-top: 15px; '>";
          echo "Welcome ".$_SESSION["username"];
          echo "</p>";
         ?>
        </div>
      </div>
    </div>
    <div class="container">
      <h3 align="center">Please select the genre you wish to exlpore </h3>
      <div class="row">
        <div class="col-xs-2 col-md-4">
         <p align=center><a href="home.php" style="text-align: center"><img src="Entertainment.jpg" width="300" height="200" class="img-thumbnail" alt="Entertainment"></a></p>
          <p align=center>All</p>
        </div>
        <div class="col-xs-2 col-md-4">
          <p align=center><a href="fun.php" align="center"><img src="music.jpg" width="300" height="200" class="img-thumbnail" alt="Music"></a></p>
          <p align="center">Fun</p>
        </div>
        <div class="col-xs-2 col-md-4">
          <p align=center><a href="videos.php" align="center"><img src="Videos.jpg" width="300" height="200" class="img-thumbnail" alt="Videos"></a></p>
          <p align="center">Videos</p>
        </div>
        <div><br><br><br><br><br>
      <div class="row">
        <div class="col-xs-2 col-md-4">
          <p align="center"><a href="tech.php" align="center"><img src="tech.jpg"                   width="300" height="200" class="img-thumbnail" alt="Tech"></a></p>
          <p align="center">Technology</p>
        </div>
        <div class="col-xs-2 col-md-4">
          <p align="center"><a href align="center"><img src="elec.jpg" width="300"                 height="200" class="img-thumbnail" alt="Elecs"></a></p>
          <p align="center">Travel</p>
        </div>
        <div class="col-xs-2 col-md-4">
          <a href><img src="fitness.jpg" width="300" height="200" class="img-thumbnail" alt="Videos"></a>
          <p align="center">fitness</p>
        </div>
      </div><br><br><br>
      <div class="row">
        <div class="col-xs-2 col-md-4">
         <p align=center><a href="home.php" style="text-align: center"><img src="Entertainment.jpg" width="300" height="200" class="img-thumbnail" alt="Social"></a></p>
          <p align=center>Social</p>
        </div><div class="col-xs-2 col-md-4">
         <p align=center><a href="pics.php" style="text-align: center"><img src="Entertainment.jpg" width="300" height="200" class="img-thumbnail" alt="Pictures"></a></p>
          <p align=center>Pictures</p>
        </div>
      </div>
    </div>

  </body>

</html>