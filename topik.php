<div class="container">
	<div class="content">
		<div class="topic">		
			<p><a href='dasar.php?page=forum'><span class='glyphicon glyphicon-chevron-left'></span> Forum Diskusi</a></p>
			<div class="panel panel-default">
				<div class="panel-body">		
					<?php
						//manggil data
						require "conn.php";
						$sql = mysql_query("SELECT * from topik WHERE id_topik='{$_GET['id']}'") or die(mysql_error());
						$r=mysql_fetch_array($sql);
						$id_anggota = $r['id_anggota'];
						
						$sql2 = mysql_query("SELECT * from anggota WHERE id_anggota='$id_anggota'");
						$row=mysql_fetch_array($sql2);
						
						//hapus topik untuk pembuat
						$username = $row['username'];
						if(isset($_SESSION['masuk']))
						{
							if($_SESSION['masuk'] == $username) 
							{
					?>
								<p align='right'><a onclick="return confirm('Apakah Anda yakin akan menghapus topik diskusi ini?')" href='dasar.php?page=hapus_topik&id=<?=$r['id_topik'];?>'><span class='glyphicon glyphicon-remove'></span> Hapus</a></p>
					<?php
							}
							else
							{
								echo "";
							}
						}
					?>
					
					<div class="panel panel-default">
						<div class="panel-body">
							<table border='0' width='1030' align='center' style='font-family:"Palatino Linotype", "Book Antiqua", Palatino, serif;'>
								<tr>
									<td rowspan='3' width='120' align='center'>
									<?php
										if (!isset($row['foto_profil']))
										{
											echo "<img src='imgmember/profile_icon.png' style='width:90px; height:90px; border:1px solid #000;'></td>";
										}
										else
										{
											echo "<img src='imgmember/".$row['foto_profil']."' style='width:90px; height:90px; border:1px solid #000;'></td>";
										}
									?>
									<td colspan='2'>Oleh :</td>
									<td width='180'>Di Posting Tanggal :</td>
								</tr>
								<tr>
									<td width='30'></td>
									<td><font size='5'><b><?php echo "<a href='dasar.php?page=profil&id=".$id_anggota."'>"?><?=$row['nama'];?></a></b></font></td>
									<td rowspan='2' align='right'><font size='4'><b><?php echo date("d/m/Y",strtotime($r['tgl_topik']));?></b></font></td>
								</tr>
								<tr>
									<td></td>
									<td height='30'><?=$row['profesi'];?></td>
								</tr>
							</table>
						</div>
					</div>
					
					<table class='table' border='0' width='1000' align='center'>
					<thead>
						<tr>
							<th><center><h1><?=$r['judul'];?></h1></center></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>
								<p>
								<?=$r['isi'];?>
								</p>
							</td>
						</tr>
					</tbody>
					</table>
					
					<!----------------- BATAS TOPIK ---------->
					<br>
					<center>
						<span class='glyphicon glyphicon-minus'></span> <font size='5'><span class='glyphicon glyphicon-grain'></span></font> <span class='glyphicon glyphicon-minus'></span>
					</center>
				
				<!------------------------------------------ KOMENTAR --------------------------------->
				<div class="col-sm-1">
				</div>

				<div class="col-sm-10">
						<br><br>
						<div id="tampil_komentar">
							<?php
								include "tampil_komentar_topik.php";
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
									<form name='tambah_komentar_topik' method='post' action='tambah_komentar_topik.php'>
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
							?>
						</div>
					</div>	
				</div>
			</div>	
		</div>
	</div>
</div>