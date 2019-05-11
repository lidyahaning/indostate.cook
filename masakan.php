<?php
	require "conn.php";
	//manggil data resep
	$sql = mysql_query("SELECT * from resep WHERE id_resep = '{$_GET['id']}'") or die(mysql_error());
	$r=mysql_fetch_array($sql);
	//manggil data anggota
	$id_anggota = $r['id_anggota'];
	$sql2 = mysql_query("SELECT * from anggota WHERE id_anggota = '$id_anggota'") or die(mysql_error());
	$a=mysql_fetch_array($sql2);
	$username = $a['username'];
?>

<div class="container">
	<div class="content">
		<center>
			<h1><?=$r['nama_resep'];?></h1>
			<hr style="max-width:580px;">
		</center>
		<br>
		<div class="masakan">
			<div class="row">
			
<!-------------------------------------------- informasi resep ------------------------------------------------>
			<div class="col-sm-12">
					<font size="3">
					<table border="0" width="590" align="center">
						<tr>
					<?php
						require "conn.php";
						if(isset($_SESSION['masuk']))
						{
						if($_SESSION['masuk'] == $username) 
						{
							?>
							<td colspan='3' align='right'><a onclick="return confirm('Apakah Anda yakin akan menghapus resep ini?')" href='dasar.php?page=hapus_resep&id=<?=$r['id_resep'];?>'><span class='glyphicon glyphicon-remove'></span> Hapus</a></td>
							<?php
						}
						else
						{
							echo "<td colspan='2'></td>";
						}
						}
						?>
						<tr>
							<td align="center" width='100'>
								<a href="dasar.php?page=profil&id=<?=$id_anggota;?>">
								<?php
									if (!isset($a['foto_profil']))
									{
										echo "<img src='imgmember/profile_icon.png' style='width:70px; height:70px; border:2px solid #000;'></td>";
									}
									else
									{
										echo "<img src='imgmember/".$a['foto_profil']."' style='width:70px; height:70px; border-radius:50%; border:1px solid #990012;'></td>";
									}
								?>
								</a>
							</td>
							<td><b><a href="dasar.php?page=profil&id=<?=$id_anggota;?>"><?=$a['nama'];?></a></b></td>
							<td align="right"> <?=date("d/m/Y",strtotime($r['tgl_resep']))?></td>
						</tr>
					</table>
					</font>
					<br>
			</div>
			</div>
<!------------------------------------------ GAMBAR MASAKAN ------------------------------------------>
			<div class="row">
			<div class="col-sm-12">
				<center>
					<?php echo "<img src='imgresep/".$r['foto_resep']."'>"; ?>
				</center>
			</div>
			
<!-------------------------------------- deskripsi resep ------------------------------------------------------->
			<div class="row">
			
			<div class="col-sm-1">
			</div>
			
			<div class="col-sm-10">
				<div class="info">
				<br>
				<p align="center">"
				<?=$r['deskripsi'];?>
				"</p>
				</div>
			</div>
			</div>
			
<!-------------------------------------- KATEGORI ------------------------------------------------------->
			<div class="row">			
			<div class="col-sm-1">
			</div>
			<div class="col-sm-10">
				<h3>kategori masakan</h3>
				<table border="0">
					<tr>
						<td width="130"><b>Bahan Utama </td>
						<td>:</b></td>
						<td width="150px"><?=$r['bahan'];?></td>
						<td width="220px"></td>
						<td width="135"><b>Jenis Masakan </td>
						<td>:</b></td>
						<td><?=$r['jenis'];?></td>
					</tr>
					<tr>
						<td><b>Teknik Memasak</td>
						<td>:</b></td>
						<td><?=$r['cara'];?></td>
						<td></td>
						<td><b>Asal Masakan </td>
						<td>:</b></td>
						<td><?=$r['asal'];?></td>
					</tr>
				</table>
			</div>
			</div>
			
