<?php
	require "conn.php";
			$username = $_SESSION['masuk'];
			$sql = mysql_query("SELECT * from anggota WHERE username = '$username'") or die(mysql_error());
			$r=mysql_fetch_array($sql);
			$id_anggota=$r['id_anggota'];
?>

<div class="container">
	<div class="content">
		<center>
				<h1>ubah profil</h1>
				<hr style="max-width:580px;">
			</center>
			<br>
			
			<div class="ubah_profil">
				<form role="form" action="simpan_profil.php" method="post" enctype="multipart/form-data">
					<div class="form-group">
						<label for="foto_profil">Foto Profil :</label>
						<br>
						<?php
						if (!isset($r['foto_profil']))
						{
							echo "<img src='imgmember/profile_icon.png' width='200' height='200'>";
							$foto_profil="profile_icon.png";
						}
						else
						{
							echo "<img src='imgmember/".$r['foto_profil']."' width='200' height='200'>";
							$foto_profil=$r['foto_profil'];
						}
						?>
						<input type="file" accept="imgmember/*" name="foto_profil" value="<?=$foto_profil;?>">
					</div>
					<div class="form-group">
						<label for="nama">Nama :</label>
						<input type="" class="form-control" name="nama" value="<?=$r['nama'];?>" required>
					</div>
					<div class="form-group">
						<label for="email">Email :</label>
						<input type="" class="form-control" name="email" value="<?=$r['email'];?>" required>
					</div>
				
					<div class="form-group" style="display:inline-block;">
						<label for="lahir">Tanggal Lahir :</label><br>
						<select name="tgl">
						<option value="<?=$r['tgl'];?>"><?= $r['tgl'];?></option>
							<option>1</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
							<option>5</option>
							<option>6</option>
							<option>7</option>
							<option>8</option>
							<option>9</option>
							<option>10</option>
							<option>11</option>
							<option>12</option>
							<option>13</option>
							<option>14</option>
							<option>15</option>
							<option>16</option>
							<option>17</option>
							<option>18</option>
							<option>19</option>
							<option>20</option>
							<option>21</option>
							<option>22</option>
							<option>23</option>
							<option>24</option>
							<option>25</option>
							<option>26</option>
							<option>27</option>
							<option>28</option>
							<option>29</option>
							<option>30</option>
							<option>31</option>
						</select>
						<select name="bulan">
						<option value="<?=$r['bulan'];?>"><?= $r['bulan'];?></option>
							<option>Januari</option>
							<option>Februari</option>
							<option>Maret</option>
							<option>April</option>
							<option>Mei</option>
							<option>Juni</option>
							<option>Juli</option>
							<option>Agustus</option>
							<option>September</option>
							<option>Oktober</option>
							<option>November</option>
							<option>Desember</option>
						</select>
						<select name="tahun">
						<option value="<?=$r['tahun'];?>"><?= $r['tahun'];?></option>
							<option>2001</option>
							<option>2000</option>
							<option>1999</option>
							<option>1998</option>
							<option>1997</option>
							<option>1996</option>
							<option>1995</option>
							<option>1994</option>
							<option>1993</option>
							<option>1992</option>
							<option>1991</option>
							<option>1990</option>
							<option>1989</option>
							<option>1988</option>
							<option>1987</option>
							<option>1986</option>
							<option>1985</option>
							<option>1984</option>
							<option>1983</option>
							<option>1982</option>
							<option>1981</option>
							<option>1980</option>
							<option>1979</option>
							<option>1978</option>
							<option>1977</option>
							<option>1976</option>
							<option>1975</option>
							<option>1974</option>
							<option>1973</option>
							<option>1972</option>
							<option>1971</option>
							<option>1970</option>
							<option>1969</option>
							<option>1968</option>
							<option>1967</option>
							<option>1966</option>
							<option>1965</option>
						</select>
					</div>
				
					
					<div class="form-group">
						<label for="profesi">Profesi :</label>
						<input type="" class="form-control" name="profesi" value="<?=$r['profesi'];?>">
					</div>
					<div class="form-group">
						<label for="bio">Bio :</label>
						<textarea class="form-control" rows="7" name="bio"><?=$r['bio'];?></textarea>
					</div>
					
					<br>
					<div class="form-group">
						<button type="submit" class="btn btn-primary" name="ubah">Simpan</button>
						<button type="button" class="btn btn-danger" name="batal"><a onclick="return confirm('Batal melakukan pengubahan?')"href="dasar.php?page=profil&id=<?=$id_anggota;?>" style="color:#fff;">Batal</a></button>
					</div>
				</form>
			</div>
	</div>
</div>