<div class="container">
	<div class="content">
		<center>
			<h1>Masuk</h1>
			<hr style="max-width:580px;">
		</center>
		<br>
			
		<div class="sign">
		Silahkan masuk dengan akun IndoState.Cook anda<br><br>
			<form class="form-horizontal" action="dasar.php?page=ceklogin" method="post">
				<div class="form-group">
					<label class="control-label col-sm-2" for="user">Username:</label>
					<div class="col-sm-10">
						<input type="username" class="form-control" id="username" placeholder="Masukkan username" name="user">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="pass">Password:</label>
					<div class="col-sm-10">
						<input type="password" class="form-control" id="pwd" placeholder="Masukkan password" name="pass">
					</div>
				</div>
				<p align="right"><font size="2"><a href="dasar.php?page=lupapw">Lupa Password anda?</a></font></p>
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<button type="submit" class="btn btn-primary" name="masuk">Masuk</button>
						<button type="reset" class="btn btn-danger" name="batal">Batal</button>
					</div>
				</div>
			</form>
			
			<br>
			Belum memiliki akun pada website ini? Silahkan <a href="dasar.php?page=signup" style="color:red;">Sign Up</a> terlebih dahulu
		</div>
	</div>
</div>