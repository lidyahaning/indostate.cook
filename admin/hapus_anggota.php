<?php
	require "conn.php";
	$id = $_GET['id'];
	$sql_delete = mysql_query("delete from anggota where id_anggota='$id'"); //anggota
	$sql_delete1 = mysql_query("delete from resep where id_anggota='$id'"); //resep
	$sql_delete2 = mysql_query("delete from topik where id_anggota='$id'"); //topik
	$sql_delete3 = mysql_query("delete from komentar_resep where id_anggota='$id'"); //komentar resep
	$sql_delete4 = mysql_query("delete from komentar_topik where id_anggota='$id'"); //komentar topik
	//ngambil data resep
	$sql = mysql_query("select * from resep where id_anggota='$id'") or die (mysql_error());
	$row = mysql_fetch_array($sql);
	$id_resep = $row['id_resep'];
	$sql_delete5 = mysql_query("delete from bahan_resep where id_resep='$id'"); //bahan resep
	$sql_delete6 = mysql_query("delete from cara_resep where id_resep='$id'"); //cara resep
	$sql_delete7 = mysql_query("delete from saji_resep where id_resep='$id'"); //saji resep
	
	if ($sql_delete && $sql_delete1 && $sql_delete2 && $sql_delete3 && $sql_delete4 && $sql_delete5 && $sql_delete6 && $sql_delete7)
	{
		echo "
		<script>alert('Data Anggota Berhasil Dihapus'); window.location.href = 'dasar.php?page=anggota';</script>";
	}
	else
	{
		echo "<script>alert('Data Anggota Gagal Dihapus'); window.location.href = 'dasar.php?page=anggota';</script>";
	}
?>