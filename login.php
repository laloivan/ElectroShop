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
						<li><a href="#">Ventas</a></li>
						<li class="active"><a href="login.php">login</a></li>
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
						<h3 class="breadcrumb-header">Regular Page</h3>
						<ul class="breadcrumb-tree">
							<li><a href="#">Home</a></li>
							<li class="active">Blank</li>
						</ul>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /BREADCRUMB -->

		<!-- SECTION -->
		<div class="section" style="text-aling:center; margin: 0 auto">
			<!-- container -->


<div style="width:30%; margin: 0 auto">
	<form>
		<div id="al" class="alert alert-danger" role="alert" style="display: none">
			<a href="#" class="alert-link">Contraseña incorrecta</a>
		</div>
	  <div class="form-group">
	    <label for="exampleDropdownFormEmail2">Correo electronico</label>
	    <input onchange="oculta()" type="email" class="form-control" id="exampleDropdownFormEmail2" placeholder="email@ejemplo.com">
	  </div>
	  <div class="form-group">
	    <label for="exampleDropdownFormPassword2">Contraseña</label>
	    <input id="pass"  onchange="oculta()" type="password" class="form-control" id="exampleDropdownFormPassword2" placeholder="Contraseña">
	  </div>
	  <div class="form-group">
	    <div class="form-check">
	      <input type="checkbox" class="form-check-input" id="dropdownCheck2">
	      <label class="form-check-label" for="dropdownCheck2">
	        Recordarme
	      </label>
	    </div>
	  </div>
	</form>
	<button  onclick="login()" class="btn btn-secondary">Iniciar sesion</button>
</div>
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
