<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Website Resep Masakan Indonesia">
    <meta name="author" content="Lidya Haning Iqrouri">
	<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
	<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
	<link rel="icon" href="img/icon.png">
	
    <title>Resep Masakan Indonesia</title>

    <!-- Bootstrap Core CSS -->
    <link href="template/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="template/css/resep.css" rel="stylesheet">
	
    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

</head>
<body>
<?php date_default_timezone_set('Asia/Jakarta'); 
session_start(); ?>
<nav>
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
		<ul class="nav navbar-nav">
			<li><a href="index.php" title="Beranda Website"> Beranda</a></li>
			<li><a href="dasar.php?page=cari" title="Pencarian Berdasarkan Kategori Resep">Kategori</a></li>
			<li><a href="dasar.php?page=forum" title="Forum Diskusi">Forum</a></li>
			<li class='dropdown'><a href='#' class='dropdown-toggle' data-toggle='dropdown' role='button' title='Informasi Lainnya'>Tentang
					<ul class='dropdown-menu' style='text-transform: none;'>
						<li><a href='dasar.php?page=hidtrad' title='Informasi Hidangan Tradisional'>Hidangan Tradisional</a></li>
						<li><a href='dasar.php?page=kuetrad' title='Informasi Kue Tradisional'>Kue Tradisional</a></li>
						<li><a href='dasar.php?page=aldapur' title='Informasi Alat Dapur Indonesia'>Alat Dapur</a></li>
						<li><a href='dasar.php?page=rempah' title='Informasi Jenis Rempah Indonesia'>Jenis Rempah</a></li>
						<li><a href='dasar.php?page=msehat' title='Informasi Tips Masak Sehat'>Tips Masak Sehat</a></li>
						<li><a href='dasar.php?page=ukur' title='Informasi Konversi Alat Ukur'>Konversi Alat Ukur</a></li>
					</ul>
			</li>
		</ul>
		<ul class="nav navbar-nav navbar-right">
			<?php
				if(!isset($_SESSION['masuk']))
				{
				echo "
				<li><a href='dasar.php?page=login_tambah' title='Melakukan Penambahan Resep'>Tambah Resep</a></li>
				<li><a href='dasar.php?page=signup' title='Mendaftar Sebagai Anggota'>Daftar</a></li>
				<li><a href='dasar.php?page=login' title='Masuk Sebagai Anggota'>Masuk</a></li>
				";
				}
				else
				{
				require "conn.php";
				$username = $_SESSION['masuk'];
				$sql = mysql_query("SELECT * from anggota WHERE username = '$username'") or die(mysql_error());
				$r=mysql_fetch_array($sql);
				$nama=$r['nama'];
				$id_anggota=$r['id_anggota'];
				echo "
				<li><a href='dasar.php?page=profil&id=$id_anggota' title='Profil Anda'><span class='glyphicon glyphicon-user'></span> ".$nama."</a></li>
				<li class='dropdown'><a href='#' class='dropdown-toggle' data-toggle='dropdown' role='button' title='Pilihan'><span class='glyphicon glyphicon-menu-hamburger'></span>
					<ul class='dropdown-menu' style='text-transform: none;'>
						<li><a href='dasar.php?page=tambah' title='Melakukan Penambahan Resep'>Tambah Resep</a></li>
						<li><a href='dasar.php?page=tambah_topik' title='Melakukan Penambahan Topik Diskusi'>Tambah Topik Diskusi</a></li>
						<li class='dropdown-header'>PENGATURAN</li>
						<li><a href='dasar.php?page=edit_profil' title='Mengubah Data Profil'>Ubah Profil</a></li>
						<li><a href='dasar.php?page=edit_user_pass' title='Mengubah Username & Password'>Ubah Username & Password</a></li>
						<li><a href='dasar.php?page=keluar' title='Keluar'>Keluar</a></li>
					</ul>
				</li>";
				}
			?>
			<li>
			<form method="post" name="cari" action="dasar.php?page=hasil2">
		<div class="form-group">
			<table border="0" align="right">
				<tr>
					<td width="200">
						<input class="form-control" name="nama" type="text" id="ajax" list="json-datalist" title="Pencarian Resep Masakan">
						<datalist id="json-datalist"></datalist>
					</td>
					<td width="30" align='right'>
						<button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></a></button>
					</td>
				</tr>
			</table>
		</div>
	</form>
		</li>
<script>
	// Get the <datalist> and <input> elements.
	var dataList = document.getElementById('json-datalist');
	var input = document.getElementById('ajax');
	
	// Create a new XMLHttpRequest.
	var request = new XMLHttpRequest();

	// Handle state changes for the request.
	request.onreadystatechange = function(response) {
	  if (request.readyState === 4) {
		if (request.status === 200) {
		  // Parse the JSON
		  var jsonOptions = JSON.parse(request.responseText);

		  // Loop over the JSON array.
		  jsonOptions.forEach(function(item) {
			// Create a new <option> element.
			var option = document.createElement('option');
			// Set the value using the item in the JSON array.
			option.value = JSON.stringify(item).replace(/["']/g, "");
			// Add the <option> element to the <datalist>.
			dataList.appendChild(option);
		  });

		  // Update the placeholder text.
		  input.placeholder = "Cari Resep Masakan";
		} else {
		  // An error occured :(
		  input.placeholder = "Couldn't load datalist options :(";
		}
	  }
	};

	// Update the placeholder text.
	input.placeholder = "Loading options...";

	// Set up and make the request.
	request.open('GET', 'elements.php', true);
	request.send();
</script>
			</ul>
		</ul>
    </div>
  </div>
</nav>

<script>
var x = document.getElementById("myDropnav");
function w3_open() {
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}
function w3_close() {
    x.className = x.className.replace(" w3-show", "");
}
// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}
</script>		
	<header>
		<center>
		<img src='img/logo2.png' width='500'>
		</center>
	</header>
    

	<?php
	$page = isset ($_GET['page']) ? $_GET['page'] :null;	/* gets the variable $page */
	if ($page) {
		include("$page.php");
	}
	?>
	

	
	<div class="footer">
		<p align="center"><font color="#fff">
			Indostate.Cook by Lidya Haning &#169; 2016
		</font></p>
	
	</div>
	</div>

	
	
    <!-- jQuery -->
	<script src="template/js/jquery.js"></script>
    <!--script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script-->

    <!-- Bootstrap Core JavaScript -->
    <script src="template/js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

<!------------ Menu Bar tetap -------------->	
	<script type='text/javascript'>
//<![CDATA[
$(document).ready(function() {
    var stickyNavTop = $('nav').offset().top;
    var stickyNav = function(){
        var scrollTop = $(window).scrollTop();
        if (scrollTop > stickyNavTop) {
            $('nav').css({ 'position': 'fixed', 'top':0, 'z-index':9999 }); //untuk tetap berada di atas meski di scroll
        } else {
            $('nav').css({ 'position': 'relative' }); //untuk berada di atas header dan tidak menutupi header
        }
    };
    stickyNav();
    $(window).scroll(function() {
        stickyNav();
    });
});
//]]>
</script>

<script>
$(document).ready(function(){
  $('.dropdown-submenu a.test').on("click", function(e){
    $(this).next('ul').toggle();
    e.stopPropagation();
    e.preventDefault();
  });
});
</script>
	
</body>

</html>
