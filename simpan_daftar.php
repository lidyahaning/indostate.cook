<?php
	session_start();
	require "conn.php";
	$cek=mysql_query("SELECT * from anggota order by id_anggota desc") or die(mysql_error());
	$row=mysql_fetch_array($cek);
	if (isset($_POST['daftar']))
	{
		$nama = $_POST['nama'];
		$username = $_POST['username'];
		$password = $_POST['pass'];
		$password2 = $_POST['pass2'];
		$email = $_POST['email'];
		$jkel = $_POST['jkel'];
		if($username == $row['username']) //mengecek username
		{
			echo "<script>alert('Username sudah dipakai. Silahkan menuliskan username yang berbeda'); window.location.href = 'dasar.php?page=signup'; </script>";
		}
		elseif ($password2 != $password) //ngecek password
		{
			echo "<script>alert('Password tidak sesuai'); window.location.href = 'dasar.php?page=signup'; </script>";
		}
		else
		{
			$sql_daftar = mysql_query("insert into anggota (nama,username,password,email,jkel) values ('$nama','$username',md5('$password'),'$email','$jkel')");
						
			if($sql_daftar)
			{
				$_SESSION['masuk'] = $username;
?>
				<script>alert("Pendaftaran anggota berhasil"); window.location.href = "index.php";</script>
<?php
			}
			else
			{
?>
				<script>alert("Terjadi Kesalahan. Pendaftaran anggota tidak berhasil"); window.location.href = "dasar.php?page=signup";</script>
<?php
			}
		}
	}
?>