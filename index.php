<!DOCTYPE html>
<html lang="es-mx">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>TCDigital - principal</title>

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

		<?php include("navegacion.php");?>

		<!-- NAVIGATION -->
		<nav id="navigation">
			<!-- container -->
			<div class="container">
				<!-- responsive-nav -->
				<div id="responsive-nav">
					<!-- NAV -->
					<ul class="main-nav nav navbar-nav">
						<li class="active"><a href="">Principal</a></li>
						<li><a href="productos.php">Productos</a></li>
						<li><a href="admin.php">Ventas</a></li>
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
					<!-- shop -->
					<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="./img/shop01.png" alt="">
							</div>
							<div class="shop-body">
								<h3>LA MEJOR<br>TIENDA</h3>
								<!--a href="#" class="cta-btn">Comprar ahora <i class="fa fa-arrow-circle-right"></i></a-->
							</div>
						</div>
					</div>
					<!-- /shop -->

					<!-- shop -->
					<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="./img/shop03.png" alt="">
							</div>
							<div class="shop-body">
								<h3>LAS MEJORES<br>OFERTAS</h3>
								<!--a href="#" class="cta-btn">Comprar ahora <i class="fa fa-arrow-circle-right"></i></a-->
							</div>
						</div>
					</div>
					<!-- /shop -->

					<!-- shop -->
					<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="./img/shop02.png" alt="">
							</div>
							<div class="shop-body">
								<h3>LOS MEJORES<br>PRODUCTOS</h3>
								<!--a href="#" class="cta-btn">Comprar ahora <i class="fa fa-arrow-circle-right"></i></a-->
							</div>
						</div>
					</div>
					<!-- /shop -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<!-- section title -->
					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title">Productos a credito</h3>
							<div class="section-nav">
								<!--ul class="section-tab-nav tab-nav">
									<li class="active"><a data-toggle="tab" href="#tab1">Apple</a></li>
									<li><a data-toggle="tab" href="#tab1">Samsung</a></li>
									<li><a data-toggle="tab" href="#tab1">Motorola</a></li>
									<li><a data-toggle="tab" href="#tab1">Huawei</a></li>
								</ul-->
							</div>
						</div>
					</div>
					<!-- /section title -->

					<!-- Products tab & slick -->
					<div class="col-md-12">
						<div class="row">
							<div class="products-tabs">
								<!-- tab -->
								<div id="tab1" class="tab-pane active">
									<div class="products-slick" data-nav="#slick-nav-1">
												
<?php
//$db_servername="localhost";
//$db_username="root";
//$db_password="";
//$db_name="electromaster";
//$db_table_name="smartphone";

//$db_connection = mysqli_connect($db_servername, $db_username, $db_password, $db_name);
//if (!$db_connection) 
//{
	//die('No conectado');
//}

	$sqlCredito = "select * from ".$db_table_name." where tipopago = 1";
	$credito=$db_connection->query($sqlCredito);

	if ($credito->num_rows > 0)
	{
		// pintando datos en html
		while($row = $credito->fetch_assoc())
		{?>
			<div class="product">
				<form method="POST" action="detalle.php">
					<div class="product-img">
						<img src='./img/<?php echo "".$row["imagenid"]."" ?>' alt="">
						<div class="product-label">
							<?php
								if ($row["estado"] == 1)
								{
									$estado = "Nuevo";
								}
								if ($row["estado"] == 2)
								{
									$estado = "Usado";
								}
							?>
							<span class="new"><?php echo "$estado"; ?></span>
						</div>
					</div>
					<div class="product-body">
						<p class="product-category"><?php echo " ".$row["marca"]." " ?></p>
						<h3 class="product-name"><a href="#"><?php echo " ".$row["nombre"]." " ?></a></h3>
						<h4 class="product-price"> $<?php echo " ".$row["descuento"]." " ?> <del class="product-old-price"> $<?php echo " ".$row["precio"]." " ?> </del></h4>
						<div class="product-rating">
							<?php
							for ($x = 0; $x < $row["stars"]; $x++)
							{?>
								<i class="fa fa-star"></i>
								<?php
							}

							$starsBlancas = 5 - $x;
							for ($i=0; $i < $starsBlancas; $i++)
								{ ?>
									<i class="fa fa-star-o"></i>
								<?php
							}?>
						</div>
					</div>
					<div class="add-to-cart" href="detalle.php">
						<!-- style="display: none" -->
						<input type="text" name = numero style="display: none" value="<?php echo " ".$row["smartphoneid"]." " ?>">
						<button class="add-to-cart-btn" type="submit"><i class="fa fa-shopping-cart"></i>Ver detalle</button>
					</div>
				</form>
			</div>
			<?php
		}
	}
	else 
	{
		echo "No se cuenta con artículos para su venta";
	}
