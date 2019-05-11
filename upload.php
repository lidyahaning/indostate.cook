<?php
// Load file koneksi.php
require "conn.php";
$username = $_SESSION['masuk'];

// Ambil Data yang Dikirim dari Form
$nama_file = $_FILES['foto']['name'];
$ukuran_file = $_FILES['foto']['size'];
$tipe_file = $_FILES['foto']['type'];
$tmp_file = $_FILES['foto']['tmp_name'];
 
// Set path folder tempat menyimpan gambarnya
$path = "img/".$nama_file;
 
if($tipe_file == "image/jpeg" || $tipe_file == "image/png"){ // Cek apakah tipe file yang diupload adalah JPG / JPEG / PNG
    // Jika tipe file yang diupload JPG / JPEG / PNG, lakukan :
    if($ukuran_file <= 1000000){ // Cek apakah ukuran file yang diupload kurang dari sama dengan 1MB
        // Jika ukuran file kurang dari sama dengan 1MB, lakukan :
        // Proses upload
        if(move_uploaded_file($tmp_file, $path)){ // Cek apakah gambar berhasil diupload atau tidak
            // Jika gambar berhasil diupload, Lakukan : 
            // Proses simpan ke Database
            $query = "UPDATE anggota SET foto_profil='$nama_file' WHERE username='$username'";
            $sql = mysql_query($conn, $query); // Eksekusi/ Jalankan query dari variabel $query
             
            if($sql){ // Cek jika proses simpan ke database sukses atau tidak
                // Jika Sukses, Lakukan :
                // ------------------------- header("location: index.php"); // Redirectke halaman index.php
            }else{
                // Jika Gagal, Lakukan :
                echo "<script>alert('Terjadi Kesalahan. Data Profil Tidak Berhasil Diubah'); window.location.href = 'index.php?page=profil';</script>";
            }
        }else{
            // Jika gambar gagal diupload, Lakukan :
            echo "<script>alert('<b>Data Profil Tidak Berhasil Diubah.</b> <br>Terjadi Kesalahan Upload.'); window.location.href = 'index.php?page=profil';</script>";
        }
    }else{
        // Jika ukuran file lebih dari 1MB, lakukan :
        echo "<script>alert('<b>Data Profil Tidak Berhasil Diubah.</b> <br>Terjadi Kesalahan Upload. Ukuran Gambar yang Diupload Tidak Boleh Lebih dari 1MB. '); window.location.href = 'index.php?page=profil';</script>";
    }
}else{
    // Jika tipe file yang diupload bukan JPG / JPEG / PNG, lakukan :
    echo "<script>alert('<b>Data Profil Tidak Berhasil Diubah.</b> <br>Terjadi Kesalahan Upload. Tipe Gambar yang Diupload Harus JPG / JPEG / PNG. '); window.location.href = 'index.php?page=profil';</script>";;
}
?>