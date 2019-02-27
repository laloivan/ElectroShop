<?php
$target_dir = "img/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$nombreimagen = basename( $_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
        //Inicia el guardado de la base de datos

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "electromaster";

if(isset($_POST['nombre']) && (trim($_POST['nombre']) != '') ) {
	$nombre = $_POST['nombre'];
}
else {
	$nombre = "";
}
if(isset($_POST['marca']) && (trim($_POST['marca']) != '') ) {
	$marca = $_POST['marca'];
}
else {
	$marca = "";
}
if(isset($_POST['precio']) && (trim($_POST['precio']) != '') ) {
	$precio = $_POST['precio'];
}
else {
	$precio = 0;
}

if(isset($_POST['descuento']) && (trim($_POST['descuento']) != '') ) {
	$descuento = $_POST['descuento'];
}
else {
	$descuento = 0;
}

if(isset($_POST['tipopago']) && (trim($_POST['tipopago']) != '') ) {
	$tipopago = $_POST['tipopago'];
}
else {
	$tipopago = 1;
}

if(isset($_POST['stock']) && (trim($_POST['stock']) != '') ) {
	$stock = $_POST['stock'];
}
else {
	$stock = 1;
}

if(isset($_POST['stars']) && (trim($_POST['stars']) != '') ) {
	$stars = $_POST['stars'];
}
else {
	$stars = 5;
}

if(isset($_POST['estado']) && (trim($_POST['estado']) != '') ) {
	$estado = $_POST['estado'];
}
else {
	$estado = 5;
}

if(isset($_POST['descripcion']) && (trim($_POST['descripcion']) != '') ) {
	$descripcion = $_POST['descripcion'];
}
else {
	$descripcion = "";
}

if(isset($_POST['resumen']) && (trim($_POST['resumen']) != '') ) {
	$resumen = $_POST['resumen'];
}
else {
	$resumen = "";
}

if(isset($_POST['caracteristicas']) && (trim($_POST['caracteristicas']) != '') ) {
	$caracteristicas = $_POST['caracteristicas'];
}
else {
	$caracteristicas = "";
}

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO smartphone (nombre,marca, precio, imagenid, descuento, tipopago, stock, stars, estado, descripcion, resumen, caracteristicas)
VALUES ('$nombre', '$marca', '$precio','$nombreimagen','$descuento','$tipopago','$stock','$stars','$estado','$descripcion','$resumen','$caracteristicas')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

?>