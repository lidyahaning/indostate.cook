<?php
	session_start();
	require "conn.php";
	$username = $_SESSION['masuk'];
	$sql=mysql_query("SELECT * from anggota WHERE username='$username'") or die (mysql_error());
	$row=mysql_fetch_array($sql);
	$id=$row['id_anggota'];	
	
	
	if (isset($_POST['simpan']));
	{
	$username = $_POST['username'];
		$password = $_POST['pass'];
		$password2 = $_POST['pass2'];
	if ($password2 != $password) //ngecek password
		{
			echo "<script>alert('Password tidak sesuai'); window.location.href = 'dasar.php?page=edit_user_pass'; </script>";
		}
		else
		{
		
		
		$cek	= mysql_query("UPDATE anggota SET username='$username', password=md5('$password') WHERE id_anggota='$id'");
		if($cek)
		{
			$_SESSION['masuk'] = $username;
			echo "<script>alert('Data Profil Berhasil Diubah');</script>";
		}
		else 
		{
			echo "<script>alert('Terjadi Kesalahan. Data Profil Tidak Berhasil Diubah');</script>";
		}
	}
	}
?>
<script>window.location.href = "dasar.php?page=profil&id=<?php echo $id;?>";</script>