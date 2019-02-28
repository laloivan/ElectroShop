<?php
//Conexión
$db_servername="localhost";
$db_username="root";
$db_password="";
$db_name="electromaster";
$db_table_name="smartphone";

$db_connection = mysqli_connect($db_servername, $db_username, $db_password, $db_name);

if ($db_connection)
{
	//Capturando valores _POST
	$SmartphoneID = $_POST['smartphoneid'];

	//Eliminando
	$sql_Delete = "DELETE FROM $db_table_name WHERE smartphoneid = ".$SmartphoneID;
	echo "$sql_Delete";
	$Success=$db_connection->query($sql_Delete);
	
	//Redireccionando a pagina de admin.php
	echo "<script>location.href='admin.php';</script>";
}
else
{
	echo "No conectado. ";
}
?>