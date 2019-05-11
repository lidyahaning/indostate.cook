<div class="container-fluid">
	<div class="kelola">
	<div class="table-responsive">
		<table class="table" border="0">
		<tr>
		<td>
			<h3>
			<a href='index.php'>Beranda</a>
			<span class="glyphicon glyphicon-menu-right"></span> Data Website</h3>
		</td>
		<td>
			<form method="post" name="cari" action="dasar.php?page=cari_anggota">
				<input type="" class="form-control" name="nama" placeholder="Masukkan Nama Anggota"><br>
			</form>
		</td>
		</tr>
		</table>
	</div>
			<ul class="nav nav-tabs nav-justified">
				<li class="active"><a href="#">ANGGOTA</a></li>
				<li><a href="dasar.php?page=resep">RESEP</a></li>
				<li><a href="dasar.php?page=bahan_resep">BAHAN RESEP</a></li>
				<li><a href="dasar.php?page=cara_resep">CARA RESEP</a></li>
				<li><a href="dasar.php?page=saji_resep">SAJI RESEP</a></li>
				<li><a href="dasar.php?page=topik">TOPIK</a></li>
				<li><a href="dasar.php?page=komentar_resep">KOMENTAR RESEP</a></li>
				<li><a href="dasar.php?page=komentar_topik">KOMENTAR TOPIK</a></li>
			</ul>
			<br>
			
			<table border="0" align="center" class="table table-hover">
						<thead>
							<tr>
								<th width="8%">ID_Anggota</th>
								<th width="10%">Nama</th>
								<th width="8%">Username</th>
								<!--th>Password</th-->
								<th width="5%">Email</th>
								<th width="5%">JKel</th>
								<th width="5%">Tgl</th>
								<th width="8%">Bulan</th>
								<th width="5%">Tahun</th>
								<th width="5%">Profesi</th>
								<th width="25%">Bio</th>
								<th width="10%">Foto_Profil</th>
								<th width="5%">Kelola</th>
							</tr>
						</thead>
						
			<?php
				include "conn.php";
				//ngambil data yg diinput
				if(isset($_POST['data']))
				{
					//ngambil data yg diinput
					session_start();
					$_SESSION['data']=$_POST['data'];
					$data = $_SESSION['data'];
				}
				else
				{
					session_start();
					$data = $_SESSION['data'];
				}
				$no=1;
				$batas=30; //satu halaman menampilkan 20 topik
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
				$query="select * from anggota WHERE nama LIKE '%$data%' limit $posisi,$batas";
				$sql_tampil_data=mysql_query($query) or die(mysql_error());
				while($r=mysql_fetch_array($sql_tampil_data))
				{ // Start looping table row
				
			?>
			
						<tbody>
							<tr>
								<td align='center'><?php echo $r['id_anggota']; ?></td>
								<td><?php echo $r['nama']; ?></td>
								<td align='center'><?php echo $r['username']; ?></td>
								<!--td><?php //echo $r['password']; ?></td-->
								<td><?php echo $r['email']; ?></td>
								<td align='center'><?php echo $r['jkel']; ?></td>
								<td align='center'><?php echo $r['tgl']; ?></td>
								<td align='center'><?php echo $r['bulan']; ?></td>
								<td align='center'><?php echo $r['tahun']; ?></td>
								<td align='center'><?php echo $r['profesi']; ?></td>
								<td><p align="justify"><?php echo $r['bio']; ?></p></td>
								<td><?php echo $r['foto_profil']; ?></td>
								<!--kelola-->
									<td align='center'> 
										<a onclick='return confirm('Apakah Anda yakin akan menghapus data ini?')" href="dasar.php?page=hapus_anggota&id=<?php echo $r['id_anggota']; ?>"><span class="glyphicon glyphicon-trash"></span></a>
									</td>
								
						<?php
							$no=$no+1;
						}
						?>
						
					</tr>
				</tbody>
			</table>
			
			<div class='page'>
				<ul class="pagination">
					<li>
					<?php 	
					include "conn.php";
						// 4). code untuk Menampilkan nomor paging di bagian bawah tabel.
						$sql_paging = mysql_query("select * from anggota WHERE nama LIKE '%$data%'");
						$jmldata = mysql_num_rows($sql_paging) or die (mysql_error());
						$jumlah_halaman = ceil($jmldata / $batas);
						for($i = 1; $i <= $jumlah_halaman; $i++)
						{
						  echo "<font style='padding:10px;'><a href=dasar.php?page=cari_anggota&halaman=$i&$no> $i </a></font>";
						}
						$i=$i-1;
					?>
					</li>
				</ul>
			</div>

		</div>
	</div>