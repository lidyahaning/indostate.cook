<?php
			require "conn.php";
			if(!isset($_SESSION['masuk']))
				{
					echo "<script>alert('Anda diharuskan masuk sebagai Anggota terlebih dahulu');window.location.href = 'dasar.php?page=login';</script>";
				}
				else 
				{
					$username = $_SESSION['masuk'];
					echo "<script>window.location.href = 'dasar.php?page=tambah';</script>";
				}
			
?>