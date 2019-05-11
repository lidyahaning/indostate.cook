<?php
	require "conn.php";
	$id_resep = $_GET['id'];
	$bahan = $_GET['bahan'];
	$sql_delete = mysql_query("delete from bahan_resep where id_resep='$id_resep' AND bahan_resep='$bahan'") or die(mysql_error());
	
	if ($sql_delete)
	{
		echo "
		<script>alert('Bahan Berhasil Dihapus'); window.location.href = 'dasar.php?page=bahan_resep';</script>";
	}
	else
	{
		echo "<script>alert('Bahan Gagal Dihapus'); window.location.href = 'dasar.php?page=bahan_resep';</script>";
	}
?>