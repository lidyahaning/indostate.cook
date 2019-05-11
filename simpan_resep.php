<?php
	session_start();
	require "conn.php";
	$username = $_SESSION['masuk'];
	$sql = mysql_query("SELECT * from anggota WHERE username = '$username'") or die(mysql_error());
	
	$r=mysql_fetch_array($sql);
	$id_anggota=$r['id_anggota'];
	// get data that sent from form
	$id_resep = date("YmdHis");
	$nama_resep=$_POST['nama_resep'];
	$deskripsi=$_POST['deskripsi'];
	$jenis=$_POST['jenis'];
	$bahan=$_POST['bahan'];
	$cara =$_POST['cara'];
	$asal=$_POST['asal'];
	$waktu=$_POST['waktu'];
	$porsi=$_POST['porsi'];
	$tips=$_POST['tips'];
	//---------- Foto
	$foto_resep=isset($_FILES['foto_resep'] ['name']) ? $_FILES['foto_resep'] ['name'] : null; // Mendapatkan nama gambar
	//lokasi foto
	$lokasi=isset($_FILES['foto_resep'] ['tmp_name']) ? $_FILES['foto_resep'] ['tmp_name'] : null;
	// Menyiapkan tempat nemapung gambar yang diupload
	$lokasitujuan="./imgresep";
	// Menguplaod gambar kedalam folder ./imgresep
	$upload=move_uploaded_file($lokasi,$lokasitujuan."/".$foto_resep);
	$tgl_resep=date('Y-m-d H:i'); //create date time
	
	$cekresep=mysql_query("SELECT * from resep where nama_resep = '$nama_resep'") or die(mysql_error());
	$row=mysql_fetch_array($cekresep);
	
	//---------- Bahan Resep
	for($n=1;$n<=30;$n++)
	 {
		if(isset($_POST["bahan$n"]))
		{
			$data[$n]=$_POST["bahan$n"];
		}
	};

	foreach($data as $j)
	{
		
		$sql2 = mysql_query("INSERT INTO bahan_resep VALUES ('$id_resep','". $j."')") or die(mysql_error());
	};
	
	//---------- Cara Resep
	for($n=1;$n<=30;$n++)
	 {
		if(isset($_POST["cara$n"]))
		{
			$data2[$n]=$_POST["cara$n"];
		}
	};

	foreach($data2 as $k)
	{
		
		$sql3= mysql_query("INSERT INTO cara_resep VALUES ('$id_resep','". $k."')") or die(mysql_error());
	};
	
	//---------- Penyajian Resep
	for($n=1;$n<=30;$n++)
	 {
		if(isset($_POST["saji$n"]))
		{
			$data3[$n]=$_POST["saji$n"];
		}
	};

	foreach($data3 as $l)
	{
		
		$sql4 = mysql_query("INSERT INTO saji_resep VALUES ('$id_resep','". $l."')") or die(mysql_error());
	};
	
	if(isset($row['nama_resep'])) //mengecek nama resep
	{
		echo "<script>alert('Resep yang Anda tulis sudah ada. Silahkan menuliskan resep yang berbeda'); window.location.href = 'dasar.php?page=tambah'; </script>";
	}
	else
	{
		$sql1=mysql_query("INSERT INTO resep VALUES('$id_resep', '$nama_resep', '$deskripsi', '$jenis', '$bahan', '$cara', '$asal', '$waktu', '$porsi', '$tips', '$foto_resep', '$tgl_resep', '$id_anggota')") or die(mysql_error());
		

		if($sql1 && $sql2 && $sql3 && $sql4){
			echo "<script>alert('Resep Anda Berhasil Ditambahkan'); window.location.href = 'dasar.php?page=profil&id=".$id_anggota."';</script>";
		}
		else {
			echo "<script>alert('Resep Anda Gagal Ditambahkan, Silahkan Coba Kembali'); window.location.href = 'dasar.php?page=tambah'; </script>";
		}
	}
	mysql_close();
?>