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
	$Fecha = date("Y-m-d H:i:s");

	//Obteniendo consecutivo
	$sql_ReviewID = "SELECT * FROM $db_table_name ORDER BY ReviewID DESC LIMIT 1";
	$dataReview=$db_connection->query($sql_ReviewID);
	
	$row = $dataReview->fetch_assoc();
	$ReviewID = $row['ReviewID'] + 1;

	//Creando consulta inserción
	$sql_review =  "INSERT INTO $db_table_name (ReviewID, SmartphoneID, Nombre, Email, Opinion, Calificacion, Fecha) VALUES ('$ReviewID', '$SmartphoneID', '$Nombre', '$Email', '$Opinion', '$Calificacion', '$Fecha')";
	$dataReview=$db_connection->query($sql_review);

	//Redireccionando a principal
	echo "<script>location.href='index.php';</script>";

	//Cerrando conexión
	$db_connection->close();

}else {
	echo "No conectado. ";
}
?>