<?php
session_start();
	require "conn.php";
	$username = $_SESSION['masuk'];
	$sql = mysql_query("SELECT * from anggota WHERE username = '$username'") or die(mysql_error());
	$r=mysql_fetch_array($sql);
	if(isset($_GET['kd']))
	{
		$kd_turunan=$_GET['kd'];
	}
	else
	{
		$kd_turunan="";
	}
	$isi_komentar=$_POST["isi_komentar"];
	$id_topik=$_POST['id_topik'];
	$id_anggota=$r["id_anggota"];
	$tgl_komentar=date('Y-m-d H:i'); //create date time
 
//Menyimpan data
	$sql2 ="INSERT INTO komentar_topik (kd_turunan, isi_komentar, tgl_komentar, id_anggota, id_topik)VALUES('$kd_turunan', '$isi_komentar', '$tgl_komentar', '$id_anggota', '$id_topik')";
	$result=mysql_query($sql2) or die (mysql_error());			
	if($result){
		echo "<script>alert('Komentar Anda Berhasil Ditambahkan');</script>";
	}
	else {
		echo "<script>alert('Komentar Anda Gagal Ditambahkan, Silahkan Coba Kembali');</script>";
	}
 ?>
<script>window.location.href="dasar.php?page=topik&id=<?php echo $id_topik;?>"</script>