<?php

//Include database connection details
require_once('connection.php');

$query = mysql_query("SELECT * FROM websites ORDER BY RAND() LIMIT 1");

WHILE ($rows = mysql_fetch_array($query)):

 $rows = $rows['link'];



//echo $rows;




readfile( $rows );



endwhile;

?>