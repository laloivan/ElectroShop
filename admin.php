<!DOCTYPE html>
<html lang="es-mx">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>TCDigital - administración</title>

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

		<?php include("navegacion.php"); ?>

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
						<li class="active"><a href="admin.php">Ventas</a></li>
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
				<h2>Administración de productos</h2>
				  <p>Es posible administrar los productos que se requieran a través de esta tabla la cual permite agregar un nuevo producto y eliminar un producto.</p>
				  <table class="table">
				    <thead>
				      <tr>
				        <th>Opciones</th>
				        <th>Nombre</th>
				        <th>Marca</th>
				        <th>Precio</th>
				        <th>Descuento</th>
				      </tr>
				    </thead>
				    <tbody>
				      <!--tr-->
				      	<!--td></td-->
				      	<!--td class="success" ></td-->
				      	<!--td class="danger" ></td-->
				      	<!--td class="info" ></td-->
				      	<!--td class="warning" ></td-->
				      	<!--td class="active" ></td-->

				      	<?php
				      		$Cont = 0;
				      		$Estado = "";
							$sql_Productos = "select * from ".$db_table_name;
							$dataProductos=$db_connection->query($sql_Productos);
							if ($dataProductos->num_rows > 0)
							{
								//Pintando datos en html
								while($row = $dataProductos->fetch_assoc())
								{
									if ($Cont == 0) {
									$Estado = "";
									}
									if ($Cont == 1) {
									$Estado = "success";
									}
									if ($Cont == 2) {
									$Estado = "danger";
									}
									if ($Cont == 3) {
									$Estado = "info";
									}
									if ($Cont == 4) {
									$Estado = "warning";
									}
									if ($Cont == 5) {
									$Estado = "active";
									$Cont = -1;
									}
									$Cont = $Cont + 1;
									?>
									<tr>
										<td style="display: none;"><?php echo "".$row["smartphoneid"]."" ?></td>
										<td>
											<!--a href="" class="fa fa-arrow-circle-right">Eliminar</a-->
											<form method="POST" action="delete.php">
												<div class="add-to-cart">
													<input type="text" name = smartphoneid style="display: none" value="<?php echo "".$row["smartphoneid"]."" ?>">
													<a><button type="submit">Eliminar</button></a>
												</div>
											</form>
										</td>
										<td class='<?php echo " ".$Estado." " ?>'><?php echo " ".$row["nombre"]." " ?></td>
										<td class='<?php echo " ".$Estado." " ?>'><?php echo " ".$row["marca"]." " ?></td>
										<td class='<?php echo " ".$Estado." " ?>'><?php echo " ".$row["precio"]." " ?></td>
										<td class='<?php echo " ".$Estado." " ?>'><?php echo " ".$row["descuento"]." " ?></td>
									</tr>
									<?php
								}
							}
							else 
							{
								echo "No se cuenta con artículos para su venta";
							}
							?>
				      <!--/tr-->
				    </tbody>
				  </table>
				  <div class="product-details">
				  <form action="">
				  	<div class="add-to-cart">
				  		<input type="text" name = smartphoneid style="display: none" value="<?php echo " ".$row["smartphoneid"]." " ?>">
				  		<button class="add-to-cart-btn" type="submit"><i class="fa fa-shopping-cart"></i> Agregar </button>
				  	</div>
				  </form>
				  </div>
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