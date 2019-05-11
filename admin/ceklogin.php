<?php
	require "conn.php";
	if (isset($_POST['admin'])){
		$username = $_POST['user'];
		$password = $_POST['pass'];
		$sql_login= mysql_query ("select * from admin where username='$username' and password=md5('$password')");
		$row = mysql_num_rows($sql_login);
		$r=mysql_fetch_array($sql_login);
		
		if ($row==1)
		{
			$_SESSION['admin'] = $username;
			echo "<script language='JavaScript'>window.alert('Anda Telah Berhasil Masuk'); window.location.href='index.php' </script>";
		}
		else
		{
			echo "<script language='JavaScript'>window.alert('Terdapat Kesalahan Saat Masuk. Silahkan Coba Kembali'); window.location.href='index.php' </script>";
		}
		
	}
?>