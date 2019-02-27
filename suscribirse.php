<?php

//Conexión
$db_servername="localhost";
$db_username="root";
$db_password="";
$db_name="electromaster";
$db_table_name="suscribirse";

$db_connection = mysqli_connect($db_servername, $db_username, $db_password, $db_name);

if ($db_connection)
{
	//Capturando valores _POST
	$SuscribirseID = 0;
	$Email = $_POST['suscribirse'];
	$Fecha = date("Y-m-d H:i:s");

	//Obteniendo consecutivo
	$sql_SuscribirseID = "SELECT * FROM $db_table_name ORDER BY suscribirseid DESC LIMIT 1";
	$dataSuscrib=$db_connection->query($sql_SuscribirseID);
	
	$row = $dataSuscrib->fetch_assoc();
	$SuscribirseID = $row['suscribirseid'] + 1;

	//Creando consulta inserción
	$sql_suscrib =  "INSERT INTO $db_table_name (suscribirseid, email, fecha) VALUES ('$SuscribirseID', '$Email', '$Fecha')";
	$dataSuscrib=$db_connection->query($sql_suscrib);

	//Redireccionando a principal
	echo "<script>location.href='index.php';</script>";

	//Cerrando conexión
	$db_connection->close();

}else {
	echo "No conectado. ";
}
?>