<?php

//Conexión
$db_servername="localhost";
$db_username="root";
$db_password="";
$db_name="electromaster";
$db_table_name="venta";

$db_connection = mysqli_connect($db_servername, $db_username, $db_password, $db_name);

if ($db_connection)
{
	//Capturando valores _POST
	$SmartphoneID = $_POST['smartphoneid'];
	$Nombre = $_POST['Nombre'];
	$Apellido = $_POST['Apellido'];
	$Email = $_POST['Email'];
	$Direccion = $_POST['Direccion'];
	$Ciudad = $_POST['Ciudad'];
	$Pais = $_POST['Pais'];
	$CodigoPostal = $_POST['CodigoPostal'];
	$Telefono = $_POST['Telefono'];
	$VentaID = 0;

	//$Calificacion = $_POST['calificacion'];
	$Calificacion = "";
	$Fecha = date("Y-m-d H:i:s");

	//Obteniendo consecutivo
	$sql_VentaID = "SELECT * FROM $db_table_name ORDER BY ventaid DESC LIMIT 1";
	$dataVenta=$db_connection->query($sql_VentaID);
	
	if($dataVenta)
	{
		$row = $dataVenta->fetch_assoc();
		$VentaID = $row['ventaid'] + 1;
	}
	else
	{
		$VentaID = 1;
	}

	//Creando consulta inserción
	$sql_venta =  "INSERT INTO $db_table_name (ventaid, nombre, apellido, email, direccion, ciudad, pais, codigopostal, telefono, smartphoneid) VALUES ('$VentaID', '$Nombre', '$Apellido', '$Email', '$Direccion', '$Ciudad', '$Pais', '$CodigoPostal', '$Telefono', '$SmartphoneID')";
	$dataVenta=$db_connection->query($sql_venta);

	//Redireccionando a principal
	echo "<script>location.href='index.php';</script>";

	//Cerrando conexión
	$db_connection->close();

}else {
	echo "No conectado. ";
}
?>