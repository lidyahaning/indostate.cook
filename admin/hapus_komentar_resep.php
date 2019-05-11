<?php
	require "conn.php";
	$id_anggota = $_GET['id_anggota'];
	$id_resep = $_GET['id_resep'];
	$isi_komentar = $_GET['isi'];
	$sql_delete = mysql_query("delete from komentar_resep where id_anggota='$id_anggota' AND id_resep='$id_resep' AND isi_komentar='$isi_komentar'");
	
	if ($sql_delete)
	{
		echo "
		<script>alert('Komentar Berhasil Dihapus'); window.location.href = 'dasar.php?page=komentar_resep';</script>";
	}
	else
	{
		echo "<script>alert('Komentar Gagal Dihapus'); window.location.href = 'dasar.php?page=komentar_resep';</script>";
	}
?>