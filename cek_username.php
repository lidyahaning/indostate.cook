<?php
include ("conn.php");
$username = $_POST['username'];
$sql_check = mysql_query("select id_anggota from anggota where username='".$username."'") or die(mysql_error());
	$cocok = mysql_num_rows($sql_check);
	echo $cocok;
?>