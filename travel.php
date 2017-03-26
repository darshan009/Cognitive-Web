<?php


//Start session
	session_start();

//Include database connection details
require_once('connection.php');

$ip=$_SERVER['REMOTE_ADDR']; 
//echo $ip;

foreach ($_SESSION as $key=>$val)
  //echo $key." ".$val."<br/>";





if($_SESSION['array'] !=0)
{
$query = mysql_query("SELECT * FROM websites WHERE genre = travel ORDER BY rating ASC LIMIT 1000");


$_SESSION['a'] = array();
$arr = array();
$arr = $_SESSION['a'];


//echo "Inside IF";

//rating DESC LIMIT


while($rows = mysql_fetch_assoc($query)){

  // add each row returned into an array
  $arr[] = $rows;


  // OR just echo the data:
  //echo $row['id']; // etc

}
$_SESSION['a'] = $arr;
$_SESSION['views']=0;
$_SESSION['array']=0;
}
// debug:






//echo $_SESSION['a'][7]['id']; // print the 7th rows id


//print_r($_SESSION['a']); // show all array data

//echo "xxxxxxxx";
$c = count($_SESSION['a']);
//echo $c;





$_SESSION['idd']=end($_SESSION['a']);
    //echo $_SESSION['idd']['id'];


//print_r($_SESSION['idd']);

//echo $_SESSION['idd']['id'];



$temp = $_SESSION['idd']['link'];

//echo $temp;

readfile($temp);



array_pop($_SESSION['a']);




//$row = $_SESSION['a'][$c]['link'];

//echo $row;








/* =====================================OLD CODE===================================


WHILE ($rows = mysql_fetch_array($query)):

 $rows = $rows['link'];



//echo $rows;




//readfile( $rows );



endwhile;




====================================END==============================*/



?>










		