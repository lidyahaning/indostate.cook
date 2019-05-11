
<div class="container">
		<div class="content">
			<center>
				<h1>edit username & password</h1>
				<hr style="max-width:580px;">
			</center>
			<br>
			
			<div class="sign">
				<form role="form" action="simpan_user_pass.php" method="post">
					<div class="form-group">
						<label for="username">Username :</label>
						<input class="form-control" name="username" value="<?=$r['username'];?>" required>
					</div>
					<div class="form-group">
						<label for="pwd">Password :</label>
						<input type="password" class="form-control" name="pass" required>
					</div>
					<div class="form-group">
						<label for="pwd2">Re-type Password :</label>
						<input type="password" class="form-control" name="pass2" required>
					</div>
					<br>
					<div class="form-group">
						<button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
						<button type="reset" class="btn btn-danger" name="batal">Batal</button>
					</div>
				</form>
			</div>
		</div>
</div>