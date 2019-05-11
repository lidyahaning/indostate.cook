<?php	
	session_start();
	session_destroy();
	echo "<script>alert('Anda Telah Berhasil Log Out'); window.location.href = 'index.php';</script>";
?>