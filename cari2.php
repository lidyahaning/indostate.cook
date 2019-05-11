<?php
	$_SESSION['cara'] = null;
	$_SESSION['jenis'] = null;
	$_SESSION['bahan'] = null;
	$_SESSION['asal'] = null;
?>
	<div class="container">
		<div class="content">
			<center>
				<h1>Kategori</h1>
				<hr style="max-width:580px;">
			</center>
			<br>		
			
			<div class="cari">
			<div class="panel panel-default">
				<div class="panel-body">
					<div class="kriteria">
					<form method="post" name="cari" action="dasar.php?page=hasil">
					<div class="row">
					<div class="col-sm-6">
					<div class="panel panel-default">
					<div class="panel-body">
						<h5>MAKANAN PEMBUKA :</h5><hr>
						<p><b>Tepung</b></p>
								<label name="jenis">
									<input type="radio" name="cara" value="Makanan Pembuka,Tepung,Goreng"> Goreng
								</label>
								<label name="jenis">
									<input type="radio" name="cara" value="Makanan Pembuka,Tepung,Kukus"> Kukus
								</label>
								<label name="jenis">
									<input type="radio" name="cara" value="Makanan Pembuka,Tepung,Rebus"> Rebus
								</label>
						<p><b>Umbi-umbian</b></p>
								<label name="jenis">
									<input type="radio" name="cara" value="Makanan Pembuka,Umbi-umbian,Goreng"> Goreng
								</label>
								<label name="jenis">
									<input type="radio" name="cara" value="Makanan Pembuka,Umbi-umbian,Kukus"> Kukus
								</label>
								<label name="jenis">
									<input type="radio" name="cara" value="Makanan Pembuka,Umbi-umbian,Rebus"> Rebus
								</label>
						</div></div>
						
						<div class="panel panel-default">
					<div class="panel-body">
						<h5>MAKANAN PENUTUP :</h5><hr>
						<p><b>Tepung</b></p>
								<label name="jenis">
									<input type="radio" name="cara" value="Makanan Penutup,Tepung,Bakar/Panggang"> Bakar/Panggang
								</label>
								<label name="jenis">
									<input type="radio" name="cara" value="Makanan Penutup,Tepung,Kukus"> Kukus
								</label>
								<label name="jenis">
									<input type="radio" name="cara" value="Makanan Penutup,Tepung,Rebus"> Rebus
								</label>
						<p><b>Umbi-umbian</b></p>
								<label name="jenis">
									<input type="radio" name="cara" value="Makanan Penutup,Umbi-umbian,Bakar/Panggang"> Bakar/Panggang
								</label>
								<label name="jenis">
									<input type="radio" name="cara" value="Makanan Penutup,Umbi-umbian,Kukus"> Kukus
								</label>
								<label name="jenis">
									<input type="radio" name="cara" value="Makanan Penutup,Umbi-umbian,Rebus"> Rebus
								</label>
						</div></div>
						
						<div class="panel panel-default">
					<div class="panel-body">
						<label name="jenis">
							<input type="radio" name="cara" value="Minuman"> Minuman
						</label>
						<label name="jenis">
							<input type="radio" name="cara" value="Sambal"> Sambal
						</label>
						</div></div>
						
						</div>
						
						<div class="col-sm-6">
						<div class="panel panel-default">
						<div class="panel-body">
							<h5>MAKANAN UTAMA :</h5><hr>
						<div class="row">
						<div class="col-sm-6">
							<p><b>Ayam</b></p>
								<label name="jenis">
									<input type="radio" name="cara" value="Makanan Utama,Ayam,Bakar/Panggang"> Bakar/Panggang
								</label>
								<label name="jenis">
									<input type="radio" name="cara" value="Makanan Utama,Ayam,Goreng"> Goreng
								</label>
								<label name="jenis">
									<input type="radio" name="cara" value="Makanan Utama,Ayam,Rebus"> Rebus
								</label>
								<label name="jenis">
									<input type="radio" name="cara" value="Makanan Utama,Ayam,Tumis"> Tumis
								</label>
							<p><b>Daging</b></p>
								<label name="jenis">
									<input type="radio" name="cara" value="Makanan Utama,Daging,Bakar/Panggang"> Bakar/Panggang
								</label>
								<label name="jenis">
									<input type="radio" name="cara" value="Makanan Utama,Daging,Goreng"> Goreng
								</label>
								<label name="jenis">
									<input type="radio" name="cara" value="Makanan Utama,Daging,Rebus"> Rebus
								</label>
								<label name="jenis">
									<input type="radio" name="cara" value="Makanan Utama,Daging,Tumis"> Tumis
								</label>
							<p><b>Ikan</b></p>
								<label name="jenis">
									<input type="radio" name="cara" value="Makanan Utama,Ikan,Bakar/Panggang"> Bakar/Panggang
								</label>
								<label name="jenis">
									<input type="radio" name="cara" value="Makanan Utama,Ikan,Goreng"> Goreng
								</label>
								<label name="jenis">
									<input type="radio" name="cara" value="Makanan Utama,Ikan,Rebus"> Rebus
								</label>
								<label name="jenis">
									<input type="radio" name="cara" value="Makanan Utama,Ikan,Tumis"> Tumis
								</label>
							
							</div>
							<div class="col-sm-6">
							<p><b>Mie</b></p>
								<label name="jenis">
									<input type="radio" name="cara" value="Makanan Utama,Mie,Goreng"> Goreng
								</label>
								<label name="jenis">
									<input type="radio" name="cara" value="Makanan Utama,Mie,Rebus"> Rebus
								</label>
								<label name="jenis">
									<input type="radio" name="cara" value="Makanan Utama,Mie,Tumis"> Tumis
								</label>
							<p><b>Nasi</b></p>
								<label name="jenis">
									<input type="radio" name="cara" value="Makanan Utama,Nasi,Bakar/Panggang"> Bakar/Panggang
								</label>
								<label name="jenis">
									<input type="radio" name="cara" value="Makanan Utama,Nasi,Goreng"> Goreng
								</label>
								<label name="jenis">
									<input type="radio" name="cara" value="Makanan Utama,Nasi,Kukus"> Kukus
								</label>
								<label name="jenis">
									<input type="radio" name="cara" value="Makanan Utama,Nasi,Rebus"> Rebus
								</label>
							<p><b>Sayuran</b></p>
								<label name="jenis">
									<input type="radio" name="cara" value="Makanan Utama,Sayuran,Kukus"> Kukus
								</label>
								<label name="jenis">
									<input type="radio" name="cara" value="Makanan Utama,Sayuran,Rebus"> Rebus
								</label>
								<label name="jenis">
									<input type="radio" name="cara" value="Makanan Utama,Sayuran,Tumis"> Tumis
								</label>
							</div>
							</div>
							</div></div></div>
							
					
								
						</div>
						<div class="panel panel-default">
							<div class="panel-body">
								<h5>Asal Masakan :</h5><hr>
								<label class="radio-inline" name="asal">
									<input type="radio" name="asal" value="Bali NTB NTT"><b>Bali NTB NTT</b>
								</label>
								<label class="radio-inline" name="asal">
									<input type="radio" name="asal" value="Jawa"><b>Jawa</b>
								</label>
								<label class="radio-inline" name="asal">
									<input type="radio" name="asal" value="Kalimantan"><b>Kalimantan</b>
								</label>
								<label class="radio-inline" name="asal">
									<input type="radio" name="asal" value="Papua"><b>Papua</b>
								</label>
								<label class="radio-inline" name="asal">
									<input type="radio" name="asal" value="Sumatera"><b>Sumatera</b>
								</label>
								<br>
								<label class="radio-inline" name="asal">
									<input type="radio" name="asal" value="Sulawesi"><b>Sulawesi</b>
								</label>
							</div>
						</div>
						<p align="right">
							<button type="submit" name="submit" class="btn btn-primary">Cari</a></button>
							<button type="reset" class="btn btn-danger">Batal</button>
						</p>
					</form>					
					</div>
				</div>
			</div>
		</div>
	</div>	
</div>