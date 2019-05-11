<div class="col-sm-1">
</div>

<div class="col-sm-10">
		<br><br>
		<div id="tampil_komentar">
			<?php
				include "tampil_komentar.php";
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
				else {
					echo "
						<div class='col-sm-8'>
							<h3>Tulis Komentar Anda</h3>
							<form name='tambah_komentar_topik' method='post' action='tambah_komentar_topik.php'>
								<div class='form-group'>
									<input class='form-control' name='id_topik' value='".$id_topik."' type='hidden'>
								</div>
								<div class='form-group'>
									<label for='isi_komentar'>Komentar :</label>
									<textarea class='form-control' name='isi_komentar' rows='5' required></textarea>
								</div>
								<div class='form-group'>
									<button class='btn btn-primary' name='tombol' value='Kirim' type='submit'>Kirim</button>
									<button type='reset' class='btn btn-danger' name='batal'>Batal</button>
								</div>
							</form>
						</div>
					";
				}
		?>
		</div>
</div>