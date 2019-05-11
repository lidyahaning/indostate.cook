<?php

include "conn.php";

$username = $_POST['username'];

function randomPassword()
{
// function untuk membuat password random 6 digit karakter

$digit = 6;
$karakter = "ABCDEFGHJKLMNPQRSTUVWXYZ23456789";

srand((double)microtime()*1000000);
$i = 0;
$pass = "";
while ($i <= $digit-1)
{
$num = rand() % 32;
$tmp = substr($karakter,$num,1);
$pass = $pass.$tmp;
$i++;
}
return $pass;
}

// membuat password baru secara random -> memanggil function randomPassword
$newPassword = randomPassword();

// mengenkripsi password dengan md5() dan pengacak
$newPasswordEnkrip = md5($newPassword);

// mencari alamat email si user
$query = "SELECT * FROM anggota WHERE username = '$username'";
$hasil = mysql_query($query);
$data  = mysql_fetch_array($hasil);
$alamatEmail = $data['email'];

// title atau subject email
$title  = "[IndoState.Cook] Password Baru";

// isi pesan email disertai password
$pesan  = "Username Anda : ".$username.". \nPassword Anda yang baru adalah ".$newPassword;

// header email berisi alamat pengirim
$header = "From: lidya.haning@gmail.com";

// mengirim email
$kirimEmail = @mail($alamatEmail, $title, $pesan, $header);

// cek status pengiriman email
if ($kirimEmail) {

    // update password baru ke database (jika pengiriman email sukses)
    $query = "UPDATE anggota SET password = '$newPasswordEnkrip' WHERE username = '$username'";
    $hasil = mysql_query($query);

    if ($hasil) echo "<br><center><b>Password baru anda telah diubah dan sudah dikirim ke email Anda</b></center><br><br>";
    }
else echo "<br><center><b>Pengiriman password baru ke email gagal</b></center><br><br>";

?>