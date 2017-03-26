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
       // ADD SLIDEDOWN ANIMATION TO DROPDOWN //
  $('.dropdown').on('show.bs.dropdown', function(e){
    $(this).find('.dropdown-menu').first().stop(true, true).slideDown();
  });

  // ADD SLIDEUP ANIMATION TO DROPDOWN //
  $('.dropdown').on('hide.bs.dropdown', function(e){
    $(this).find('.dropdown-menu').first().stop(true, true).slideUp();
  });
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
  
  <body>

<div
  class="fb-like"
  data-share="true"
  data-width="450"
  data-show-faces="true">
</div>

<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '1536008519983927',
      xfbml      : true,
      version    : 'v2.2'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>


<div class="navbar navbar-inverse navbar-fixed-top" width="100%" height="8%">
      <div class="container">
        <div class="navbar-header">

          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            
          </button>
          <a class="navbar-brand" href="home.php"><i class="fa fa-renren"></i>Cognitive Web</a>
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
              <a href="opinionmining_beta.php">Beta</a>
            </li>

<li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Genre
          <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="home.php">All</a></li>
            <li><a href="fun2.php">Fun</a></li>
            <li><a href="videos2.php">Videos</a></li>
             <li><a href="tech2.php">Technology</a></li>
            <li><a href="travel2.php">Travel</a></li>
           <li><a href="fitness2.php">Fitness</a></li>
            <li><a href="social2.php">Social</a></li>
             <li><a href="pics2.php">Pictures</a></li>
          </ul>
    </li>  
  </ul>
    <ul class="nav navbar-nav navbar-center">
           <li>
               <a href="vote_up.php"><img src="thumbs_up.jpg" alt="noidea" class="img-circle" width = "30"/></a>
            </li>
            <li style= "padding-top : 12px">
               <button class="btn btn-primary" align = "center" onclick="refreshIframe();">
                <span class="glyphicon glyphicon-search"></span>&nbsp;Cog</button>
            </li>
            <li>
               <a href="vote_down.php"><img src="thumbs_down.jpg" alt="noidea2" class="img-circle" width = "30"/></a>
             </p>
            </li>
    </ul>
    <ul class="nav navbar-nav navbar-center">
            <li style= "padding-top : 12px; padding-left : 15px">
               <button class="btn btn-primary" align = "center" onclick="refreshIframe();">
                <a href="random2.php"><font color="white"><span class="glyphicon glyphicon-search"></span>&nbsp;Random</font></a></button>
            </li>
    </ul>

    <ul class="nav navbar-nav navbar-center">
            <li style= "padding-top : 12px; padding-left : 15px">
               <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
  Comment
</button>

            </li>
    </ul>

     
       <?php 
        // <span class="btn-group pull-right"> 
        echo ' <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">';
          echo "<span class='glyphicon glyphicon-user'></span>";
          echo " Welcome ".$_SESSION["username"];
        echo '<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="suggest.php">Suggest Website</a></li>
           <li><a href="logout.php">Logout</a></li>
           </ul>';
      //   echo "<p align = 'right' style='color:white; padding-top: 15px; '>";
        //  echo "Welcome ".$_SESSION["username"];
         // echo "</p>";

    ?>
                 
    </div>
        <!--/.navbar-collapse -->
      </div>
      
    </div>
    <br>
    <br>
    

<!--
katchis code
<form action="vote_up.php" method="POST">

<input type="submit" value="UP">


</form>


<form action="vote_down.php" method="POST">

<input type="submit" value="DOWN">


</form>
-->


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
      <form action="classify.php">
        <textarea> </textarea>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button></form>
      </div>
    </div>
  </div>
</div>

    <div>
    <form action="home.php" method="POST">

</form>

    </div>








    <iframe name="Right" src="tech.php" width="100%" height="575" frameborder="0"></iframe>
  </body>

</html>   







  