?>
									</div>
									<div id="slick-nav-1" class="products-slick-nav"></div>
								</div>
								<!-- /tab -->
							</div>
						</div>
					</div>
					<!-- Products tab & slick -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- HOT DEAL SECTION -->
		<div id="hot-deal" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<div class="hot-deal">
							<ul class="hot-deal-countdown">
								<li>
									<div>
										<h3>10</h3>
										<span>Calidad</span>
									</div>
								</li>
								<li>
									<div>
										<h3>10</h3>
										<span>Atención</span>
									</div>
								</li>
								<li>
									<div>
										<h3>10</h3>
										<span>Confianza</span>
									</div>
								</li>
								<li>
									<div>
										<h3>10</h3>
										<span>Recomendar</span>
									</div>
								</li>
							</ul>
							<h2 class="text-uppercase">Distribuidor mayorista</h2>
							<p>Años de experiencia en el mercado</p>
							<a class="primary-btn cta-btn" href="productos.php">Comprar</a>
						</div>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /HOT DEAL SECTION -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- section title -->
					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title">Productos a contado</h3>
							<div class="section-nav">
								<!--ul class="section-tab-nav tab-nav">
									<li class="active"><a data-toggle="tab" href="#tab1">Apple</a></li>
									<li><a data-toggle="tab" href="#tab1">Samsung</a></li>
									<li><a data-toggle="tab" href="#tab1">Motorola</a></li>
									<li><a data-toggle="tab" href="#tab1">Huawei</a></li>
								</ul-->
							</div>
						</div>
					</div>
					<!-- /section title -->

					<!-- Products tab & slick -->
					<div class="col-md-12">
						<div class="row">
							<div class="products-tabs">
								<!-- tab -->
								<div id="tab2" class="tab-pane fade in active">
									<div class="products-slick" data-nav="#slick-nav-2">
									<!-- product -->
										<?php
										if (!$db_connection) 
										{
											die('No conectado');
										}
											$sqlContado = "select * from ".$db_table_name." where tipopago = 2";
											$contado=$db_connection->query($sqlContado);

										if ($contado->num_rows > 0)
										{
											while($row = $contado->fetch_assoc())
											{
												?>
												<div class="product">
													<form method="POST" action="detalle.php">
														<div class="product-img">
															<img src='./img/<?php echo "".$row["imagenid"]."" ?>' alt="">
															<div class="product-label">
																<!-- Comentado -->
																<!--span class="new">Nuevo</span-->
																<?php
																	if ($row["estado"] == 1)
																	{
																		$estado = "Nuevo";
																	}
																	if ($row["estado"] == 2)
																	{
																		$estado = "Usado";
																	}
																?>
																<span class="new"><?php echo "$estado"; ?></span>
															</div>
														</div>
														<div class="product-body">
															<p class="product-category"><?php echo " ".$row["marca"]." " ?></p>
															<h3 class="product-name"><a href="#"><?php echo " ".$row["nombre"]." " ?></a></h3>
															<h4 class="product-price"> $<?php echo " ".$row["descuento"]." " ?>
																<del class="product-old-price"> $<?php echo " ".$row["precio"]." " ?> </del>
															</h4>

															<div class="product-rating">
																<?php
																for ($y = 0; $y < $row["stars"]; $y++)
																	{?>
																		<i class="fa fa-star"></i>
																		<?php
																	}
																$starsBlancasY = 5 - $y;
																for ($l=0; $l < $starsBlancasY; $l++)
																	{ ?>
																		<i class="fa fa-star-o"></i>
																		<?php
																	}?>
															</div>
														</div>
														<div class="add-to-cart">
															<input type="text" name = numero style="display: none" value="<?php echo " ".$row["smartphoneid"]." " ?>">
															<button class="add-to-cart-btn" type="submit"><i class="fa fa-shopping-cart"></i>Ver detalle</button>
														</div>
												</form>
											</div>
											<?php											}
										}
										?>
									<!-- /product -->
									</div>
									<div id="slick-nav-2" class="products-slick-nav"></div>
								</div>
								<!-- /tab -->
							</div>
						</div>
					</div>
					<!-- /Products tab & slick -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- SECTION -->
		<!--div class="section">
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-xs-6">
						<div class="section-title">
							<h4 class="title">Top ventas</h4>
							<div class="section-nav">
								<div id="slick-nav-3" class="products-slick-nav"></div>
							</div>
						</div>

						<div class="products-widget-slick" data-nav="#slick-nav-3">
							<div>
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/product07.png" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Category</p>
										<h3 class="product-name"><a href="#">product name goes here</a></h3>
										<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/product08.png" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Category</p>
										<h3 class="product-name"><a href="#">product name goes here</a></h3>
										<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>

								<div class="product-widget">
									<div class="product-img">
										<img src="./img/product09.png" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Category</p>
										<h3 class="product-name"><a href="#">product name goes here</a></h3>
										<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>
							</div>

							<div>
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/product01.png" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Category</p>
										<h3 class="product-name"><a href="#">product name goes here</a></h3>
										<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>

								<div class="product-widget">
									<div class="product-img">
										<img src="./img/product02.png" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Category</p>
										<h3 class="product-name"><a href="#">product name goes here</a></h3>
										<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>

								<div class="product-widget">
									<div class="product-img">
										<img src="./img/product03.png" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Category</p>
										<h3 class="product-name"><a href="#">product name goes here</a></h3>
										<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-4 col-xs-6">
						<div class="section-title">
							<h4 class="title">Top ventas</h4>
							<div class="section-nav">
								<div id="slick-nav-4" class="products-slick-nav"></div>
							</div>
						</div>

						<div class="products-widget-slick" data-nav="#slick-nav-4">
							<div>
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/product04.png" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Category</p>
										<h3 class="product-name"><a href="#">product name goes here</a></h3>
										<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>

								<div class="product-widget">
									<div class="product-img">
										<img src="./img/product05.png" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Category</p>
										<h3 class="product-name"><a href="#">product name goes here</a></h3>
										<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>

								<div class="product-widget">
									<div class="product-img">
										<img src="./img/product06.png" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Category</p>
										<h3 class="product-name"><a href="#">product name goes here</a></h3>
										<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>
							</div>

							<div>
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/product07.png" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Category</p>
										<h3 class="product-name"><a href="#">product name goes here</a></h3>
										<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>

								<div class="product-widget">
									<div class="product-img">
										<img src="./img/product08.png" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Category</p>
										<h3 class="product-name"><a href="#">product name goes here</a></h3>
										<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>

								<div class="product-widget">
									<div class="product-img">
										<img src="./img/product09.png" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Category</p>
										<h3 class="product-name"><a href="#">product name goes here</a></h3>
										<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="clearfix visible-sm visible-xs"></div>

					<div class="col-md-4 col-xs-6">
						<div class="section-title">
							<h4 class="title">Top ventas</h4>
							<div class="section-nav">
								<div id="slick-nav-5" class="products-slick-nav"></div>
							</div>
						</div>

						<div class="products-widget-slick" data-nav="#slick-nav-5">
							<div>
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/product01.png" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Category</p>
										<h3 class="product-name"><a href="#">product name goes here</a></h3>
										<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>

								<div class="product-widget">
									<div class="product-img">
										<img src="./img/product02.png" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Category</p>
										<h3 class="product-name"><a href="#">product name goes here</a></h3>
										<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>

								<div class="product-widget">
									<div class="product-img">
										<img src="./img/product03.png" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Category</p>
										<h3 class="product-name"><a href="#">product name goes here</a></h3>
										<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>

							</div>

							<div>
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/product04.png" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Category</p>
										<h3 class="product-name"><a href="#">product name goes here</a></h3>
										<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>

								<div class="product-widget">
									<div class="product-img">
										<img src="./img/product05.png" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Category</p>
										<h3 class="product-name"><a href="#">product name goes here</a></h3>
										<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>

								<div class="product-widget">
									<div class="product-img">
										<img src="./img/product06.png" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Category</p>
										<h3 class="product-name"><a href="#">product name goes here</a></h3>
										<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div-->
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