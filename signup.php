<script type="text/javascript" src="template/js/jquery-1.2.6.min.js"></script>
<script type="text/javascript">
//------------------------------------ RE-TYPE PASSWORD -------------------------------
function checkPass(){
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

//------------------------------------ CEK USERNAME -------------------------------
pic1 = new Image(16, 16); 
pic1.src = "loader.gif";

$(document).ready(function(){
     $("#username").change(function(){  
        var username = $("#username").val();
        $("#status").html("<img src='img/loader.gif'>Cek username ...");
        if(username==''){
          $("#status").html('username tidak boleh kosong');
          $("#username").css('border', '3px #C33 solid');
        }else{
			$.ajax({
				type: "POST", 
				url: "cek_username.php", 
				data: "username="+username, 
				success:function(data){ 
					if(data==0){
						$("#status").html('<img src="img/tick.gif">');
						$("#username").css('border', '3px #090 solid');
					}else{
						$("#status").html('<font color="red"><span class="glyphicon glyphicon-remove"></span> Username telah digunakan</font>');
						$("#username").css('border', '3px #C33 solid');
					}
				} 
			});
		}
     });
});
</script>
	<div class="container">
		<div class="content">
			<center>
				<h1>Daftar</h1>
				<hr style="max-width:580px;">
			</center>
			<br>
			
			<div class="sign">
			Buat akun IndoState.Cook anda<br><br>
				<form role="form" action="simpan_daftar.php" method="post">
					<div class="form-group">
						<label for="nama">Nama :</label>
						<input type="" class="form-control" name="nama" required>
					</div>
					<div class="form-group">
						<label for="username">Username :</label>
						<input type="username" class="form-control" name="username" id="username" required>
						<div id="status"></div>
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
					<div class="form-group">
						<label for="email">E-mail :</label>
						<input type="" class="form-control" name="email" required>
					</div>
					<div class="form-group">
						<label for="jkel">Jenis Kelamin :</label><br>
						<label class="radio-inline">
							<input type="radio" name="jkel" value="Pria" >Pria
						</label>
						<label class="radio-inline">
							<input type="radio" name="jkel" value="Wanita" checked>Wanita
						</label>
					</div>
					
					<br>
					<div class="form-group">
						<button type="submit" class="btn btn-primary" name="daftar" id="kirim">Daftar</button>
						<button type="reset" class="btn btn-danger" name="batal">Batal</button>
					</div>
				</form>
</div>
			
			
</div>
</div>