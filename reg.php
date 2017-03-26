<?php

    require "connection.php";
    if(isset($_POST['username']) && isset($_POST['password'])) {
        $username = strip_tags($_POST['username']);
        $password = strip_tags($_POST['password']);
    
        if($username==''){
            header('location:./register.php?error=user name empty');
            exit();
        }


        /*This insert command for username, password and email. if you need any other field you can insert it here*/
        mysql_query("INSERT INTO login(id,username,password) VALUES (null,'$username','$password')") or  die("".mysql_error());
        //Here you can write conformation or success message or use any redirect
        header('location:http://cognitiveweb.net76.net');
    }

//change location:login to homepage after creating the page...



?>