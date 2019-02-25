<?php

//Conexión
$db_servername="localhost";
$db_username="root";
$db_password="";
$db_name="electromaster";
$db_table_name="review";

$db_connection = mysqli_connect($db_servername, $db_username, $db_password, $db_name);

if ($db_connection)
{
	//Capturando valores _POST
	$SmartphoneID = $_POST['smartphoneid'];
	$Nombre = $_POST['nombre'];
	$Email = $_POST['email'];
	$Opinion = $_POST['opinion'];
	//$Calificacion = $_POST['calificacion'];
	$Calificacion = "";
	$FechaRegistro = date("Y-m-d H:i:s");
	echo "$FechaRegistro";

	//Obteniendo consecutivo
	$sql_ReviewID = "SELECT * FROM $db_table_name";
	$dataReview=$db_connection->query($sql_ReviewID);	
	$ReviewID = $dataReview->num_rows + 1;

	//Creando consulta inserción
	$sql_review =  "INSERT INTO $db_table_name (ReviewID, SmartphoneID, Nombre, Email, Opinion, Calificacion) VALUES ('$ReviewID', '$SmartphoneID', '$Nombre', '$Email', '$Opinion', '$Calificacion')";
	$dataReview=$db_connection->query($sql_review);

	//window.location.replace("detalle.php");
	//$ruta="detalle.php?numero=?".$SmartphoneID;
	//echo "<script>location.href='index.php';</script>";

	//Cerrando conexión
	$db_connection->close();

}else {
	echo "No conectado. ";
}
?>