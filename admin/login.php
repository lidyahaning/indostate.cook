<div class="container">
<div class='login'>
	<div class="panel panel-default">
		<div class="panel-body">
			<center><h1>Masuk Admin</h1></center>
		</div>
		
		<div class="panel-body">
				<form class="form-horizontal" action="index.php?page=ceklogin" method="post">
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
					<br>
					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">
							<button type="submit" class="btn btn-primary" name="admin">Masuk</button>
							<button type="reset" class="btn btn-danger" name="batal">Batal</button>
						</div>
					</div>
				</form>
	</div>
	
</div>
</div>