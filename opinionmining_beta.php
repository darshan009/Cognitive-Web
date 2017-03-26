<!doctype html>

<html>
  
  <head>
    <title>Opinion mining demo</title>
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script type="text/javascript" src="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <style type="text/css">
      /*       * Style tweaks       * --------------------------------------------------       */
      body {
        padding-top: 70px;
      }
      footer {
        padding-left: 15px;
        padding-right: 15px;
      }
      /*       * Off Canvas       * --------------------------------------------------       */
      @media screen and(max-width: 768px) {
        .row-offcanvas {
          position: relative;
          -webkit-transition: all 0.25s ease-out;
          -moz-transition: all 0.25s ease-out;
          transition: all 0.25s ease-out;
        }
        .row-offcanvas-right .sidebar-offcanvas {
          right: -50%;
          /* 6 columns */
        }
        .row-offcanvas-left .sidebar-offcanvas {
          left: -50%;
          /* 6 columns */
        }
        .row-offcanvas-right.active {
          right: 50%;
          /* 6 columns */
        }
        .row-offcanvas-left.active {
          left: 50%;
          /* 6 columns */
        }
        .sidebar-offcanvas {
          position: absolute;
          top: 0;
          width: 50%;
          /* 6 columns */
        }
      }
    </style>
  </head>
  
  <body>
    <div class="navbar navbar-fixed-top navbar-inverse" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="home.php"><i class="fa fa-renren"></i>Cognitive Web</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li>
              <a href="home.php">Home</a>
            </li>
            <li>
              <a href="about.html">About</a>
            </li>
            <li>
              <a href="contact.html">Contact us</a>
            </li>
            <li  class="active">
              <a href="opinionmining_beta.php">Beta</a>
            </li>
          </ul>
        </div>
        <!-- /.nav-collapse -->
      </div>
      <!-- /.container -->
    </div>
    <!-- /.navbar -->
    <div class="container">
      <div class="row row-offcanvas row-offcanvas-right">
        <div class="col-xs-12 col-sm-9">
          <p class="pull-right visible-xs"></p>
          <div class="jumbotron">
            <h1>Opinion Mining</h1>





            <form action="opinionmining_beta.php" method="post">
              Comment: <input type="text" name="comment">
                   <input type="submit" >

            </form>

       <br><Br>









 
<?php
/* 
  Sentiment Analysis (Classification) using bayesian Opinion Mining
  Copyright 2011 The tldr Project c/o ipsumedia Limited. 
 
 
  LICENSE: 
  Licensed under the Apache License, Version 2.0 (the "License");
  you may not use this file except in compliance with the License.
  You may obtain a copy of the License at
       http://www.apache.org/licenses/LICENSE-2.0
  Unless required by applicable law or agreed to in writing, software
  distributed under the License is distributed on an "AS IS" BASIS,
  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
  See the License for the specific language governing permissions and
  limitations under the License.
*/
 
  include('opinion.php');
  $sentimentData = new Opinion();
  $sentimentData->addToIndex('negativedata.txt', 'negative');
  $sentimentData->addToIndex('positivedata.txt', 'positive');
 
  //Add your data in a "$doc" variable.
   // $doc="excellent";
$doc=$_POST["comment"];
echo $doc;
  //Put sentances of string into array.
  $sentences = explode(".", $doc);
 
  //Create array for positive and negative sentiment
  $score = array('positive' => 0, 'negative' => 0);
 
  //Loop through sentances and find sentiment
  foreach($sentences as $sentence) {
          if(strlen(trim($sentence))) {
                  $class = $sentimentData->classify($sentence);
 
                 //Add sentiment to sentiment score
                  $score[$class]++;
          }
  }
 
  /* 
  <do better> 
  This isn't the cleanest it could be. If you can think of a better way of doing this, please tell me. 
  cpopensource [at] gmail.com
 
  Reverse sort the score in order to find the most likely sentiment (positive or negative)
  */
 
  arsort($score);
 
 
  //To find how much bias there is (assurance), divide the positive sentiment score by the negative
 
  if($score['positive']>0&&$score['negative']>0)
  {
	  $assurance = $score['positive']/$score['negative'];
 
	  //If the assurance is not a decimal...
	  if($assurance>1){
		  $assurance = $score['negative']/$score['positive'];
	  }
  }
  else
  {
	$assurance=1;	
  }
 
  //Remove the least likey alternative 
  array_pop($score);
 
  //<do better/>
 
  //As the sentiment (positive and negative) are the keys in the array, find the key of the sentiment.
  $keyArray = array_keys($score);
 
  //If we're not sure (the assurance (above) is less than .47), it's inconclusive. Otherwise, it's most likely good.
  if($assurance>.30){
      $sentiment = $keyArray[0];
  } else {
      $sentiment = "inconclusive";
  }
 
  //Echo out the sentiment
echo "<br>";  
echo "<h3> output: </h3>";
echo $sentiment;
 
 
if ($sentiment=='positive')
{
 echo "<br>";
//echo "Positive in loop";

 
 
}
 
if ($sentiment=='negative')
{
 echo "<br>";
//echo "Negative in loop";
 
}
 
 
else{
 
//echo "Nothing here!";
 
}
 
 
 
 
 
 
// header("location:javascript://history.go(-1)");
 
 
 
 
 
 
 
?>


          </div>
          <div class="row">
            <div class="col-6 col-sm-6 col-lg-4">
              <p></p>
            </div>
            <!--/span-->
            <!--/span-->
            <div class="col-6 col-sm-6 col-lg-4">
              <p></p>
            </div>
            <!--/span-->
            <div class="col-6 col-sm-6 col-lg-4">
              <p></p>
            </div>
            <!--/span-->
            <div class="col-6 col-sm-6 col-lg-4">
              <p></p>
            </div>
            <!--/span-->
            <!--/span-->
          </div>
          <!--/row-->
        </div>
        <!--/span-->
        <!--/span-->
      </div>
      <!--/row-->
      <hr>
      <footer></footer>
   


</HTML>



