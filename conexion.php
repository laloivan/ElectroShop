<?php 
$link= mysqli_connect("127.0.0.1","electromaster","",""); // conectando al servidor mysql
if (!$link) // link es un nombre cualquiera de variable
{
	echo "No se pudo conectar a la base de datos";
}
?>