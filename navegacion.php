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
            <a href="index.php" class="logo">
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
  $dataUser=$db_connection->query($sql_user);
  ?>

        <!-- SEARCH BAR -->
        <!--div class="col-md-6">
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
        </div-->
        <!-- /SEARCH BAR -->

        <!-- ACCOUNT -->
        <div class="col-md-3 clearfix">
          <div class="header-ctn">
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
