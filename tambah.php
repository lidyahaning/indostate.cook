<script type="text/javascript" src="template/js/jquery.js"></script>
<script type="text/javascript">
//------------------------------------ CEK NAMA RESEP -------------------------------
pic1 = new Image(16, 16); 
pic1.src = "loader.gif";

$(document).ready(function(){
     $("#nama_resep").change(function(){  
        var nama_resep = $("#nama_resep").val();
        $("#status").html("<img src='img/loader.gif'>Cek Nama Resep ...");
        if(nama_resep==''){
          $("#status").html('Nama Resep tidak boleh kosong');
          $("#nama_resep").css('border', '3px #C33 solid');
        }else{
			$.ajax({
				type: "POST", 
				url: "cek_nama_resep.php", 
				data: "nama_resep="+nama_resep, 
				success:function(data){ 
					if(data==0){
						$("#status").html('<img src="img/tick.gif">');
						$("#nama_resep").css('border', '3px #090 solid');
					}else{
						$("#status").html('<font color="red"><span class="glyphicon glyphicon-remove"></span> Resep ini sudah ada</font>');
						$("#nama_resep").css('border', '3px #C33 solid');
					}
				} 
			});
		}
     });
});

 //------------------------------------- TEXTBOX BAHAN ---------------------------------------
$(document).ready(function(){

    var counter = 2;
		
    $("#addButton").click(function () {
				
	if(counter>30){
            alert("Only 30 textboxes allow");
            return false;
	}   
		
	var newTextBoxDiv = $(document.createElement('div'))
	     .attr("id", 'TextBoxDiv' + counter);
            
	newTextBoxDiv.after().html(counter + '.' +'<input type="text" name="bahan'+ counter +'" class="form-control" id="textbox' + counter + '">');
            
	newTextBoxDiv.appendTo("#TextBoxesGroup");
	
				
	counter++;
     });

     $("#removeButton").click(function () {
	if(counter==1){
          alert("Tidak Ada Bahan yang Bisa Dihapus");
          return false;
       }   
        
	counter--;
			
        $("#TextBoxDiv" + counter).remove();
			
     });
		
     $("#getButtonValue").click(function () {
		
	var msg = '';
	for(i=1; i<counter; i++){
   	  msg += "\n Textbox #" + i + " : " + $('#textbox' + i).val();
	}
    	  alert(msg);
     });
  });
  //------------------------------------- TEXTBOX CARA ---------------------------------------
 $(document).ready(function(){

    var counter = 2;
		
    $("#addCara").click(function () {
				
		if(counter>30){
				alert("Only 30 textboxes allow");
				return false;
		}   
			
		var newCaraDiv = $(document.createElement('div'))
			 .attr("id", 'Cara' + counter);
					
		newCaraDiv.after().html(counter + ' .' +'<textarea name="cara'+ counter +'" class="form-control" rows="3" id="textbox2' + counter + '" >');
				
		newCaraDiv.appendTo("#CaraGroup");
		
					
		counter++;
     });

     $("#removeCara").click(function () {
	if(counter==1){
          alert("Tidak Ada Langkah yang Bisa Dihapus");
          return false;
       }   
        
	counter--;
			
        $("#Cara" + counter).remove();
			
     });
		
     $("#getCaraValue").click(function () {
		
	var msg = '';
	for(i=1; i<counter; i++){
   	  msg += "\n Cara #" + i + " : " + $('#Cara' + i).val();
	}
    	  alert(msg);
     });
  });
  
 //------------------------------------- TEXTBOX PENYAJIAN ---------------------------------------
 $(document).ready(function(){

    var counter = 2;
		
    $("#addSaji").click(function () {
				
	if(counter>30){
            alert("Only 30 textboxes allow");
            return false;
	}   
		
	var newSajiDiv = $(document.createElement('div'))
	     .attr("id", 'Saji' + counter);
                
	newSajiDiv.after().html(counter + '.' +'<textarea name="saji'+ counter +'" class="form-control" rows="3" id="textbox2' + counter + '">');
            
	newSajiDiv.appendTo("#SajiGroup");
	
				
	counter++;
     });

     $("#removeSaji").click(function () {
	if(counter==1){
          alert("Tidak Ada Langkah yang Bisa Dihapus");
          return false;
       }   
        
	counter--;
			
        $("#Saji" + counter).remove();
			
     });
		
     $("#getSajiValue").click(function () {
		
	var msg = '';
	for(i=1; i<counter; i++){
   	  msg += "\n Saji #" + i + " : " + $('#Saji' + i).val();
	}
    	  alert(msg);
     });
  });
</script>
<div class="container">
		<div class="content">
		<div class="tambah">
			<center>
				<h1>Tambah Resep</h1>
				<hr style="max-width:580px;">
			</center>
			<br>
			
			
				<form role="form" action="simpan_resep.php" method="post" enctype="multipart/form-data">
					<div class="form-group">
						<label for="nama_resep">Nama Resep :</label>
						<input type="" class="form-control" name="nama_resep" id="nama_resep" required>
						<div id="status"></div>
					</div>
					<div class="form-group">
						<label for="foto_resep">Foto Masakan :</label>
						<br><img id="foto" src="#" width='220' height='200' alt="your image" /><br>
						<input type="file" accept="imgresep/*" name="foto_resep" id="foto_resep">
					</div>	
					
<!------------------------------------- PREVIEW IMAGE SEBELUM UPLOAD (JavaScript) ------------------------------>			
		<script>
		function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('#foto').attr('src', e.target.result);
            }
            
            reader.readAsDataURL(input.files[0]);
        }
    }
    
    $("#foto_resep").change(function(){
        readURL(this);
    });
	</script>

