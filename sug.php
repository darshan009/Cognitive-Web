<?php
    require "connection.php";
$name = strip_tags($_POST['name']);
$link = strip_tags($_POST['link']);
$rating = strip_tags($_POST['rating']);
$genre = strip_tags($_POST['genre']);

        /*This insert command for username, password and email. if you need any other field you can insert it here*/

        mysql_query("INSERT INTO websites(id,name,link,rating,genre) VALUES (null,'$name','$link','$rating','$genre')") or  die("".mysql_error());

        //Here you can write conformation or success message or use any redirect
        header('location:suggest.php');
 

//change location:login to homepage after creating the page...



?>