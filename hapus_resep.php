<?php
	require "conn.php";
	$username = $_SESSION['masuk'];
	$sql = mysql_query("SELECT * from anggota WHERE username = '$username'") or die(mysql_error());
	$r=mysql_fetch_array($sql);
	$id_anggota=$r['id_anggota'];
	
	$id = $_GET['id'];
	$sql_delete = mysql_query("delete from resep where id_resep='$id'"); //resep
	$sql_delete1 = mysql_query("delete from bahan_resep where id_resep='$id'"); //bahan resep
	$sql_delete2 = mysql_query("delete from cara_resep where id_resep='$id'"); //cara resep
	$sql_delete3 = mysql_query("delete from saji_resep where id_resep='$id'"); //saji resep
	$sql_delete4 = mysql_query("delete from komentar_resep where id_resep='$id'"); //komentar resep
	
	if ($sql_delete && $sql_delete1 && $sql_delete2 && $sql_delete3 && $sql_delete4)
	{
		echo "
		<script>alert('Resep Berhasil Dihapus'); window.location.href = 'dasar.php?page=profil&id=".$id_anggota."';</script>";
	}
	else
	{
		echo "<script>alert('Resep Gagal Dihapus'); window.location.href = 'dasar.php?page=masakan&id=".$id."';</script>";
	}
?>