<!------------------------------------------------ KETERANGAN MASAKAN ------------------------------------------>					
					<table border="0" width="800">
					<tr>
						<td colspan="2">
						<div class="form-group">
							<label for="jenis">Jenis Masakan:</label>
							<select name="jenis" class="form-control" id="jenis">
								<option value="-"> --- </option>
								<option value="Makanan Pembuka">Makanan Pembuka</option>
								<option value="Makanan Utama">Makanan Utama</option>
								<option value="Makanan Penutup">Makanan Penutup</option>
								<option value="Minuman">Minuman</option>
								<option value="Sambal">Sambal</option>
							</select>
						</div>
						</td>
						<td width="40">
						</td>
						<td colspan="1">
							<div class="form-group">
							<label for="bahan">Bahan Utama Masakan :</label>
							<select name="bahan" class="form-control" id="bahan">
								<option value="-"> --- </option>
								<option value="Daging">Daging</option>
								<option value="Ikan">Ikan</option>
								<option value="Mie">Mie</option>
								<option value="Nasi">Nasi</option>
								<option value="Sayuran">Sayuran</option>
								<option value="Tepung">Tepung</option>
								<option value="Tepung">Umbi-imbian</option>
							</select>
						</div>
						</td>
						<td width="20">
						</td>
						<td colspan="1">
							<div class="form-group">
							<label for="cara">Teknik Memasak :</label>
							<select name="cara" class="form-control" id="cara">
								<option value="-"> --- </option>
								<option value="Bakar/Panggang">Bakar/Panggang</option>
								<option value="Goreng">Goreng</option>
								<option value="Kukus">Kukus</option>
								<option value="Rebus">Rebus</option>
								<option value="Tumis">Tumis</option>
							</select>
						</div>
						</td>
					</tr>
					<tr>
						<td colspan="2">
						<div class="form-group">
							<label for="asal">Asal Masakan (Pulau) :</label>
							<select name="asal" class="form-control" id="asal">
								<option value="-"> --- </option>
								<option value="Bali NTB NTT">Bali NTB NTT</option>
								<option value="Kalimantan">Kalimantan</option>
								<option value="Jawa">Jawa</option>
								<option value="Papua">Papua</option>
								<option value="Sulawesi">Sulawesi</option>
								<option value="Sumatera">Sumatera</option>
							</select>
						</div>
						</td>
						<td>
						</td>
						<td>
						<div class="form-group">
							<label for="waktu"><span class="glyphicon glyphicon-time"></span> Waktu Masak :</label>
							<input type="" class="form-control" name="waktu">
						</div>
						</td>
						<td width="20">
						</td>
						<td>
						<div class="form-group">
							<label for="porsi"><span class="glyphicon glyphicon-cutlery"></span> Porsi (Orang) :</label>
							<input type="" class="form-control" name="porsi">
						</div>
						</td>
					</tr>
					</table>
					
					<div class="form-group">
						<label for="deskripsi">Deskripsi Resep : </label>
						<textarea class="form-control" rows="5" name="deskripsi"></textarea>
					</div>
					
<!----------------------------------------- BAHAN DAN CARA -------------------------------------------------------------->
					<div class="form-group">
						<label for="bahan_resep">Alat dan Bahan :</label>
						<div id='TextBoxesGroup'>
							<div id="TextBoxDiv1">
							1. <input type="text" name="bahan1" class="form-control" required>
							</div>
						</div>
						<br><button type="button" id="addButton" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-plus-sign"></span> Tambah Bahan</button>
						<button type="button" id="removeButton" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-minus-sign"></span> Hapus Bahan</button>
					</div>
					
					<div class="form-group">
						<label for="cara_resep">Cara Memasak :</label>
						<div id='CaraGroup'>
							<div id="Cara1">
							1. <textarea class="form-control" rows="3" name="cara1" required></textarea>
							</div>
						</div>
						<br><button type="button" id="addCara" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-plus-sign"></span> Tambah Langkah</button>
						<button type="button" id="removeCara" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-minus-sign"></span> Hapus Langkah</button>
						
					</div>
					
<!-------------------------------------------------- KETERANGAN TAMBAHAN --------------------------------------------------------->
					<div class="form-group">
						<label for="saji_resep">Cara Penyajian :</label>
						<div id='SajiGroup'>
							<div id="Saji1">
							1. <textarea class="form-control" rows="3" name="saji1"></textarea>
							</div>
						</div>
						<br><button type="button" id="addSaji" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-plus-sign"></span> Tambah Opsi Penyajian</button>
						<button type="button" id="removeSaji" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-minus-sign"></span> Hapus Opsi Penyajian</button>
					</div>
					
					<div class="form-group">
						<label for="tips">Informasi Tambahan (Tips) :</label>
						<br>
						<i>Anda dapat menuliskan informasi tambahan seperti informasi tempat bahan masakan (yang tidak umum) dijual atau tips agar hasil masakan maksimal.</i>
						<textarea class="form-control" rows="4" name="tips"></textarea>
					</div>
					
					
					<div class="form-group">
					<p align="right">
						<button onclick="return confirm('Dengan menambahkan resep ini, Anda mengakui bahwa informasi yang ada di dalamnya adalah benar dan sesuai.')" type="submit" class="btn btn-primary" name="tambah">Tambah Resep</button>
						<button type="reset" class="btn btn-danger" name="batal">Batal</button>
					</p>
					</div>
					
					
					</form>
						
						
					
			</div>
		</div>
	</div>