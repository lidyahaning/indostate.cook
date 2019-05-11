<div class="container">
		<div class="content">
			<div class="kategori">
				<center><h1>hasil pencarian</h1>
				<hr style="max-width:580px;"></center>
					<ul>
						<?php
							require "conn.php";					
							//ngambil data jenis masakan yg diinput
							if(isset($_POST['cara']))
							{
								$_SESSION['cara']=$_POST['cara'];
								//makanan pembuka
								if($_POST['cara'] == "Makanan Pembuka,Tepung,Goreng"){
									$jenis = "Makanan Pembuka";
									$bahan = "Tepung";
									$cara = "Goreng";
									$_SESSION['jenis']= $jenis;
									$_SESSION['bahan']= $bahan;
									$_SESSION['cara']= $cara;
								}
								elseif($_POST['cara'] == "Makanan Pembuka,Tepung,Kukus"){
									$jenis = "Makanan Pembuka";
									$bahan = "Tepung";
									$cara = "Kukus";
									$_SESSION['jenis']= $jenis;
									$_SESSION['bahan']= $bahan;
									$_SESSION['cara']= $cara;
								}
								elseif($_POST['cara'] == "Makanan Pembuka,Tepung,Rebus"){
									$jenis = "Makanan Pembuka";
									$bahan = "Tepung";
									$cara = "Rebus";
									$_SESSION['jenis']= $jenis;
									$_SESSION['bahan']= $bahan;
									$_SESSION['cara']= $cara;
								}
								elseif($_POST['cara'] == "Makanan Pembuka,Umbi-umbian,Goreng"){
									$jenis = "Makanan Pembuka";
									$bahan = "Tepung";
									$cara = "Goreng";
									$_SESSION['jenis']= $jenis;
									$_SESSION['bahan']= $bahan;
									$_SESSION['cara']= $cara;
								}
								elseif($_POST['cara'] == "Makanan Pembuka,Umbi-umbian,Kukus"){
									$jenis = "Makanan Pembuka";
									$bahan = "Umbi-umbian";
									$cara = "Kukus";
									$_SESSION['jenis']= $jenis;
									$_SESSION['bahan']= $bahan;
									$_SESSION['cara']= $cara;
								}
								elseif($_POST['cara'] == "Makanan Pembuka,Umbi-umbian,Rebus"){
									$jenis = "Makanan Pembuka";
									$bahan = "Umbi-umbian";
									$cara = "Rebus";
									$_SESSION['jenis']= $jenis;
									$_SESSION['bahan']= $bahan;
									$_SESSION['cara']= $cara;
								}
								//makanana utama
								elseif($_POST['cara'] == "Makanan Utama,Ayam,Bakar/Panggang"){
									$jenis = "Makanan Utama";
									$bahan = "Ayam";
									$cara = "Bakar/Panggang";
									$_SESSION['jenis']= $jenis;
									$_SESSION['bahan']= $bahan;
									$_SESSION['cara']= $cara;
								}
								elseif($_POST['cara'] == "Makanan Utama,Ayam,Goreng"){
									$jenis = "Makanan Utama";
									$bahan = "Ayam";
									$cara = "Goreng";
									$_SESSION['jenis']= $jenis;
									$_SESSION['bahan']= $bahan;
									$_SESSION['cara']= $cara;
								}
								elseif($_POST['cara'] == "Makanan Utama,Ayam,Rebus"){
									$jenis = "Makanan Utama";
									$bahan = "Ayam";
									$cara = "Rebus";
									$_SESSION['jenis']= $jenis;
									$_SESSION['bahan']= $bahan;
									$_SESSION['cara']= $cara;
								}
								elseif($_POST['cara'] == "Makanan Utama,Ayam,Tumis"){
									$jenis = "Makanan Utama";
									$bahan = "Ayam";
									$cara = "Tumis";
									$_SESSION['jenis']= $jenis;
									$_SESSION['bahan']= $bahan;
									$_SESSION['cara']= $cara;
								}
								elseif($_POST['cara'] == "Makanan Utama,Daging,Bakar/Panggang"){
									$jenis = "Makanan Utama";
									$bahan = "Daging";
									$cara = "Bakar/Panggang";
									$_SESSION['jenis']= $jenis;
									$_SESSION['bahan']= $bahan;
									$_SESSION['cara']= $cara;
								}
								elseif($_POST['cara'] == "Makanan Utama,Daging,Goreng"){
									$jenis = "Makanan Utama";
									$bahan = "Daging";
									$cara = "Goreng";
									$_SESSION['jenis']= $jenis;
									$_SESSION['bahan']= $bahan;
									$_SESSION['cara']= $cara;
								}
								elseif($_POST['cara'] == "Makanan Utama,Daging,Rebus"){
									$jenis = "Makanan Utama";
									$bahan = "Daging";
									$cara = "Rebus";
									$_SESSION['jenis']= $jenis;
									$_SESSION['bahan']= $bahan;
									$_SESSION['cara']= $cara;
								}
								elseif($_POST['cara'] == "Makanan Utama,Daging,Tumis"){
									$jenis = "Makanan Utama";
									$bahan = "Daging";
									$cara = "Tumis";
									$_SESSION['jenis']= $jenis;
									$_SESSION['bahan']= $bahan;
									$_SESSION['cara']= $cara;
								}
								elseif($_POST['cara'] == "Makanan Utama,Ikan,Bakar/Panggang"){
									$jenis = "Makanan Utama";
									$bahan = "Ikan";
									$cara = "Bakar/Panggang";
									$_SESSION['jenis']= $jenis;
									$_SESSION['bahan']= $bahan;
									$_SESSION['cara']= $cara;
								}
								elseif($_POST['cara'] == "Makanan Utama,Ikan,Goreng"){
									$jenis = "Makanan Utama";
									$bahan = "Ikan";
									$cara = "Goreng";
									$_SESSION['jenis']= $jenis;
									$_SESSION['bahan']= $bahan;
									$_SESSION['cara']= $cara;
								}
								elseif($_POST['cara'] == "Makanan Utama,Ikan,Rebus"){
									$jenis = "Makanan Utama";
									$bahan = "Ikan";
									$cara = "Rebus";
									$_SESSION['jenis']= $jenis;
									$_SESSION['bahan']= $bahan;
									$_SESSION['cara']= $cara;
								}
								elseif($_POST['cara'] == "Makanan Utama,Ikan,Tumis"){
									$jenis = "Makanan Utama";
									$bahan = "Ikan";
									$cara = "Tumis";
									$_SESSION['jenis']= $jenis;
									$_SESSION['bahan']= $bahan;
									$_SESSION['cara']= $cara;
								}
								elseif($_POST['cara'] == "Makanan Utama,Mie,Goreng"){
									$jenis = "Makanan Utama";
									$bahan = "Mie";
									$cara = "Goreng";
									$_SESSION['jenis']= $jenis;
									$_SESSION['bahan']= $bahan;
									$_SESSION['cara']= $cara;
								}
								elseif($_POST['cara'] == "Makanan Utama,Mie,Rebus"){
									$jenis = "Makanan Utama";
									$bahan = "Mie";
									$cara = "Rebus";
									$_SESSION['jenis']= $jenis;
									$_SESSION['bahan']= $bahan;
									$_SESSION['cara']= $cara;
								}
								elseif($_POST['cara'] == "Makanan Utama,Mie,Tumis"){
									$jenis = "Makanan Utama";
									$bahan = "Mie";
									$cara = "Tumis";
									$_SESSION['jenis']= $jenis;
									$_SESSION['bahan']= $bahan;
									$_SESSION['cara']= $cara;
								}
								elseif($_POST['cara'] == "Makanan Utama,Nasi,Bakar/Panggang"){
									$jenis = "Makanan Utama";
									$bahan = "Nasi";
									$cara = "Bakar/Panggang";
									$_SESSION['jenis']= $jenis;
									$_SESSION['bahan']= $bahan;
									$_SESSION['cara']= $cara;
								}
								elseif($_POST['cara'] == "Makanan Utama,Nasi,Goreng"){
									$jenis = "Makanan Utama";
									$bahan = "Nasi";
									$cara = "Goreng";
									$_SESSION['jenis']= $jenis;
									$_SESSION['bahan']= $bahan;
									$_SESSION['cara']= $cara;
								}
								elseif($_POST['cara'] == "Makanan Utama,Nasi,Kukus"){
									$jenis = "Makanan Utama";
									$bahan = "Nasi";
									$cara = "Kukus";
									$_SESSION['jenis']= $jenis;
									$_SESSION['bahan']= $bahan;
									$_SESSION['cara']= $cara;
								}
								elseif($_POST['cara'] == "Makanan Utama,Nasi,Rebus"){
									$jenis = "Makanan Utama";
									$bahan = "Nasi";
									$cara = "Rebus";
									$_SESSION['jenis']= $jenis;
									$_SESSION['bahan']= $bahan;
									$_SESSION['cara']= $cara;
								}
								elseif($_POST['cara'] == "Makanan Utama,Sayuran,Kukus"){
									$jenis = "Makanan Utama";
									$bahan = "Sayuran";
									$cara = "Kukus";
									$_SESSION['jenis']= $jenis;
									$_SESSION['bahan']= $bahan;
									$_SESSION['cara']= $cara;
								}
								elseif($_POST['cara'] == "Makanan Utama,Sayuran,Rebus"){
									$jenis = "Makanan Utama";
									$bahan = "Sayuran";
									$cara = "Rebus";
									$_SESSION['jenis']= $jenis;
									$_SESSION['bahan']= $bahan;
									$_SESSION['cara']= $cara;
								}
								elseif($_POST['cara'] == "Makanan Utama,Sayuran,Tumis"){
									$jenis = "Makanan Utama";
									$bahan = "Sayuran";
									$cara = "Tumis";
									$_SESSION['jenis']= $jenis;
									$_SESSION['bahan']= $bahan;
									$_SESSION['cara']= $cara;
								}
								//makanan penutup
								elseif($_POST['cara'] == "Makanan Penutup,Sayuran,Kukus"){
									$jenis = "Makanan Penutup";
									$bahan = "Sayuran";
									$cara = "Kukus";
									$_SESSION['jenis']= $jenis;
									$_SESSION['bahan']= $bahan;
									$_SESSION['cara']= $cara;
								}
								elseif($_POST['cara'] == "Makanan Penutup,Tepung,Bakar/Panggang"){
									$jenis = "Makanan Penutup";
									$bahan = "Tepung";
									$cara = "Bakar/Panggang";
									$_SESSION['jenis']= $jenis;
									$_SESSION['bahan']= $bahan;
									$_SESSION['cara']= $cara;
								}
								elseif($_POST['cara'] == "Makanan Penutup,Tepung,Kukus"){
									$jenis = "Makanan Penutup";
									$bahan = "Tepung";
									$cara = "Kukus";
									$_SESSION['jenis']= $jenis;
									$_SESSION['bahan']= $bahan;
									$_SESSION['cara']= $cara;
								}
								elseif($_POST['cara'] == "Makanan Penutup,Tepung,Rebus"){
									$jenis = "Makanan Penutup";
									$bahan = "Tepung";
									$cara = "Rebus";
									$_SESSION['jenis']= $jenis;
									$_SESSION['bahan']= $bahan;
									$_SESSION['cara']= $cara;
								}
								elseif($_POST['cara'] == "Makanan Penutup,Umbi-umbian,Bakar/Panggang"){
									$jenis = "Makanan Penutup";
									$bahan = "Umbi-umbian";
									$cara = "Bakar/Panggang";
									$_SESSION['jenis']= $jenis;
									$_SESSION['bahan']= $bahan;
									$_SESSION['cara']= $cara;
								}
								elseif($_POST['cara'] == "Makanan Penutup,Umbi-umbian,Kukus"){
									$jenis = "Makanan Penutup";
									$bahan = "Umbi-umbian";
									$cara = "Kukus";
									$_SESSION['jenis']= $jenis;
									$_SESSION['bahan']= $bahan;
									$_SESSION['cara']= $cara;
								}
								elseif($_POST['cara'] == "Makanan Penutup,Umbi-umbian,Rebus"){
									$jenis = "Makanan Penutup";
									$bahan = "Umbi-umbian";
									$cara = "Rebus";
									$_SESSION['jenis']= $jenis;
									$_SESSION['bahan']= $bahan;
									$_SESSION['cara']= $cara;
								}
								elseif($_POST['cara'] == "Minuman"){
									$jenis = "Minuman";
									$bahan = "";
									$cara = "";
									$_SESSION['jenis']= $jenis;
									$_SESSION['bahan']= $bahan;
									$_SESSION['cara']= $cara;
								}
								elseif($_POST['cara'] == "Sambal"){
									$jenis = "Sambal";
									$bahan = "";
									$cara = "";
									$_SESSION['jenis']= $jenis;
									$_SESSION['bahan']= $bahan;
									$_SESSION['cara']= $cara;
								}
							}
							else
							{
								$jenis = $_SESSION['jenis'];
								$bahan = $_SESSION['bahan'];
								$cara = $_SESSION['cara'];
							}
							
							//ngambil data asal masakan yg diinput
							if(isset($_POST['asal']))
							{
								$_SESSION['asal']=$_POST['asal'];
								$asal = $_SESSION['asal'];
							}
							else
							{
								$asal = $_SESSION['asal'];
							}
							
							$no=1;
							$batas=24; //satu halaman menampilkan 24 resep
							$halaman=isset($_GET['halaman']) ? $_GET['halaman'] : null;
							$posisi=null;
							if(empty($halaman)){
							  $posisi=0;
							  $halaman=1;
							}else{
							  $posisi=($halaman-1)* $batas;
							}
							
							//3). melakukan query dan menampilkan data
							//query data menggunakan limit $posisi dan batas
							$sql_tampil=mysql_query("SELECT * from resep WHERE jenis LIKE '%$jenis%' AND bahan LIKE '%$bahan%' AND cara LIKE '%$cara%' AND asal LIKE '%$asal%' limit $posisi,$batas") or die(mysql_error());	
							while($rows=mysql_fetch_array($sql_tampil)){
							$id_anggota=$rows['id_anggota'];
							$desc=$rows['deskripsi'];
							$sql = mysql_query("SELECT * from anggota WHERE id_anggota = '$id_anggota'") or die(mysql_error());
							$r=mysql_fetch_array($sql);
						?>
						<li>
							<div class='panel panel-default'>
							<div class='panel-body'>
							<table border='0' width='260' height='580'>
							<tr>
								<td valign='top' height='200'>
									<a href='dasar.php?page=masakan&id=<?php echo $rows['id_resep'];?>'>
									<?php echo "<img src='imgresep/".$rows['foto_resep']."'></a><br>"; ?>
								</td>
							</tr>
							<tr>
								<td valign='center' height='75'>
									<a href='dasar.php?page=masakan&id=<?php echo $rows['id_resep'];?>'><h4><?php echo $rows['nama_resep'];?></h4><br></a>
								</td>
							</tr>
							<tr>
								<td valign='top'>
									<div class='panel panel-default'>
									<div class='panel-body'>
										<table border='0' width='230'>
											<tr>
											<?php
												echo"
												<td>
													<a href='dasar.php?page=profil&id=".$id_anggota."'>";
														if (!isset($r['foto_profil']))
														{
															echo "<img src='imgmember/profile_icon.png' style='width:40px; height:40px; border-radius:50%; border:1px solid #990012;'></td>";
														}
														else
														{
															echo "<img src='imgmember/".$r['foto_profil']."' style='width:40px; height:40px; border-radius:50%; border:1px solid #990012;'></td>";
														}
													echo "
													</a>
												</td>
												<td width='60%'><b><a href='dasar.php?page=profil&id=".$id_anggota."'>".$r['nama']."</a></b></td>
												<td>".date("d/m/Y",strtotime($rows['tgl_resep']))."</td>";
											?>
											</tr>
										</table>
									</div>
									</div>
									<table border='0' width='250'>
									<tr>
										<td>
											<p align='justify'>
												<?php echo substr($desc,0,200).". . . .";?>
											</p>
										</td>
									</tr>
									</table>
								
								</td>
							</tr>
							</table>
							</div>
							</div>
						<?php
							$no=$no+1;
							}
						?>
						</li>	
					</ul>
				
				<div class='page'>
				<ul>
					<li>
					<?php 	
					include "conn.php";
						// 4). code untuk Menampilkan nomor paging di bagian bawah tabel.
						$sql_paging = mysql_query("SELECT id_resep from resep WHERE jenis LIKE '%$jenis%' AND bahan LIKE '%$bahan%' AND cara LIKE '%$cara%' AND asal LIKE '%$asal%'");
						$jmldata = mysql_num_rows($sql_paging) or die (mysql_error());
						$jumlah_halaman = ceil($jmldata / $batas);
						for($i = 1; $i <= $jumlah_halaman; $i++)
						{
						  echo "<font style='padding:10px;'><a href=dasar.php?page=hasil&halaman=$i&$no> $i </a></font>";
						};
					?>
					</li>
				</ul>
			</div>
			
			</div>
		</div>
	</div>