<!-------------------------------------- Bahan masakan, porsi, waktu ------------------------------------------------------->			
			<br>
			<div class="row">
			<div class="col-sm-1">
			</div>
			<div class="col-sm-8">
				<h3>Bahan Masakan</h3>
				<ul>
				<?php
					//ngambil data bahan-bahan resep
					$id_resep = $r['id_resep'];
					$sql_bahan = mysql_query("SELECT * FROM bahan_resep WHERE id_resep = '$id_resep'") or die(mysql_error());
					while ($bhn = mysql_fetch_array($sql_bahan)) 
					{
						echo "<li>".$bhn['bahan_resep']."</li>";
					}
				?>
				</ul>
			</div>
			<div class="col-sm-2">
				<h3><span class="glyphicon glyphicon-cutlery"></span> Porsi</h3>
				<?=$r['porsi'];?> Orang
				<h3><span class="glyphicon glyphicon-time"></span> Waktu</h3>
				<?=$r['waktu'];?>
			</div>
			</div>
			
<!-------------------------------------- Cara Masak ------------------------------------------------------->			
			<div class="row">
			<div class="col-sm-1">
			</div>
			<div class="col-sm-10">
				<h3>Cara memasak</h3>
				<ol>
				<?php
					//ngambil data cara memasak resep
					$sql_cara = mysql_query("SELECT * FROM cara_resep WHERE id_resep = '$id_resep'") or die(mysql_error());
					while ($cr = mysql_fetch_array($sql_cara)) 
					{
						echo "<li>".$cr['cara_resep']."</li>";
					}
				?>
				</ol>
			</div>
			</div>

