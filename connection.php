 <?php

$mysql_hostname = "mysql2.000webhost.com";
$mysql_database = "a2499537_login";
$mysql_user = "a2499537_local";
$mysql_password = "datapart1";

$prefix = "";
$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database");
mysql_select_db($mysql_database, $bd) or die("Could not select database");









?>