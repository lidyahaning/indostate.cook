<?php
	session_start();
	require "conn.php";
	$username = $_SESSION['masuk'];
	$sql = mysql_query("SELECT * from anggota WHERE username = '$username'") or die(mysql_error());
	$row = mysql_fetch_array($sql);
	$id_anggota = $row['id_anggota'];
	
	if (isset($_POST['ubah']));
	{
		
		$foto_profil=isset($_FILES['foto_profil'] ['name']) ? $_FILES['foto_profil'] ['name'] : null; // Mendapatkan nama gambar
		$lokasi=isset($_FILES['foto_profil'] ['tmp_name']) ? $_FILES['foto_profil'] ['tmp_name'] : null;
		
		// Menyiapkan tempat nemapung gambar yang diupload
		$lokasitujuan="imgmember";
		// Menguplaod gambar kedalam folder ./img
		$upload=move_uploaded_file($lokasi,$lokasitujuan."/".$foto_profil);
					
		$nama = $_POST['nama'];
		$email = $_POST['email'];
		$tgl = $_POST['tgl'];
		$bulan = $_POST['bulan'];
		$tahun = $_POST['tahun'];
		$profesi = $_POST['profesi'];
		$bio = $_POST['bio'];						
		if(!empty($foto_profil)){
		$cek	= mysql_query("UPDATE anggota SET foto_profil='$foto_profil', nama='$nama', email='$email', tgl='$tgl', bulan='$bulan', tahun='$tahun', profesi='$profesi', bio='$bio' WHERE username='$username'") or die (mysql_error());
		}elseif(empty($foto_profil)){
		$cek	= mysql_query("UPDATE anggota SET nama='$nama', email='$email', tgl='$tgl', bulan='$bulan', tahun='$tahun', profesi='$profesi', bio='$bio' WHERE username='$username'") or die (mysql_error());
		}
		if($cek)
		{
			echo "<script>alert('Data Profil Berhasil Diubah');</script>";
		}
		else 
		{
			echo "<script>alert('Terjadi Kesalahan. Data Profil Tidak Berhasil Diubah');</script>";
		}
	}
?>
<script>window.location.href = "dasar.php?page=profil&id=<?php echo $id_anggota;?>";</script>