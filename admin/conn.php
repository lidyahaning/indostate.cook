<?php
	$host = "localhost";
	$user = "root";
	$pass = "";
	$dbName= "webresep2";
	$con = mysql_connect($host,$user,$pass);
	mysql_select_db($dbName, $con) or die ("Connect Failed!! : ".mysql_error());
?>