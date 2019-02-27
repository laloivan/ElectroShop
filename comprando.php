<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>TCDigital</title>

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
    </head>
	<body>

		<?php
		include("navegacion.php");
		if (isset($_POST['smartphoneid']))
		{
			$smartphone = $_POST['smartphoneid'];
			//echo "POST: $smartphone";
		}
		else
		{
			$smartphone = $_GET['smartphoneid'];
			//echo "GET: $smartphone";
		}

		$sql_producto =  "SELECT * FROM smartphone where smartphoneid = ".$smartphone;
		$dataProducto=$db_connection->query($sql_producto);

		$row = $dataProducto->fetch_assoc();

		$Nombre = $row["nombre"];
		$PrecioReal = $row["precio"];
		$PrecioDescuento = $row["descuento"];

		$Descuento = $PrecioReal - $PrecioDescuento;

		$PrecioFinal = $PrecioDescuento;

		?>

		<!-- NAVIGATION -->
		<nav id="navigation">
			<!-- container -->
			<div class="container">
				<!-- responsive-nav -->
				<div id="responsive-nav">
					<!-- NAV -->
					<ul class="main-nav nav navbar-nav">
						<li><a href="index.php">Principal</a></li>
						<li class="active"><a href="productos.html">Productos</a></li>
						<li><a href="#">Ventas</a></li>
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
						<h3 class="breadcrumb-header">Comprando</h3>
						<ul class="breadcrumb-tree">
							<li><a href="#">Producto</a></li>
							<li class="active">Compra</li>
						</ul>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /BREADCRUMB -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<div class="col-md-7">
						<!-- Billing Details -->
						<!--form method="POST" action="compra.php"-->
						<form method="POST" action="venta.php">
						<div class="billing-details">
							<div class="section-title">
								<h3 class="title">Datos de comprador</h3>
							</div>
							<div class="form-group">
								<input class="input" type="text" name="Nombre" placeholder="Nombre">
							</div>
							<div class="form-group">
								<input class="input" type="text" name="Apellido" placeholder="Apellido">
							</div>
							<div class="form-group">
								<input class="input" type="email" name="Email" placeholder="Email">
							</div>
							<div class="form-group">
								<input class="input" type="text" name="Direccion" placeholder="Dirección">
							</div>
							<div class="form-group">
								<input class="input" type="text" name="Ciudad" placeholder="Ciudad">
							</div>
							<div class="form-group">
								<input class="input" type="text" name="Pais" placeholder="País">
							</div>
							<div class="form-group">
								<input class="input" type="text" name="CodigoPostal" placeholder="Código postal">
							</div>
							<div class="form-group">
								<input class="input" type="tel" name="Telefono" placeholder="Teléfono">
							</div>
						</div>
						
						<!-- /Billing Details -->
					</div>

					<!-- Order Details -->
					<div class="col-md-5 order-details">
						
						<div class="section-title text-center">
							<h3 class="title">Su compra</h3>
						</div>
						<div class="order-summary">
							<div class="order-col">
								<div><strong>PRODUCTO</strong></div>
								<div><strong>TOTAL</strong></div>
							</div>
							<div class="order-products">
								<!-- Producto a comprar -->
								<div class="order-col">
									<div><?php echo " ".$row["nombre"]." " ?>(precio original)</div>
									<div>$<?php echo " ".$PrecioReal." " ?></div>
								</div>
								<div class="order-col">
									<div>Descuento del artículo</div>
									<div>$<?php echo " ".$Descuento." " ?></div>
								</div>
							</div>
							<div class="order-col">
								<div><strong>TOTAL</strong></div>
								<div><strong class="order-total">$<?php echo " ".$PrecioFinal." " ?></strong></div>
							</div>
						</div>
						<div class="payment-method">
							<div class="input-radio">
								<input type="radio" name="payment" id="payment-1">
								<label for="payment-1">
									<span></span>
									Efectico
								</label>
								<div class="caption">
									<p>Al seleccionar el pago en efectivo, se debe pagar con la entrega el producto.</p>
								</div>
							</div>
							<div class="input-radio">
								<input type="radio" name="payment" id="payment-2">
								<label for="payment-2">
									<span></span>
									Transferencia bancaria
								</label>
								<div class="caption">
									<p>Si la transferencia no se encuentra realizada en la entrega se cobrará una comisión por tranporte.</p>
								</div>
							</div>
						</div>
						<div class="input-checkbox">
							<input type="checkbox" id="terms">
							<label for="terms">
								<span></span>
								He leido y acepto los <a href="#">Terminos y condiciones</a>
							</label>
						</div>
						<div style="align-items: center;">
							<input type="text" name = smartphoneid style="display: none" value="<?php echo " ".$row["smartphoneid"]." " ?>">
							<button class="primary-btn order-submit" type="submit">Confirmar compra</button>
						</div>
						</form>
					</div>
					<!-- /Order Details -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- Se incluye el pie de página. -->
		<?php include("pie.php"); ?>

		<!-- jQuery Plugins -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/slick.min.js"></script>
		<script src="js/nouislider.min.js"></script>
		<script src="js/jquery.zoom.min.js"></script>
		<script src="js/main.js"></script>

	</body>
</html>
