<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nothing.com</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

    <link rel=StyleSheet href="css/Alfredo2.css" type="text/css" media=screen>
    <link rel="icon" type="image/jpg" href="imagenes/logo_copia1.png">
</head>
<body>
<?php

	include 'navbar.php';

	$servername = "localhost";
	$user = "root";
	$password = "";
	$dbname = "latiendaenclase1";
	
	$conn = new mysqli($servername, $user, $password, $dbname);
	
	// Comprobamos la conexión
	if ($conn->connect_error) {
		die("Error: " . $conn->connect_error);
	}else{

	session_start();
	
	if(!isset($_SESSION['nombre'])) {
		die("ERROR, debe identificarse");
	}

	$id = $_GET["id_producto"];
	
	if(!isset($_SESSION['carrito'][$id])){
	
		$numProductos = $_SESSION['numProductos']++;
	
		$sql = "SELECT productos.nombre, productos.precio, productos.foto FROM productos WHERE id_producto = $id";
	
		$result = $conn -> query($sql);
		$row = $result -> fetch_assoc();
		$_SESSION['carrito'][$id] = $row;
		
	}
	
	echo $row;

	//header("Location: index.php#producto");
	
}

?>

</body>
</html>
