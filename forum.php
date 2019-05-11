<div class="container">
		<div class="content">
		<div class="forum">
			<center>
				<h1>Forum Diskusi</h1>
				<hr style="max-width:580px;">
			</center>
			<br>	
			<table align="center" class="table table-hover">
			<thead>
			<tr>
				<th width="6%">No.</th>
				<th width="53%">Topik</th>
				<th width="15%">Oleh</th>
				<th width="13%">Komentar</th>
				<th width="13%">Tanggal</th>
			</tr>
			</thead>
			<?php
				include "conn.php";
				$no=1;
				$batas=20; //satu halaman menampilkan 20 topik
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
				$query="select * from topik order by tgl_topik desc limit $posisi,$batas";
				$sql_tampil_data=mysql_query($query) or die(mysql_error());
				while($rows=mysql_fetch_array($sql_tampil_data))
				{ // Start looping table row
				$id_anggota=$rows['id_anggota'];
				$sql = mysql_query("SELECT * from anggota WHERE id_anggota = '$id_anggota'") or die(mysql_error());
				$r=mysql_fetch_array($sql);
				
				//menghitung jumlah komentar
				$id_topik=$rows['id_topik'];
				$commentquery = mysql_query("SELECT * FROM komentar_topik WHERE id_topik='$id_topik'") or die(mysql_error());
				$commentNum = mysql_num_rows($commentquery);
			?>
			<tbody>
			<tr>
				<td align='center'><?php echo $no; ?></td>
				<td style="text-transform: uppercase;"><?php echo "<a href='dasar.php?page=topik&id=".$id_topik."'>"; ?>
				<?php echo $rows['judul']; ?></a><BR></td>
				<td align='center'><?php echo $r['nama']; ?></td>
				<td align='center'><?php echo $commentNum; ?></td>
				<td align='center'><?php echo date("d-m-Y",strtotime($rows['tgl_topik'])); ?></td>
			<?php
				$no=$no+1;
				}
			?>
			</tr>
			</tbody>
			</table>
			
			<p align="right">
				<button type="button" class="btn btn-default"><a href="dasar.php?page=login_topik"><span class='glyphicon glyphicon-plus-sign'></span> Tambah Topik Diskusi</a></button>
			</p>
			
			<div class='page'>
				<ul>
					<li>
					<?php 	
					include "conn.php";
						// 4). code untuk Menampilkan nomor paging di bagian bawah tabel.
						$sql_paging = mysql_query("select id_topik from topik");
						$jmldata = mysql_num_rows($sql_paging) or die (mysql_error());
						$jumlah_halaman = ceil($jmldata / $batas);
						for($i = 1; $i <= $jumlah_halaman; $i++)
						{
						  echo "<font style='padding:10px;'><a href=dasar.php?page=forum&halaman=$i&$no> $i </a></font>";
						}
						$i=$i-1;
					?>
					</li>
				</ul>
			</div>
			
		</div>
	</div>
</div>