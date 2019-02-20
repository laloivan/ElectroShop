<!-- HEADER -->
<header>
<script type="text/javascript">
		function buscar()
    {
      var categoria = document.getElementById('cat').value;
      var valor =  document.getElementById('val').value
      //alert("c:" + categoria + " v:" + valor);
      location.replace("http://localhost/xdxd/ElectroShop/index.php?cat="+categoria+ "&val="+valor)
    }
</script>
  <!-- TOP HEADER -->
  <div id="top-header">
    <div class="container">
      <ul class="header-links pull-left">
        <li><a href="#"><i class="fa fa-phone"></i> 9999-06-30-65</a></li>
        <li><a href="#"><i class="fa fa-envelope-o"></i> ruscanga@tcdigital.com</a></li>
        <li><a href="#"><i class="fa fa-map-marker"></i> 1734 Stonecoal Road</a></li>
      </ul>
      <ul class="header-links pull-right">
        <li><a href="#"><i class="fa fa-dollar"></i> MXN</a></li>
        <li><a href="#"><i class="fa fa-user-o"></i> Mi cuenta</a></li>
      </ul>
    </div>
  </div>
  <!-- /TOP HEADER -->

  <!-- MAIN HEADER -->
  <div id="header">
    <!-- container -->
    <div class="container">
      <!-- row -->
      <div class="row">
        <!-- LOGO -->
        <div class="col-md-3">
          <div class="header-logo">
            <a href="#" class="logo">
              <img src="./img/LogoTCDigital.jpg" alt="">
            </a>
          </div>
        </div>
        <!-- /LOGO -->

<?php
$db_servername="localhost";
$db_username="root";
$db_password="";
$db_name="electromaster";
$db_table_name="smartphone";

//$catego = $_GET['cat'];
//$busc = $_GET['val'];

//echo("Categoria: ".$catego." Texto: ".$busc);

$db_connection = mysqli_connect($db_servername, $db_username, $db_password, $db_name);

if (!$db_connection)
{
  die('No conectado a la base de datos');
}

  if (empty($busqueda))
  {
    $texto = 'Búsqueda sin resultados';
  }
  else
  {
    //Generando consultas para buscar similares.


    //$sql = "SELECT * FROM smartphone WHERE nombre LIKE '%".$busqueda."%' AND tipopago = ".$tipopagoint;
    //$resultado=$db_connection->query($sql); //Ejecutando consulta

    //if (mysqli_num_rows($resultado) > 0) //Se valida que la consulta retorne valores
    //{
//      while($row = $resultado->fetch_assoc())
      //{
        //echo "".$row["nombre"]."";
        ?>
        <?php
      //}
    //}
    //else
    //{
      //$texto = "No se encontraron resultados";
    //}
    mysql_close($conexion);
  }




  ?>

        <!-- SEARCH BAR -->
        <div class="col-md-6">
          <div class="header-search">
            <form>
              <select id="cat" class="input-select" type="text">
                <option value="0">Categorías</option>
                <option value="1">Credito</option>
                <option value="2">Contado</option>
              </select>
              <input id="val" class="input" type="text" placeholder="¿Qué desea buscar?">
              <button class="search-btn" OnClick="buscar()" >Buscar</button>
            </form>
          </div>
        </div>
        <!-- /SEARCH BAR -->

        <!-- ACCOUNT -->
        <div class="col-md-3 clearfix">
          <div class="header-ctn">
            <!-- Wishlist -->
            <div>
              <a href="#">
                <i class="fa fa-heart-o"></i>
                <span>Favoritos</span>
                <div class="qty">7</div>
              </a>
            </div>
            <!-- /Wishlist -->

            <!-- Cart -->
            <div class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                <i class="fa fa-shopping-cart"></i>
                <span>Carrito</span>
                <div class="qty">1</div>
              </a>
              <div class="cart-dropdown">
                <div class="cart-list">
                  <div class="product-widget">
                    <div class="product-img">
                      <img src="./img/product01.png" alt="">
                    </div>
                    <div class="product-body">
                      <h3 class="product-name"><a href="#">Telcel Apple iPhone XR 64G Negro</a></h3>
                      <h4 class="product-price"><span class="qty">1x</span>$20,729</h4>
                    </div>
                    <button class="delete"><i class="fa fa-close"></i></button>
                  </div>

                  <div class="product-widget">
                    <div class="product-img">
                      <img src="./img/product02.png" alt="">
                    </div>
                    <div class="product-body">
                      <h3 class="product-name"><a href="#">Telcel Samsung Galaxy A9 Azul</a></h3>
                      <h4 class="product-price"><span class="qty">2x</span>$12,999</h4>
                    </div>
                    <button class="delete"><i class="fa fa-close"></i></button>
                  </div>
                </div>
                <div class="cart-summary">
                  <small>3 artículo(s) seleccionados</small>
                  <h5>SUBTOTAL: $33728.00</h5>
                </div>
                <div class="cart-btns">
                  <a href="#">Ver carrito</a>
                  <a href="#">Confirmar<i class="fa fa-arrow-circle-right"></i></a>
                </div>
              </div>
            </div>
            <!-- /Cart -->

            <!-- Menu Toogle -->
            <div class="menu-toggle">
              <a href="#">
                <i class="fa fa-bars"></i>
                <span>Menu</span>
              </a>
            </div>
            <!-- /Menu Toogle -->
          </div>
        </div>
        <!-- /ACCOUNT -->
      </div>
      <!-- row -->
    </div>
    <!-- container -->
  </div>
  <!-- /MAIN HEADER -->
</header>
<!-- /HEADER -->

<!-- NAVIGATION -->
<nav id="navigation">
  <!-- container -->
  <div class="container">
    <!-- responsive-nav -->
    <div id="responsive-nav">
      <!-- NAV -->
      <ul class="main-nav nav navbar-nav">
        <li class="active"><a href="#">Principal</a></li>
        <li><a href="#">Ofertones</a></li>
        <li><a href="#">Categorias</a></li>
        <li><a href="#">Laptops</a></li>
        <li><a href="#">Smartphones</a></li>
        <li><a href="#">Camaras</a></li>
        <li><a href="#">Accessorios</a></li>
      </ul>
      <!-- /NAV -->
    </div>
    <!-- /responsive-nav -->
  </div>
  <!-- /container -->
</nav>
<!-- /NAVIGATION -->
