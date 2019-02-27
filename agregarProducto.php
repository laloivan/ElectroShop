<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>Electro - HTML Ecommerce Template</title>

 		<!-- Google font -->
 		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

 		<!-- Bootstrap -->
 		<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>

 		<!-- Slick -->
 		<link type="text/css" rel="stylesheet" href="css/slick.css"/>
 		<link type="text/css" rel="stylesheet" href="css/slick-theme.css"/>

 		<!-- nouislider -->
 		<link type="text/css" rel="stylesheet" href="css/nouislider.min.css"/>

 		<!-- Font Awesome Icon -->
 		<link rel="stylesheet" href="css/font-awesome.min.css">

 		<!-- Custom stlylesheet -->
 		<link type="text/css" rel="stylesheet" href="css/style.css"/>

 		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
 		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
 		<!--[if lt IE 9]>
 		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
 		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
 		<![endif]-->
 		<script type="text/javascript">
		function login()
		{
			//var usuario = document.getElementById('textbox_id').value;
			var pass =  document.getElementById('pass').value
			if(pass = '1234567')
			{
				location.replace("http://localhost/electro-master/")
			}
			else
			{
				$( "#al" ).show( "slow" );
			}
		}
		function oculta()
		{
			$( "#al" ).hide( "fast" );
		}
		</script>

    </head>
	<body>
		<!-- HEADER -->
		<?php include("navegacion.php");?>

		<!-- NAVIGATION -->
		<nav id="navigation">
			<!-- container -->
			<div class="container">
				<!-- responsive-nav -->
				<div id="responsive-nav">
					<!-- NAV -->
					<ul class="main-nav nav navbar-nav">
						<li><a href="index.php">Principal</a></li>
						<li><a href="productos.php">Productos</a></li>
						<li class="active"><a href="agregarProducto.php">Ventas</a></li>
					</ul>
					<!-- /NAV -->
				</div>
				<!-- /responsive-nav -->
			</div>
			<!-- /container -->
		</nav>
		<!-- /NAVIGATION -->

		<!-- BREADCRUMB -->
		<div id="breadcrumb" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<h3 class="breadcrumb-header">Ventas</h3>
						<ul class="breadcrumb-tree">
							<li><a href="#">Agregar</a></li>
							<li class="active">Nuevo</li>
						</ul>
					</div>
				</div>
				<!-- /row -->
				<div class="col-md-9" style="text-align: center;">
					<div id="review-form" class="billing-details">
						<div class="section-title">
							<h3 class="title">Datos de producto</h3>
						</div>
						<form class="review-form" method="POST" action="upload.php" style="text-align: center;">
							<input class="input" type="text" name="nombre" placeholder="Nombre">
							<input class="input" type="text" name="marca" placeholder="Marca">
							<input class="input" type="text" name="precio" placeholder="Precio">
							<input class="input" type="text" name="descuento" placeholder="Descuento">
							<input class="input" type="text" name="stock" placeholder="Stock">
							<input class="input" type="text" name="stars" placeholder="Stars">
							<textarea class="input" type="text" name="descripcion" placeholder="Descripcion"></textarea>
							<input class="input" type="text" name="resumen" placeholder="Nombre">
							<input class="input" type="file" name="fileToUpload" placeholder="Subir imagen" id="fileToUpload">
							<button class="primary-btn" type="submit" name="submit" value="Agregar producto">Agregar producto</button>
						</form>
					</div>
				</div>
			</div>
			<!-- /container -->
		</div>
		<!-- /BREADCRUMB -->


		<!--div style="width:30%; margin: 0 auto">

			<form action="upload.php" method="post" enctype="multipart/form-data">
				Nombre:
				<input type="text" name="nombre"><br>
				Marca:
				<input type="text" name="marca"><br>
				Precio:
				<input type="text" name="precio"><br>
				Descuento:
				<input type="text" name="descuento"><br>
				Stock:
				<input type="text" name="stock"><br>
				Stars:
				<input type="text" name="stars"><br>
				Descripcion:
				<input type="text" name="descripcion"><br>
				Resumen:
				<input type="text" name="resumen">
				<hr>
			    Seleccione imagen:
			    <input type="file" name="fileToUpload" id="fileToUpload">
			    <input type="submit" value="Agregar producto" name="submit">
			</form>
		</div-->
		<!-- /SECTION -->
		<?php include("pie.php");?>

		<!-- jQuery Plugins -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/slick.min.js"></script>
		<script src="js/nouislider.min.js"></script>
		<script src="js/jquery.zoom.min.js"></script>
		<script src="js/main.js"></script>

	</body>
</html>
