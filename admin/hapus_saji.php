<?php
	require "conn.php";
	$id_resep = $_GET['id'];
	$saji = $_GET['saji'];
	$sql_delete = mysql_query("delete from saji_resep where id_resep='$id_resep' AND saji_resep='$saji'") or die(mysql_error());
	
	if ($sql_delete)
	{
		echo "
		<script>alert('Cara Penyajian Berhasil Dihapus'); window.location.href = 'dasar.php?page=saji_resep';</script>";
	}
	else
	{
		echo "<script>alert('Cara Penyajian Gagal Dihapus'); window.location.href = 'dasar.php?page=saji_resep';</script>";
	}
?>