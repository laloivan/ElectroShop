<!-- HEADER -->
<header>
<script type="text/javascript">
		function buscar()
    {
      var categoria = document.getElementById('cat').value;
      var valor =  document.getElementById('val').value
      //alert("c:" + categoria + " v:" + valor);
      location.replace("http://127.0.0.1/xdxd/ElectroShop/index.php?cat="+categoria+ "&val="+valor)
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
      <!-- Comentado por pruebas -->
      <ul class="header-links pull-right"-->
        <!--li><a href="#"><i class="fa fa-dollar"></i> MXN</a></li-->
        <li><a href="login.php"><i class="fa fa-user-o"></i> login </a></li>
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

$db_connection = mysqli_connect($db_servername, $db_username, $db_password, $db_name);
  
  if (!$db_connection)
  {
    die('No conectado a la base de datos');
  }
  $sql_user =  "SELECT * FROM usuario";
  $resultado=$db_connection->query($sql_user);
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
