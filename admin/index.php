<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Website Resep Masakan Indonesia">
    <meta name="author" content="Lidya Haning Iqrouri">

    <title>Kelola IndoState.Cook</title>

    <!-- Bootstrap Core CSS -->
    <link href="../template/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../template/css/admin.css" rel="stylesheet">
	
    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">
	
	<!-- jQuery -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="../template/js/jquery.js"></script>
    <!--script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script-->

    <!-- Bootstrap Core JavaScript -->
    <script src="../template/js/bootstrap.min.js"></script>
	
</head>

<body>			
		<nav class="navbar navbar-inverse">
			<div class="container-fluid">
				<div class="navbar-header">
					<a href="../index.php"><h1><b>IndoState.Cook</b></h1></a>
				</div>
		  </div>
		</nav>
		
		<div class='container'>
		
		<?php
			session_start();		
			if(isset($_SESSION['admin']))
			{
				echo "
					<center><h1>B E R A N D A</h1></center>
					<br><hr>
					<div class='beranda'>
					<p align='center'>
						<button type='button' class='btn btn-default btn-lg'><a href='dasar.php?page=anggota'>KELOLA  DATA</a></button>
						</p>";
						?>
						
						<center>
						<div class="btn-group">
							<button type="button" data-toggle="dropdown" class="btn btn-default dropdown-toggle">PENGATURAN <span class="caret"></span></button>
							<ul class="dropdown-menu">
								<li>
									<a href="dasar.php?page=edit_admin">
									Edit Username & Password
									</a>
								</li>
								<li class="divider"></li>
								<li>
									<a href="dasar.php?page=keluar">
									Keluar
									</a>
								</li>
							</ul>
						</div>
						</center>
						
			<?php
					
			}
			else 
			{
				include("login.php");
				
			}
		?>
		</div>
		
		<?php
		
			$page = isset ($_GET['page']) ? $_GET['page'] :null;	/* gets the variable $page */
			if ($page) {
				include("$page.php");
			}
		?>	
	
	

	
</body>

</html>