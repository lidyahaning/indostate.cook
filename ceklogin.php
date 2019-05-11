<?php
	require "conn.php";
	if (isset($_POST['masuk']))
	{
		$username = mysql_real_escape_string($_POST['user']);
		$password = mysql_real_escape_string($_POST['pass']);
		$sql_login= mysql_query ("select * from anggota where username='$username' and password=md5('$password')");
		$row = mysql_num_rows($sql_login);
		
		if ($row==1)
		{
			$_SESSION['masuk'] = $username;
			echo "<script language='JavaScript'>window.alert('Anda Telah Berhasil Masuk'); window.location.href='index.php' </script>";
		}
		else
		{
			echo "<script language='JavaScript'>window.alert('Terdapat Kesalahan Saat Masuk. Silahkan Coba Kembali'); window.location.href='dasar.php?page=login' </script>";
		}
		
	}
?>