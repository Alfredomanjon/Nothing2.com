<?php

	$servername = "localhost";
	$user = "root";
	$password = "";
	$dbname = "latiendaenclase1";
	
	$conn = new mysqli($servername, $user, $password, $dbname);
	
	// Comprobamos la conexión
	if ($conn->connect_error) {
		die("Error: " . $conn->connect_error);
	}

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
	

	 header("Location: index.php");
	
	

?>
