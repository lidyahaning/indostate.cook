<script src="ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="template/js/jquery-1.2.6.min.js"></script>
<script type="text/javascript">
//------------------------------------ CEK JUDUL TOPIK -------------------------------
pic1 = new Image(16, 16); 
pic1.src = "loader.gif";

$(document).ready(function(){
     $("#judul").change(function(){  
        var judul = $("#judul").val();
        $("#status").html("<img src='img/loader.gif'>Cek Topik Diskusi ...");
        if(judul==''){
          $("#status").html('Judul Topik tidak boleh kosong');
          $("#judul").css('border', '3px #C33 solid');
        }else{
			$.ajax({
				type: "POST", 
				url: "cek_judul_topik.php", 
				data: "judul="+judul, 
				success:function(data){ 
					if(data==0){
						$("#status").html('<img src="img/tick.gif">');
						$("#judul").css('border', '3px #090 solid');
					}else{
						$("#status").html('<font color="red"><span class="glyphicon glyphicon-remove"></span> Topik Diskusi ini sudah ada</font>');
						$("#judul").css('border', '3px #C33 solid');
					}
				} 
			});
		}
     });
});
</script>

<div class="container">
		<div class="content">
		<div class="create_topic">
			<center>
				<h1>Tambah Topik Diskusi</h1>
				<hr style="max-width:580px;">
			</center>
			<br>
			<p>
				<a href="dasar.php?page=forum"><span class="glyphicon glyphicon-chevron-left"></span> Forum Diskusi</a>
			</p>
					<div class="panel panel-default">
						<div class="panel-body">
							<form class="form-horizontal" action="simpan_topik.php" method="post" id="form1" name="form1">
								<div class="form-group">
									<label class="control-label col-sm-1" for="judul">Topik </label><label class="control-label col-sm-1">:</label>
									<div class="col-sm-10">
										<input type="text" class="form-control" id="judul" name="judul" required>
										<div id="status"></div>
									</div>
									
								</div>
								<div class="form-group">
									<label class="control-label col-sm-1" for="isi_artikel">Isi </label><label class="control-label col-sm-1">:</label>
									<div class="col-sm-10">
										<textarea class='form-control' id="isi_artikel" name="isi_artikel" rows="10" cols="80" required></textarea>
									</div>
								</div>
			
							
								<br>
								<div class="form-group"><center>
									<button onclick="return confirm('Dengan menambahkan topik ini, Anda mengakui bahwa informasi yang ada di dalamnya adalah sesuai.')" type="submit" class="btn btn-primary" name="Submit" value="Submit">Tambah Topik</button>
									<button type="reset" class="btn btn-danger" name="reset" value="reset">Batal</button>
									</center>
								</div>
							</form>
						</div>
					</div>
			
		</div>
	</div>
</div>

<script type="text/javascript">
//----------------------------------------- CKEDITOR --------------------------------------
if ( typeof CKEDITOR == 'undefined' )
{
	document.write(
		'CKEditor not found');
}
else
{
	var editor = CKEDITOR.replace( 'isi_artikel' );	

	
	CKFinder.setupCKEditor( editor, '' ) ;

	
};


</script>