<!-------------------------------------- Cara Saji ------------------------------------------------------->			
			<div class="row">
			<div class="col-sm-1">
			</div>
			
			<div class="col-sm-10">
				<?php
					//	ngambil data cara penyajian resep
					$sql_saji = mysql_query("SELECT * FROM saji_resep WHERE id_resep = '$id_resep'") or die(mysql_error());
					if(mysql_num_rows($sql_saji)>0){
						while ($sj = mysql_fetch_array($sql_saji)) {
							echo "<h3>Cara penyajian</h3>";
							echo "<ol>";
							echo "<li>".$sj['saji_resep']."</li>";			
						}
						echo "</ol>";
					}else{
						echo "";
					}
				?>
			</div>
			</div>
			
			<!-------------------------------------- Tips ------------------------------------------------------->			
			<div class="row">
			<div class="col-sm-1">
			</div>
			
			<div class="col-sm-10">
				<h3>Informasi tambahan</h3>
				<p align="justify">
					<?=$r['tips'];?>
				</p>
			</div>
			</div>
			
			<br><br>
			
			<!-------------------------------------- Resep Terkait ------------------------------------------------------->			
			<div class="row">
			<div class="col-sm-1">
			</div>
			
			<div class="col-sm-10">
			<div class="terkait">
				<div class="table-responsive">
				<table border='0' class="table">
					<tbody>
					<tr><td colspan='4'><h3>Resep Terkait</h3></td></tr>
					<tr>
					<?php
						require "conn.php";
						$nama_resep = $r['nama_resep'];
						$jenis = $r['jenis'];
						$bahan = $r['bahan'];
						$cara = $r['cara'];
						$asal = $r['asal'];
						$CurrentPostTitle = $nama_resep;
						$terkait = mysql_query ("SELECT * from resep WHERE 
						nama_resep LIKE '%$nama_resep%' AND jenis='$jenis' AND bahan='$bahan' AND cara='$cara' AND asal='$asal'
						OR nama_resep LIKE '%$nama_resep%' AND jenis='$jenis' AND bahan='$bahan' AND cara='$cara'
						OR nama_resep LIKE '%$nama_resep%' AND jenis='$jenis' AND bahan='$bahan' AND asal='$asal'
						OR nama_resep LIKE '%$nama_resep%' AND jenis='$jenis' AND cara='$cara' AND asal='$asal'
						OR nama_resep LIKE '%$nama_resep%' AND jenis='$jenis' AND cara='$cara'
						OR nama_resep LIKE '%$nama_resep%' AND jenis='$jenis' AND bahan='$bahan'
						OR nama_resep LIKE '%$nama_resep%' AND jenis='$jenis'
						OR nama_resep LIKE '%$nama_resep%' AND bahan='$bahan' 
						OR nama_resep LIKE '%$nama_resep%' 
						OR jenis='$jenis' AND bahan='$bahan' AND cara='$cara' AND asal='$asal'
						OR jenis='$jenis' AND bahan='$bahan' AND cara='$cara'
						OR jenis='$jenis' AND cara='$cara'
						OR bahan='$bahan' AND cara='$cara'
						OR bahan='$bahan' AND jenis='$jenis'
						OR bahan='$bahan'
						ORDER BY tgl_resep DESC limit 3") or die(mysql_error());
						while ($b=mysql_fetch_array($terkait) )
						{
							$id=$b['id_anggota'];
							$anggota = mysql_query("SELECT * from anggota WHERE id_anggota = '$id'") or die(mysql_error());
							$a=mysql_fetch_array($anggota);
							$id_resep = $b['id_resep'];
							$desc=$b['deskripsi'];
							
							if ($nama_resep != $b['nama_resep'])
							{
								echo "
								<td width='25%'>
								<br>
									<center><a href='dasar.php?page=masakan&id=".$id_resep."'><img src='imgresep/".$b['foto_resep']."'><br>
									<h4>".$b['nama_resep']."</h4><br></a></center>
									<center><table border='0' width='230'>
											<tr>
												<td width='25' align='center'>
													<a href='dasar.php?page=profil&id=".$id."'>";
														if (!isset($a['foto_profil']))
														{
															echo "<img src='imgmember/profile_icon.png' style='width:30px; height:30px; border-radius:50%; border:1px solid #990012;'></td>";
														}
														else
														{
															echo "<img src='imgmember/".$a['foto_profil']."' style='width:30px; height:30px; border-radius:50%; border:1px solid #990012;'></td>";
														}
													echo "
													</a>
												</td>
												<td align='center'><b><a href='dasar.php?page=profil&id=".$id."'>".$a['nama']."</a></b></td>
												<td width='50' align='center'>".date("d/m/Y",strtotime($b['tgl_resep']))."</td>
											</tr>
									</table></center>
									<br>
									"
									/*<p><font color='gray'>
										".$b['bahan'].", ".$b['jenis'].", ".$b['asal']."
									</font></p>*/
									."
									<p align='justify'>
										".substr($desc,0,120)." . . .
									</p>
								</td>
								";
							}		
						}
					?>
					</tr>
					</tbody>
				</table>
			</div>
			</div>
			</div>
			</div>
		</div>
	</div>
	
	<!------------------------------------------ KOMENTAR --------------------------------->
	<div class="col-sm-1">
	</div>

	<div class="col-sm-10">
		<div id="tampil_komentar">
			<?php
				include "tampil_komentar_resep.php";
			?>
		</div>
		<hr>
		<div id='komentar'>
			<?php
				$id_topik=$_GET['id'];
				if(!isset($_SESSION['masuk']))
				{
					echo "<font size='4'><center><b>Silahkan <a href='dasar.php?page=login'>Log In</a> terlebih dahulu jika ingin menambahkan komentar</b></center></font>
					<br><br>";
				}
				else 
				{
			?>
			<div class='col-sm-8'>
				<h3>Tulis Komentar Anda</h3>
				<form name='tambah_komentar_resep' method='post' action='dasar.php?page=tambah_komentar_resep&kd='>
				<div class='form-group'>
					<input class='form-control' name="id_resep" value="<?php echo $id_resep;?>" type='hidden'>
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
			?>
		</div>
		</div>
</div>
</div>