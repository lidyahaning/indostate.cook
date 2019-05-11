<?php
	include "conn.php";
        if (isset($_GET['id'])) { 
		$id_a=$_GET['id']; 
		$_SESSION['id_a']= $id_a;
		}else{ 
		$id_a = $_SESSION['id_a'];}
	$sql1=mysql_query("select * from anggota WHERE id_anggota = '$id_a'");
	$z = mysql_fetch_array($sql1);
?>

<div class="container">
		<div class="content">
			<div class="kategori">
				<center><h1>resep <?=$z['nama'];?></h1>
				<hr style="max-width:580px;"></center>
					<ul>
						<?php
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
							$query="select * from resep WHERE id_anggota = '$id_a' order by nama_resep limit $posisi,$batas ";
							$sql_tampil_data=mysql_query($query) or die(mysql_error());
							while($rows=mysql_fetch_array($sql_tampil_data))
							{ // Start looping table row
							$id_anggota=$rows['id_anggota'];
							$sql = mysql_query("SELECT * from anggota WHERE id_anggota = '$id_anggota'") or die(mysql_error());
							$r=mysql_fetch_array($sql);
							$desc = $rows['deskripsi'];
							$id_resep = $rows['id_resep'];
							
						echo "
						<li>
							<div class='panel panel-default'>
							<div class='panel-body'>
							<table border='0' width='260' height='580'>
							<tr>
								<td valign='top' height='200'>
									<a href='dasar.php?page=masakan&id=".$id_resep."'>
									<img src='imgresep/".$rows['foto_resep']."'></a><br>
								</td>
							</tr>
							<tr>
								<td valign='center' height='75'>
									<a href='dasar.php?page=masakan&id=$id_resep'><h4>".$rows['nama_resep']."</h4><br></a>
								</td>
							</tr>
							<tr>
								<td valign='top'>
									<div class='panel panel-default'>
									<div class='panel-body'>
										<table border='0' width='230'>
											<tr>
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
												<td>".date("d/m/Y",strtotime($rows['tgl_resep']))."</td>
											</tr>
										</table>
									</div>
									</div>
									<table border='0' width='250'>
									<tr>
										<td>
											<p align='justify'>
												".substr($desc,0,200)." . . .
											</p>
										</td>
									</tr>
									</table>
								
								</td>
							</tr>
							</table>
							</div>
							</div>";
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
						$sql_paging = mysql_query("select id_resep from resep WHERE id_anggota = '$id_a'");
						$jmldata = mysql_num_rows($sql_paging) or die (mysql_error());
						$jumlah_halaman = ceil($jmldata / $batas);
						for($i = 1; $i <= $jumlah_halaman; $i++)
						{
						  echo "<font style='padding:10px;'><a href=dasar.php?page=resep&halaman=$i&$no> $i </a></font>";
						}
						$i=$i-1;
					?>
					</li>
				</ul>
			</div>
			
			</div>
		</div>
	</div>