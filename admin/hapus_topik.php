<?php
	require "conn.php";
	$id = $_GET['id'];
	$sql_delete = mysql_query("delete from topik where id_topik='$id'"); //topik
	$sql_delete1 = mysql_query("delete from komentar_topik where id_topik='$id'"); //komentar topik
	
	if ($sql_delete && $sql_delete1)
	{
		echo "
		<script>alert('Topik Diskusi Berhasil Dihapus'); window.location.href = 'dasar.php?page=topik';</script>";
	}
	else
	{
		echo "<script>alert('Topik Diskusi Gagal Dihapus'); window.location.href = 'dasar.php?page=topik';</script>";
	}
?>