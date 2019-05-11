<?php
session_start();
					require "conn.php";
					$username = $_SESSION['admin'];
					$sql=mysql_query("SELECT * from admin WHERE username='$username'") or die (mysql_error());
					$row=mysql_fetch_array($sql);
					$user=$row['username'];
					
					if (isset($_POST['simpan']));
					{
						$username = $_POST['username'];
		$password = $_POST['pass'];
		$password2 = $_POST['pass2'];
	if ($password2 != $password) //ngecek password
		{
			echo "<script>alert('Password tidak sesuai'); window.location.href = 'dasar.php?page=edit_admin'; </script>";
		}
		else
		{
						
						$cek	= mysql_query("UPDATE admin SET username='$username', password=md5('$password') WHERE username='$user'") or die(mysql_error());

						if($cek)
						{
							$_SESSION['admin'] = $username;
?>
							<script>alert("Data Admin Berhasil Diubah"); window.location.href = "index.php";</script>
<?php
						}
						else 
						{
?>
							<script>alert("Terjadi Kesalahan. Data Admin Tidak Berhasil Diubah"); window.location.href = "dasar.php?page=edit_admin";</script>
<?php
						}
					}
					}
?>