<?php
	require "conn.php";
	$id_resep = $_GET['id'];
	$cara = $_GET['cara'];
	$sql_delete = mysql_query("delete from cara_resep where id_resep='$id_resep' AND cara_resep='$cara'") or die(mysql_error());
	
	if ($sql_delete)
	{
		echo "
		<script>alert('Cara Berhasil Dihapus'); window.location.href = 'dasar.php?page=cara_resep';</script>";
	}
	else
	{
		echo "<script>alert('Cara Gagal Dihapus'); window.location.href = 'dasar.php?page=cara_resep';</script>";
	}
?>