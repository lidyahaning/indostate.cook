<div id="komentar">
 
<?php
		$id_topik=$_GET['id'];
		require "conn.php";
		$commentquery = mysql_query("SELECT * FROM komentar_topik WHERE id_topik='$id_topik' ORDER BY tgl_komentar ASC") or die(mysql_error());
		$commentNum = mysql_num_rows($commentquery);
		echo "<h3>" . $commentNum . " Komentar" . "</h3>";
		echo "<hr><hr>";
		$kode="";
 
		while($row = mysql_fetch_array($commentquery))
		{
			//ngambil nama anggota yang komentar
			$id_anggota=$row['id_anggota'];
			$sql= mysql_query("SELECT * from anggota WHERE id_anggota = '$id_anggota'") or die(mysql_error());
			$r=mysql_fetch_array($sql);
			if (!isset($r['foto_profil']))
			{
				$foto_profil="profile_icon.png";
			}
			else
			{
				$foto_profil=$r['foto_profil'];
			}
			//menampilkan komentar
			//--------------
			if($row['kd_turunan'] == "0")
			{
			//-------------
			echo "
			<b><a href='dasar.php?page=profil&id=".$id_anggota."'><img src='imgmember/".$foto_profil."' style='width:30px; height:30px; border-radius:50%; border:1px solid #990012;'> " . $r['nama'] . "</a></b>" . " " . " | " . " " . "<i>" . date("d/m/Y H:i",strtotime($row['tgl_komentar'])) . "</i> <br><br>". $row['isi_komentar'] ;
			if(isset($_SESSION['masuk']))
			{
				if(isset($_SESSION['masuk'])) 
				{
					echo "<p align='right'><button id='tes".$row['kd_komentar']."'>balas</button></p>";
			?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type='text/javascript'>
$(document).ready(function(){
var kode = "<?php echo $row['kd_komentar'];?>";
    $("#tes" + kode).click(function(){
        $("#balas"+ kode).toggle(1000);
    });
});
</script>
				<div id="balas<?php echo $row['kd_komentar'];?>" style="display:none;">
					<form name="tambah_komentar_topik" method='post' action="dasar.php?page=tambah_komentar_topik&kd=<?=$row['kd_komentar']?>">
						<h3>Tulis Balasan Anda</h3>
						<div class='form-group'>
							<input class='form-control' name="id_topik" value="<?php echo $id_topik;?>" type='hidden'>
						</div>
						<div class='form-group'>
							<label for='isi_komentar'>Komentar :</label>
							<textarea class='form-control' name="isi_komentar" rows='5' required></textarea>
						</div>
						<div class='form-group'>
							<button class='btn btn-primary' name='tombol' value='Kirim' type='submit'>Kirim</button>
							<button type='reset' class='btn btn-danger' name='batal'>Batal</button>
						</div>
					</form>
				</div>
			<?php
				}
			}
			$kode = $row['kd_komentar'];
			echo "<hr>";
			
			//-----------------------------------
			?>
			<style="padding-left:400px;">
			<?php
			$commentquery2 = mysql_query("SELECT * FROM komentar_topik WHERE kd_turunan='$kode' ORDER BY tgl_komentar ASC") or die(mysql_error());
			while($row2 = mysql_fetch_array($commentquery2))
			{
			?>
				<img src='img/reply.png' width='20px' height='20px'>
			<?php
			//ngambil nama anggota yang komentar
			$id_anggota=$row2['id_anggota'];
			$sql2= mysql_query("SELECT * from anggota WHERE id_anggota = '$id_anggota'") or die(mysql_error());
			$r2=mysql_fetch_array($sql2);
			if (!isset($r2['foto_profil']))
			{
				$foto_profil="profile_icon.png";
			}
			else
			{
				$foto_profil=$r2['foto_profil'];
			}
			//menampilkan komentar
			echo "
			<b><a href='dasar.php?page=profil&id=".$id_anggota."'><img src='imgmember/".$foto_profil."' style='width:30px; height:30px; border-radius:50%; border:1px solid #990012;'> " . $r2['nama'] . "</a></b>" . " " . " | " . " " . "<i>" . date("d/m/Y H:i",strtotime($row2['tgl_komentar'])) . "</i> <br><br>". $row2['isi_komentar'] ;
			if(isset($_SESSION['masuk']))
			{
				if(isset($_SESSION['masuk']))
				{
					echo "<p align='right'><button id='tes".$row2['kd_komentar']."'>balas</button></p>";
			?>
<script type='text/javascript'>
$(document).ready(function(){
var kode = "<?php echo $row2['kd_komentar'];?>";
    $("#tes" + kode).click(function(){
        $("#balas"+ kode).toggle(1000);
    });
});
</script>
				<div id="balas<?php echo $row2['kd_komentar'];?>" style="display:none;">
					<form name="tambah_komentar_topik" method='post' action="dasar.php?page=tambah_komentar_topik&kd=<?=$row2['kd_komentar']?>">
						<h3>Tulis Balasan Anda</h3>
						<div class='form-group'>
							<input class='form-control' name="id_topik" value="<?php echo $id_topik;?>" type='hidden'>
						</div>
						<div class='form-group'>
							<label for='isi_komentar'>Komentar :</label>
							<textarea class='form-control' name="isi_komentar" rows='5' required></textarea>
						</div>
						<div class='form-group'>
							<button class='btn btn-primary' name='tombol' value='Kirim' type='submit'>Kirim</button>
							<button type='reset' class='btn btn-danger' name='batal'>Batal</button>
						</div>
					</form>
				</div>
			<?php
				}
			}
			$kode = $row2['kd_komentar'];
			echo "<hr>";
			
			//-----------------------------------
			?>
			<style="padding-left:400px;">
			<?php
			$commentquery3 = mysql_query("SELECT * FROM komentar_topik WHERE kd_turunan='$kode' ORDER BY tgl_komentar ASC") or die(mysql_error());
			while($row3 = mysql_fetch_array($commentquery3))
			{
			?>
				<img src='img/reply.png' width='20px' height='20px'>
			<?php
			//ngambil nama anggota yang komentar
			$id_anggota=$row3['id_anggota'];
			$sql3= mysql_query("SELECT * from anggota WHERE id_anggota = '$id_anggota'") or die(mysql_error());
			$r3=mysql_fetch_array($sql3);
			if (!isset($r3['foto_profil']))
			{
				$foto_profil="profile_icon.png";
			}
			else
			{
				$foto_profil=$r3['foto_profil'];
			}
			//menampilkan komentar
			echo "
			<b><a href='dasar.php?page=profil&id=".$id_anggota."'><img src='imgmember/".$foto_profil."' style='width:30px; height:30px; border-radius:50%; border:1px solid #990012;'> " . $r3['nama'] . "</a></b>" . " " . " | " . " " . "<i>" . date("d/m/Y H:i",strtotime($row3['tgl_komentar'])) . "</i> <br><br>". $row3['isi_komentar'] ;
			if(isset($_SESSION['masuk']))
			{
				if(isset($_SESSION['masuk']))
				{
					echo "<p align='right'><button id='tes".$row3['kd_komentar']."'>balas</button></p>";
			?>
<script type='text/javascript'>
$(document).ready(function(){
var kode = "<?php echo $row3['kd_komentar'];?>";
    $("#tes" + kode).click(function(){
        $("#balas"+ kode).toggle(1000);
    });
});
</script>
				<div id="balas<?php echo $row3['kd_komentar'];?>" style="display:none;">
					<form name="tambah_komentar_topik" method='post' action="dasar.php?page=tambah_komentar_topik&kd=<?=$row3['kd_komentar']?>">
						<h3>Tulis Balasan Anda</h3>
						<div class='form-group'>
							<input class='form-control' name="id_topik" value="<?php echo $id_topik;?>" type='hidden'>
						</div>
						<div class='form-group'>
							<label for='isi_komentar'>Komentar :</label>
							<textarea class='form-control' name="isi_komentar" rows='5' required></textarea>
						</div>
						<div class='form-group'>
							<button class='btn btn-primary' name='tombol' value='Kirim' type='submit'>Kirim</button>
							<button type='reset' class='btn btn-danger' name='batal'>Batal</button>
						</div>
					</form>
				</div>
			<?php
				}
			}
			$kode = $row3['kd_komentar'];
			echo "<hr>";
			
			//-----------------------------------
			?>
			<style="padding-left:400px;">
			<?php
			$commentquery4 = mysql_query("SELECT * FROM komentar_topik WHERE kd_turunan='$kode' ORDER BY tgl_komentar ASC") or die(mysql_error());
			while($row4 = mysql_fetch_array($commentquery4))
			{
			?>
				<img src='img/reply.png' width='20px' height='20px'>
			<?php
			//ngambil nama anggota yang komentar
			$id_anggota=$row4['id_anggota'];
			$sql4= mysql_query("SELECT * from anggota WHERE id_anggota = '$id_anggota'") or die(mysql_error());
			$r4=mysql_fetch_array($sql4);
			if (!isset($r4['foto_profil']))
			{
				$foto_profil="profile_icon.png";
			}
			else
			{
				$foto_profil=$r4['foto_profil'];
			}
			//menampilkan komentar
			echo "
			<b><a href='dasar.php?page=profil&id=".$id_anggota."'><img src='imgmember/".$foto_profil."' style='width:30px; height:30px; border-radius:50%; border:1px solid #990012;'> " . $r4['nama'] . "</a></b>" . " " . " | " . " " . "<i>" . date("d/m/Y H:i",strtotime($row4['tgl_komentar'])) . "</i> <br><br>". $row4['isi_komentar'] ;
			if(isset($_SESSION['masuk']))
			{
				if(isset($_SESSION['masuk']))
				{
					echo "<p align='right'><button id='tes".$row4['kd_komentar']."'>balas</button></p>";
			?>
<script type='text/javascript'>
$(document).ready(function(){
var kode = "<?php echo $row4['kd_komentar'];?>";
    $("#tes" + kode).click(function(){
        $("#balas"+ kode).toggle(1000);
    });
});
</script>
				<div id="balas<?php echo $row4['kd_komentar'];?>" style="display:none;">
					<form name="tambah_komentar_topik" method='post' action="dasar.php?page=tambah_komentar_topik&kd=<?=$row3['kd_komentar']?>">
						<h3>Tulis Balasan Anda</h3>
						<div class='form-group'>
							<input class='form-control' name="id_topik" value="<?php echo $id_topik;?>" type='hidden'>
						</div>
						<div class='form-group'>
							<label for='isi_komentar'>Komentar :</label>
							<textarea class='form-control' name="isi_komentar" rows='5' required></textarea>
						</div>
						<div class='form-group'>
							<button class='btn btn-primary' name='tombol' value='Kirim' type='submit'>Kirim</button>
							<button type='reset' class='btn btn-danger' name='batal'>Batal</button>
						</div>
					</form>
				</div>
			<?php
				}
			}
			$kode = $row3['kd_komentar'];
			echo "<hr>";
			}}
			}
			?></style><?php
		}
		}
?>
</div>