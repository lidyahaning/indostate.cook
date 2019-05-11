<?php
	require "conn.php";
			session_start();
			$username = $_SESSION['admin'];
?>

<div class="container">
		<div class="content">
			<center>
				<h1>Ubah Username & Password</h1>
				<hr style="max-width:580px;">
			</center>
			<br>
			
			<div class="edit">
				<div class="col-sm-3">
				</div>
				<div class="col-sm-6">
				<form role="form" action="simpan_admin.php" method="post">
					<div class="form-group">
						<label for="username"><p align="left">Username :</p></label>
						<input class="form-control" name="username" value="<?=$username;?>" required>
					</div>
					<div class="form-group">
						<label for="pwd">Password :</label>
						<input type="password" class="form-control" name="pass" id="pass" required>
					</div>
					<div class="form-group">
						<label for="pwd2">Re-type Password :</label>
						<input type="password" class="form-control" name="pass2" id="pass2" onkeyup="checkPass(); return false;" required>
						<span id="confirmMessage" class="confirmMessage"></span>
					</div>
					<br>
					<div class="form-group">
						<button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
						<button type="button" class="btn btn-danger" name="batal"><a href="index.php">Batal</a></button>
					</div>
				</div>
				</form>
				</p>
				

				
			</div>
			
		</div>
</div>

<script type="text/javascript" src="../template/js/jquery-1.2.6.min.js"></script>
<script type="text/javascript">
//------------------------------------ RE-TYPE PASSWORD -------------------------------
function checkPass()
{
    //Store the password field objects into variables ...
    var pass = document.getElementById('pass');
    var pass2 = document.getElementById('pass2');
    //Store the Confimation Message Object ...
    var message = document.getElementById('confirmMessage');
    //Set the colors we will be using ...
    var goodColor = "#66cc66";
    var badColor = "#ff6666";
    //Compare the values in the password field 
    //and the confirmation field
    if(pass.value == pass2.value){
        //The passwords match. 
        //Set the color to the good color and inform
        //the user that they have entered the correct password 
        pass2.style.backgroundColor = goodColor;
        message.style.color = goodColor;
        message.innerHTML = "Passwords Sesuai"
    }else{
        //The passwords do not match.
        //Set the color to the bad color and
        //notify the user.
        pass2.style.backgroundColor = badColor;
        message.style.color = badColor;
        message.innerHTML = "Passwords Tidak Sesuai"
    }
}
</script>