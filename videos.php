<?php

require_once('auth.php');



//Start session
	session_start();
 
//Include database connection details
require_once('connection.php');

$query = mysql_query("SELECT * FROM websites WHERE genre='video' ORDER BY RAND() LIMIT 1");

WHILE ($rows = mysql_fetch_array($query)):

 $rows = $rows['link'];


readfile( $rows );

endwhile;




?>		

	