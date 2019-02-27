<!DOCTYPE html>
<html lang="es-mx">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>TCDigital - detalle</title>

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
		//Recibiendo smartphoneid
			include("navegacion.php");
			//$smartphone = $_POST['numero'];

			if (isset($_POST['numero']))
			{
				$smartphone = $_POST['numero'];
				//echo "POST: $smartphone";
			}
			else
			{
				$smartphone = $_GET['numero'];
				//echo "GET: $smartphone";
			}

			$sql_producto =  "SELECT * FROM smartphone where smartphoneid = ".$smartphone;
  			$dataProducto=$db_connection->query($sql_producto);

  			$row = $dataProducto->fetch_assoc();
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
						<li class="active"><a href="productos.php">Productos</a></li>
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

		<!-- BREADCRUMB -->
		<div id="breadcrumb" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<ul class="breadcrumb-tree">
							<li><a href="#"> Productos </a></li>
							<li class="active"><a href="#"> Detalle </a></li>
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
					<!-- Product main img -->
					<div class="col-md-5 col-md-push-2">
						<div id="product-main-img">
							<div class="product-preview">
								<img src='./img/<?php echo "".$row["imagenid"]."" ?>' alt="">
							</div>
						</div>
					</div>
					<!-- /Product main img -->

					<!-- Product thumb imgs -->
					<div class="col-md-2  col-md-pull-5">
						<div id="product-imgs">
							<div class="product-preview">
								<img src='./img/<?php echo "".$row["imagenid"]."" ?>' alt="">
							</div>
						</div>
					</div>
					<!-- /Product thumb imgs -->

					<!-- Product details -->
					<div class="col-md-5">
						<div class="product-details">
							<form method="POST" action="comprando.php">
							<h2 class="product-name"><?php echo " ".$row["nombre"]." " ?></h2>
							<div>
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
								<a class="review-link" href="#"> Calificación de producto </a>
							</div>
							<div>
								<h3 class="product-price"> $<?php echo " ".$row["descuento"]." "?> <del class="product-old-price"> $<?php echo " ".$row["precio"]." "?></del></h3>
								<span class="product-available">En almacén: <?php echo " ".$row["stock"]." "?></span>
							</div>
							<p>
								<?php echo " ".$row["resumen"]." " ?>
								<?php $Marca =  "".$row["marca"]."" ?>
								<?php $SmartphoneID =  "".$row["smartphoneid"]."" ?>
							</p>
							<div class="add-to-cart">
								<input type="text" name = smartphoneid style="display: none" value="<?php echo " ".$row["smartphoneid"]." " ?>">
								<button class="add-to-cart-btn" type="submit"><i class="fa fa-shopping-cart"></i> Comprar </button>
							</div>

							<ul class="product-links">
								<li>Categoría:</li>
								<li><a href="#"><?php echo " ".$row["marca"]." "?></a></li>
								<li><a href="#"> / </a></li>
								<li><a href="#">Smartphones</a></li>
							</ul>

							<ul class="product-links">
								<li>Compartir:</li>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
								<li><a href="#"><i class="fa fa-envelope"></i></a></li>
							</ul>
							</form>
						</div>
					</div>
					<!-- /Product details -->

					<!-- Product tab -->
					<div class="col-md-12">
						<div id="product-tab">
							<!-- product tab nav -->
							<ul class="tab-nav">
								<li class="active"><a data-toggle="tab" href="#tab1">Descripción</a></li>
								<li><a data-toggle="tab" href="#tab2">Características</a></li>
								<li><a data-toggle="tab" href="#tab3">Reviews</a></li>
							</ul>
							<!-- /product tab nav -->

							<!-- product tab content -->
							<div class="tab-content">
								<!-- tab1  -->
								<div id="tab1" class="tab-pane fade in active">
									<div class="row">
										<div class="col-md-12">
											<p>
												<?php echo " ".$row['descripcion']." "?>
											</p>
										</div>
									</div>
								</div>
								<!-- /tab1  -->

								<!-- tab2  -->
								<div id="tab2" class="tab-pane fade in">
									<div class="row">
										<div class="col-md-12">
											<p>
												<?php echo " ".$row['caracteristicas']; ?>
											</p>
										</div>
									</div>
								</div>
								<!-- /tab2  -->

								<!-- tab3  -->
								<div id="tab3" class="tab-pane fade in">
									<div class="row">
										<!-- Reviews -->
										<div class="col-md-6">
											<div id="reviews">
												<ul class="reviews">
													<?php
													//Creando consultas
													$sql_productoReview =  "SELECT * FROM review where smartphoneid = ".$smartphone." ORDER BY ReviewID DESC LIMIT 3";
													//echo "$sql_productoReview";
													$dataProductoReviewData=$db_connection->query($sql_productoReview);
													$limite = $dataProductoReviewData->num_rows;
													$row = $dataProductoReviewData->fetch_assoc();
													while($row = $dataProductoReviewData->fetch_assoc())
													{
														?>
														<li>
															<div class="review-heading">
																<h5 class="name"><?php echo " ".$row["Nombre"]." " ?></h5>
																<p class="date"><?php echo " ".$row["Fecha"]." " ?></p>
																<div class="review-rating">
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star-o empty"></i>
																</div>
															</div>
															<div class="review-body">
																<p>
																	<?php echo " ".$row["Opinion"]." " ?>
																</p>
															</div>
														</li>
													<?php 
													}
													?>
												</ul>
												<!--ul class="reviews-pagination">
													<li class="active">1</li>
													<li><a href="#">2</a></li>
													<li><a href="#">3</a></li>
													<li><a href="#">4</a></li>
													<li><a href="#"><i class="fa fa-angle-right"></i></a></li>
												</ul-->
											</div>
										</div>
										<!-- /Reviews -->

										<!-- Review Form -->
										<div class="col-md-3">
											<div id="review-form">
												<form class="review-form" method="POST" action="review.php">
													<!-- style="display: none;" -->
													<input class="input" type="text" name="smartphoneid" style="display: none;" value="<?php echo " ".$row["smartphoneid"]." " ?>">
													<input class="input" type="text" name="nombre" placeholder="Nombre">
													<input class="input" type="text" name="email" placeholder="Email">
													<textarea class="input" type="text" name="opinion" placeholder="Opinión"></textarea>
													<div class="input-rating">
														<span> Calificación: </span>
														<div class="stars" type="text" name="calificacion">
															<input id="star5" name="rating" value="5" type="radio"><label for="star5"></label>
															<input id="star4" name="rating" value="4" type="radio"><label for="star4"></label>
															<input id="star3" name="rating" value="3" type="radio"><label for="star3"></label>
															<input id="star2" name="rating" value="2" type="radio"><label for="star2"></label>
															<input id="star1" name="rating" value="1" type="radio"><label for="star1"></label>
														</div>
													</div>
													<button class="primary-btn" href="detalle.php">Agregar</button>
												</form>
											</div>
										</div>
										<!-- /Review Form -->
									</div>
								</div>
								<!-- /tab3  -->
							</div>
							<!-- /product tab content  -->
						</div>
					</div>
					<!-- /product tab -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- Section -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<div class="col-md-12">
						<div class="section-title text-center">
							<h3 class="title">Productos relacionados</h3>
						</div>
					</div>

					<!-- product -->
					<?php
					if (!$db_connection) 
					{
						die('No conectado');
					}
						$sql_Relacionado = "select * from ".$db_table_name." where marca = '".$Marca."' and smartphoneid != '".$SmartphoneID."'";
						$DataRelacionado=$db_connection->query($sql_Relacionado);
						$row = $dataProducto->fetch_assoc();

					if ($DataRelacionado->num_rows > 0)
					{
						while($row = $DataRelacionado->fetch_assoc())
						{
							?>
							<div class="col-md-3 col-xs-6">
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
											<!-- Comentado porque no se utiliza -->
											<!--div class="product-btns">
												<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">Favoritos</span></button>
												<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">Comparar</span></button>
												<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">Vista rápida</span></button>
											</div-->
										</div>
										<div class="add-to-cart" href>
											<input type="text" name = numero style="display: none" value="<?php echo " ".$row["smartphoneid"]." " ?>">
											<button class="add-to-cart-btn" type="submit"><i class="fa fa-shopping-cart"></i>Ver detalles</button>
										</div>
									</form>
								</div>
							</div>
							<div class="clearfix visible-sm visible-xs"></div>
							<?php
						}
					}
					else
					{
						?>
						<h5><?php echo "No se encontraron más productos relacionados de la marca: ".$Marca; ?></h5>
						<?php
					}
					?>
					<!-- /product -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /Section -->

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
