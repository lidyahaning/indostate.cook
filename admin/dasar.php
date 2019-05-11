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
	
</head>

<body>			
		<nav class="navbar navbar-inverse">
			<div class="container-fluid">
				<div class="navbar-header">
					<a href="../index.php"><h1><b>IndoState.Cook</b></h1></a>
				</div>
				<ul class="nav navbar-nav">
					<li></li>
				</ul>
		  </div>
		</nav>
		
		<?php
		
			$page = $_REQUEST['page'];	/* gets the variable $page */
			if ($page) {
				include("$page.php");
			}
		?>	
	
	
    <!-- jQuery -->
	<script src="template/js/jquery.js"></script>
    <!--script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script-->

    <!-- Bootstrap Core JavaScript -->
    <script src="template/js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>


	
</body>

</html>