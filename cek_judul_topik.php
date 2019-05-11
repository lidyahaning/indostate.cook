<?php
include ("conn.php");
$judul = $_POST['judul'];
$sql_check = mysql_query("select id_topik from topik where judul='".$judul."'") or die(mysql_error());
	$cocok = mysql_num_rows($sql_check);
	echo $cocok;
?>