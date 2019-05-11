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
			<form method="post" name="cari" action="dasar.php?page=cari_bahan">
				<input type="" class="form-control" name="data" placeholder="Masukkan ID atau Bahan Resep"><br>
			</form>
		</td>
		</tr>
		</table>
	</div>
	
	<!------------------------- TABS MACAM DATA ---------------------------->
		<ul class="nav nav-tabs nav-justified">
			<li><a href="dasar.php?page=anggota">ANGGOTA</a></li>
			<li><a href="dasar.php?page=resep">RESEP</a></li>
			<li class="active"><a href="#">BAHAN RESEP</a></li>
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
					<th width="20%">ID_Resep</th>
					<th width="60%">Bahan_Resep</th>
					<th width="20%">Kelola</th>
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
				$batas=30; //satu halaman menampilkan 5 topik
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
				$query="select * from bahan_resep WHERE id_resep LIKE '%$data%' OR bahan_resep LIKE '%$data%' limit $posisi,$batas ";
				$sql_tampil_data=mysql_query($query) or die(mysql_error());
				while($r=mysql_fetch_array($sql_tampil_data))
				{ // Start looping table row
				
			?>
							
			<tbody>
				<tr>
					<td align='center'><?php echo $r['id_resep']; ?></td>
					<td align='center'><?php echo $r['bahan_resep']; ?></td>
					<!--kelola-->
					<td align='center'>
						<a onclick="return confirm('Apakah Anda yakin akan menghapus data ini?')" href="dasar.php?page=hapus_bahan&id=<?php echo $r['id_resep']; ?>"><span class="glyphicon glyphicon-trash"></span></a>
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
					$sql_paging = mysql_query("select * from bahan_resep WHERE id_resep LIKE '%$data%' OR bahan_resep LIKE '%$data%'");
					$jmldata = mysql_num_rows($sql_paging) or die (mysql_error());
					$jumlah_halaman = ceil($jmldata / $batas);
					for($i = 1; $i <= $jumlah_halaman; $i++)
					{
						echo "<font style='padding:10px;'><a href=dasar.php?page=cari_bahan&halaman=$i&$no> $i </a></font>";
					}
					$i=$i-1;
				?>
				</li>
			</ul>
		</div>
	</div>
			
</div>