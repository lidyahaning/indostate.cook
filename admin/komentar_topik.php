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
			<form method="post" name="cari" action="dasar.php?page=cari_komentar_topik">
				<b>Cari Data :</b></span><input type="" class="form-control" name="data" placeholder="Masukkan ID atau Isi Komentar"><br>
			</form>
		</td>
		</tr>
		</table>
	</div>
	
	<!------------------------- TABS MACAM DATA ---------------------------->
		<ul class="nav nav-tabs nav-justified">
			<li><a href="dasar.php?page=anggota">ANGGOTA</a></li>
			<li><a href="dasar.php?page=resep">RESEP</a></li>
			<li><a href="dasar.php?page=bahan_resep">BAHAN RESEP</a></li>
			<li><a href="dasar.php?page=cara_resep">CARA RESEP</a></li>
			<li><a href="dasar.php?page=saji_resep">SAJI RESEP</a></li>
			<li><a href="dasar.php?page=topik">TOPIK</a></li>
			<li><a href="dasar.php?page=komentar_resep">KOMENTAR RESEP</a></li>
			<li class="active"><a href="#">KOMENTAR TOPIK</a></li>
		</ul>
		<br>

		<table border="0" align="center" class="table table-hover">
			<thead>
				<tr>
					<th width="10%">Kd_Komentar</th>
					<th width="10%">Kd_Turunan</th>
					<th width="10%">ID_Topik</th>
					<th width="10%">ID_Anggota</th>
					<th width="40%">Isi_Komentar</th>
					<th width="10%">Tgl_Komentar</th>
					<th width="10%">Kelola</th>
				</tr>
			</thead>
							
			<?php
				include "conn.php";
				session_start();
				unset($_SESSION['data']);
				
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
				$query="select * from komentar_topik limit $posisi,$batas ";
				$sql_tampil_data=mysql_query($query) or die(mysql_error());
				while($r=mysql_fetch_array($sql_tampil_data))
				{ // Start looping table row
				
			?>
							
			<tbody>
				<tr>
					<td align='center'><?php echo $r['kd_komentar']; ?></td>
					<td align='center'><?php echo $r['kd_turunan']; ?></td>
					<td align='center'><?php echo $r['id_topik']; ?></td>
					<td align='center'><?php echo $r['id_anggota']; ?></td>
					<td align='justify'><?php echo $r['isi_komentar']; ?></td>
					<td align='center'><?php echo date("d/m/Y",strtotime($r['tgl_komentar'])); ?></td>
					<!--kelola-->
					<td align='center'>
						<a onclick="return confirm('Apakah Anda yakin akan menghapus data ini?')" href="dasar.php?page=hapus_komentar_topik&id_anggota=<?php echo $r['id_anggota'];?>&id_topik=<?php echo $r['id_topik'];?>&isi=<?php echo $r['isi_komentar'];?>"><span class="glyphicon glyphicon-trash"></span></a>
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
					$sql_paging = mysql_query("select isi_komentar from komentar_topik");
					$jmldata = mysql_num_rows($sql_paging) or die (mysql_error());
					$jumlah_halaman = ceil($jmldata / $batas);
					for($i = 1; $i <= $jumlah_halaman; $i++)
					{
						echo "<font style='padding:10px;'><a href=dasar.php?page=komentar_topik&halaman=$i&$no> $i </a></font>";
					}
					$i=$i-1;
				?>
				</li>
			</ul>
		</div>
	</div>	
</div>