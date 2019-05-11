<?php
	require "conn.php";
	$nama_resep=$_GET['nama_resep'];
	$jenis=$_GET['jenis'];
	$bahan=$_GET['bahan'];
	$asal=$_GET['asal'];

	$sql="SELECT * from resep WHERE nama_resep='$nama_resep' AND jenis='$jenis' AND bahan='$bahan' AND asal='$asal')";
	
	$r=mysql_query($sql);

	if($result){
		echo "<script>alert('Resep Anda Berhasil Ditambahkan'); window.location.href = 'dasae.php?page=masakan';</script>";
	}
	else {
		echo "<script>alert('Resep Anda Gagal Ditambahkan, Silahkan Coba Kembali'); window.location.href = 'dasar.php?page=#';</script>";
	}
	mysql_close();

		echo "<script>window.location.href = 'dasar.php?page=hasil';</script>";
?>