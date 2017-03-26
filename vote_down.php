<?php

//Start session
	session_start();

//Include database connection details
require_once('connection.php');

$id=$_SESSION['SESS_MEMBER_ID'];
$idd=$_SESSION['idd']['id'];
echo $id;
echo "hi";
$links = $_SESSION['idd']['link'];
echo $links;
echo "harry";
echo $idd;
echo "voldemort";

$qry="SELECT * FROM voting WHERE uid='$id' AND links='$links'";
	$result=mysql_query($qry) or die(mysql_error());



$count = mysql_num_rows($result);

echo "this is count    ";
echo $count;
echo "xxxxx";



if($count==0)
{
$sql = "update websites set rating=rating-1  where id='$idd' ";
mysql_query( $sql);

echo "inside if count-----------------------------";

$sql_in = "insert into voting (id,uid,links) values ('NULL','$id','$links')";
mysql_query( $sql_in);


}

foreach ($_SESSION as $key=>$val)
    echo $key." ".$val."<br/>";


$idd = $_SESSION['idd']['id'];


echo $idd;


//echo $idd;


print_r($_SESSION['idd']);

header("location:javascript://history.go(-1)");

?>