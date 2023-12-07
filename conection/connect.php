<?php
	$mysql = mysqli_connect("localhost","root","") or die("No Connection");
	$dbselected = mysqli_select_db($mysql,"test_db") or die("No Database name");
	
?>


<!-- $mysql_host = "mysql2.000webhost.com";
$mysql_database = "a4451455_school1";
$mysql_user = "a4451455_jazib";
$mysql_password = "jazib123"; -->