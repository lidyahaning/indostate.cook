<?php
	require "conn.php";
	$id = $_GET['id'];
	$sql_delete = mysql_query("delete from resep where id_resep='$id'"); //resep
	$sql_delete1 = mysql_query("delete from bahan_resep where id_resep='$id'"); //bahan resep
	$sql_delete2 = mysql_query("delete from cara_resep where id_resep='$id'"); //cara resep
	$sql_delete3 = mysql_query("delete from saji_resep where id_resep='$id'"); //saji resep
	$sql_delete4 = mysql_query("delete from komentar_resep where id_resep='$id'"); //komentar resep
	
	if ($sql_delete && $sql_delete1 && $sql_delete2 && $sql_delete3 && $sql_delete4)
	{
		echo "
		<script>alert('Resep Berhasil Dihapus'); window.location.href = 'dasar.php?page=resep';</script>";
	}
	else
	{
		echo "<script>alert('Resep Gagal Dihapus'); window.location.href = 'dasar.php?page=resep';</script>";
	}
?>