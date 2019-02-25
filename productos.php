<!DOCTYPE html>
<html lang="es-mx">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>TCDigital - productos</title>

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

    </head>
	<body>

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
						<li class="active"><a href="">Productos</a></li>
						<li><a href="#">Ventas</a></li>
						<!--li><a href="#">Compras</a></li-->
					</ul>
					<!-- /NAV -->
				</div>
				<!-- /responsive-nav -->
			</div>
			<!-- /container -->
		</nav>
		<!-- /NAVIGATION -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- STORE -->
						<!-- store products -->
						<div class="row">
							<!-- product -->
							<?php
							$sqlCredito = "select * from ".$db_table_name;
							$credito=$db_connection->query($sqlCredito);
							if ($credito->num_rows > 0)
							{
							// pintando datos en html
								while($row = $credito->fetch_assoc())
									{?>
										<div class="col-md-4 col-xs-6">
											<div class="product">
												<div class="product-img">
													<img src='./img/<?php echo "".$row["imagenid"]."" ?>' alt="">
													<div class="product-label">
														<span class="new">Nuevo</span>
													</div>
												</div>
												<div class="product-body">
													<p class="product-category"><?php echo " ".$row["marca"]." " ?></p>
													<h3 class="product-name"><a href="#"><?php echo " ".$row["nombre"]." " ?></a></h3>
													<h4 class="product-price"> $<?php echo " ".$row["descuento"]." " ?> <del class="product-old-price"> $<?php echo " ".$row["precio"]." " ?> </del></h4>
													<div class="product-rating">
														<i class="fa fa-star"></i><i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star-o"></i>
													</div>
													<div class="product-btns">
														<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">Favoritos</span></button>
														<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">Comparar</span></button>
														<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">Vista rápida</span></button>
													</div>
												</div>
												<div class="add-to-cart">
													<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i>Agregar al carrito</button>
												</div>
											</div>
											<div class="clearfix visible-lg visible-md"></div>
										</div>
										<?php
									}
								}
								else 
								{
									echo "No se cuenta con artículos para su venta";
								}
								$db_connection->close();
								?>
								<!-- /product -->
							</div>
							<!-- /store products -->
							<!-- store bottom filter -->
							<div class="store-filter clearfix">
								<span class="store-qty">Showing 20-100 products</span>
								<ul class="store-pagination">
									<li class="active">1</li>
									<li><a href="#">2</a></li>
									<li><a href="#">3</a></li>
									<li><a href="#">4</a></li>
									<li><a href="#"><i class="fa fa-angle-right"></i></a></li>
								</ul>
							</div>
							<!-- /store bottom filter -->
						</div>
						<!-- /STORE -->
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
