<?php
include ("conn.php");
$nama_resep = $_POST['nama_resep'];
$sql_check = mysql_query("select id_resep from resep where nama_resep='".$nama_resep."'") or die(mysql_error());
	$cocok = mysql_num_rows($sql_check);
	echo $cocok;
?>