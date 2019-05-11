<div class="container">
	<div class="content">
		<div class="profil">
			<center>
				<h1>Profil</h1>
				<hr style="max-width:580px;">
			</center>
			<br>
		
		<?php
			//-------------------- manggil data anggota & resep ------------------------
			require "conn.php";

			$id=$_GET['id'];
			$sql = mysql_query("SELECT * from anggota WHERE id_anggota = '$id'") or die(mysql_error());
			$r=mysql_fetch_array($sql);
			$username = $r['username'];
			$sql2 = mysql_query("SELECT * from resep WHERE id_anggota = '$id'") or die(mysql_error());
			$jmlresep = mysql_num_rows($sql2);
			$id_anggota = $r['id_anggota'];
		?>
			
			<div class="panel panel-default">
				<div class="panel-body">
					<!--------------------------------- INFORMASI ANGGOTA ----------------------->
					<div class="row">
						<div class="col-sm-3">
						<?php
							if (!isset($r['foto_profil']))
							{
								echo "<img src='imgmember/profile_icon.png'>";
							}
							else
							{
								echo "<img src='imgmember/".$r['foto_profil']."'>";
							}
						?>
						</div>
						
						<div class="col-sm-9">
							<table border="0" width="800">
								<tr>
									<td><h3><?=$r['nama'];?></h3></td>
							<?php
								if(isset($_SESSION['masuk']))
								{
									if($_SESSION['masuk'] == $username)
									{
										echo "<td align='right' valign='top'><a href='dasar.php?page=edit_profil' style='text-decoration:none;'><span class='glyphicon glyphicon-edit'></span> Ubah Profil</a></td>";
									}
									else
									{
										echo "<td></td>";
									}
								}
							?>
								</tr>
							</table>
							
							<table border="0" width="400">
								<tr>
									<td width="38%"><b>Jenis Kelamin</td>
									<td width="10%" align="center">:</b></td>
									<td width="62%"><?=$r['jkel'];?></td>
								</tr>
								<tr>
									<td><b>Tanggal Lahir</td>
									<td align="center">:</b></td>
									<td><?=$r['tgl']." ".$r['bulan']." ".$r['tahun'];?></td>
								</tr>
								<tr>
									<td><b>Profesi</td>
									<td align="center">:</b></td>
									<td><?=$r['profesi'];?></td>
								</tr>
							</table>
							
							<?php echo "<a href='dasar.php?page=resep&id=".$id_anggota."'>";?><b><span class="glyphicon glyphicon-book"></span> <?php echo $jmlresep." Resep" ?></b></a>
							
							<p align="justify">
								<?=$r['bio'];?>
							</p>
						</div>
					</div>
					
					<!--------------------------------- RESEP ANGGOTA --------------------------------->
					<div class="col-span-12">
						<div class="resep_x">
							
							<div class="table-responsive">
								<table class="table" border="0">
									<thead>
										<tr>
											<th colspan="4"><center><h3>Resep <?=$r['nama'];?></h3></center></th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<?php
												$id = $r['id_anggota'];
												$sql1 = mysql_query("SELECT * from resep WHERE id_anggota = '$id' order by id_resep desc limit 4") or die(mysql_error());
												while ($rows = mysql_fetch_array($sql1)) {
												$desc = $rows['deskripsi'];
												$id_resep = $rows['id_resep'];
												echo "
													<td width='25%'>
														<center><a href='dasar.php?page=masakan&id=".$id_resep."'><img src='imgresep/".$rows['foto_resep']."'><br>
														<h4>".$rows['nama_resep']."</h4><br></a></center>
														<center><table border='0' width='230'>
																<tr>
																	<td width='30' align='center'>
																		<a href='dasar.php?page=profil&id=".$id."'>";
																			if (!isset($r['foto_profil']))
																			{
																				echo "<img src='imgmember/profile_icon.png' style='width:30px; height:30px; border-radius:50%; border:1px solid #990012;'></td>";
																			}
																			else
																			{
																				echo "<img src='imgmember/".$r['foto_profil']."' style='width:30px; height:30px; border-radius:50%; border:1px solid #990012;'></td>";
																			}
																		echo "
																		</a>
																	</td>
																	<td align='center'><b><a href='dasar.php?page=profil&id=".$id."'>".$r['nama']."</a></b></td>
																	<td width='70' align='center'>".date("d/m/Y",strtotime($rows['tgl_resep']))."</td>
																</tr>
														</table></center>
														<br>
														<p align='justify'>
															".substr($desc,0,200)." . . .
														</p>
													</td>
													";
												}
											?>
										</tr>
									</tbody>
								</table>
							</div>
							<br>
							
							<p align="right">
								<button type="button" class="btn btn-default"><?php echo "<a href='dasar.php?page=resep&id=".$id_anggota."'>Selengkapnya &#62;&#62;</a>";?></button>
							</p>
						</div>
					</div>
						
					<!------------------------------- TOPIK DISKUSI ANGGOTA ------------------------------->
					<div class='resep_x'>
						<div class="table-responsive">
							<table class="table" border="0">
								<thead>
									<tr>
										<th colspan="4"><center><h3>Topik Diskusi <?=$r['nama'];?></h3></center></th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>
											<table align="center" class="table table-hover">
												<thead>
													<tr style="background-color:#990012; color:#fff; font-size:13pt;">
														<th width="6%"><center>No.</center></th>
														<th width="53%"><center>Topik</center></th>
														<th width="15%"><center>Oleh</center></th>
														<th width="13%"><center>Komentar</center></th>
														<th width="13%"><center>Tanggal</center></th>
													</tr>
												</thead>
												<?php
													$no=1;
													$sql_forum=mysql_query("SELECT * FROM topik where id_anggota='$id_anggota' ORDER BY id_topik DESC");
													while($rows=mysql_fetch_array($sql_forum))
													{ // Start looping table row
														$id_topik=$rows['id_topik'];
														$commentquery = mysql_query("SELECT * FROM komentar_topik WHERE id_topik='$id_topik'") or die(mysql_error());
														$commentNum = mysql_num_rows($commentquery);
												?>
												<tbody>
													<tr>
														<td align='center'><?php echo $no; ?></td>
														<td style="text-transform: uppercase;"><a href="dasar.php?page=topik&id=<?=$rows['id_topik'];?>">
														<?php echo $rows['judul']; ?></a><BR></td>
														<td align='center'><?php echo $r['nama']; ?></td>
														<td align='center'><?php echo $commentNum; ?></td>
														<td align='center'><?php echo date("d-m-Y",strtotime($rows['tgl_topik'])); ?></td>
														<?php
															$no=$no+1;
														?>
													</tr>

													<?php
													// Exit looping and close connection
													}
													mysql_close();
													?>

												</tbody>
											</table>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
								
						<?php
							if(isset($_SESSION['masuk']))
							{
								if($_SESSION['masuk'] == $username)
								{
									echo "<p align='right'><button type='button' class='btn btn-default'><a href='dasar.php?page=tambah_topik' style='text-decoration:none;'><span class='glyphicon glyphicon-plus-sign'></span> Tambah Topik</a></p>";
								}
							}
						?>
							
					</div>
				</div>
			</div>					
	</div>
</div>
</div>