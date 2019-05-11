<?php
	session_start();
	require "conn.php";
	$username = $_SESSION['masuk'];
	$sql = mysql_query("SELECT * from anggota WHERE username = '$username'") or die(mysql_error());
	$r=mysql_fetch_array($sql);
	$id_anggota=$r['id_anggota'];

	// get data that sent from form
	$judul=$_POST['judul'];
	$isi=$_POST['isi_artikel'];
	$tgl_topik=date('Y-m-d H:i'); //create date time
	
	$cektopik=mysql_query("SELECT * from topik where judul = '$judul'") or die(mysql_error());
	$row=mysql_fetch_array($cektopik);
	
	if(isset($row['judul'])) //mengecek judul topik
	{
		echo "<script>alert('Judul Topik yang Anda tulis sudah ada. Silahkan menuliskan judul Topik yang berbeda'); window.location.href = 'dasar.php?page=tambah_topik'; </script>";
	}
    elseif($isi == "") //isi topik tidak boleh kosong
	{
		echo "<script>alert('Isi Topik tidak boleh kosong'); window.location.href = 'dasar.php?page=tambah_topik'; </script>";
	}
	else
	{
		$sql="INSERT INTO topik(judul, isi, tgl_topik, id_anggota)VALUES('$judul','$isi', '$tgl_topik', '$id_anggota')";
		$result=mysql_query($sql);
		
		if($result)
		{
			echo "<script>alert('Topik Diskusi Berhasil Ditambahkan'); window.location.href = 'dasar.php?page=forum';</script>";
		}
		else 
		{
			echo "<script>alert('Topik Diskusi Gagal Ditambahkan, Silahkan Coba Kembali'); window.location.href = 'dasar.php?page=tambah_topik';</script>";
		}
	}
	mysql_close();
?>