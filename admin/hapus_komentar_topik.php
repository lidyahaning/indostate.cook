<?php
	require "conn.php";
	$id_anggota = $_GET['id_anggota'];
	$id_topik = $_GET['id_topik'];
	$isi_komentar = $_GET['isi'];
	$sql_delete = mysql_query("delete from komentar_topik where id_anggota='$id_anggota' AND id_topik='$id_topik' AND isi_komentar='$isi_komentar'") or die(mysql_error());
	
	if ($sql_delete)
	{
		echo "
		<script>alert('Komentar Berhasil Dihapus'); window.location.href = 'dasar.php?page=komentar_topik';</script>";
	}
	else
	{
		echo "<script>alert('Komentar Gagal Dihapus'); window.location.href = 'dasar.php?page=komentar_topik';</script>";
	}
?>