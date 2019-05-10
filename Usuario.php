<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
<?php

include 'navbar.php';

if(isset($_SESSION['nombre'])){
  $servername = "localhost";
  $user = "root";
  $password = "";
  $dbname = "banco1";
  $conn = new mysqli($servername, $user,$password,$dbname);
  if ($conn->connect_error) {
      header("Location: AccederUsuario.php?error=notServer"); 
  }else{


?>

<div class="espacio0"></div>

<?php
  //Consulta para saber el nombre
  $Nick = $_SESSION['nombre'];
  $sql = "SELECT Nick FROM usuarios WHERE usuarios.Nick = '$Nick'";
  $result1 = $conn->query($sql);
  
  //Saber si la consulta se ha ejecutado
  if ($result1->num_rows > 0) {

    //bucle while en el cual fetch_assoc lo convierte en un array ascociativo
    while($row = $result1->fetch_assoc()) {
        
        echo "<h1 class='centro'>Bienvenido ".$row["Nick"]."</h1>";
        
        
    }
  } else {
    echo "0 results";
  }
?>

<!-- Codigo de indice de productos -->

<?php
    }
}
else{
        header("Location: AccederUsuario.php?error=nosesion"); 
}
    
?>
</body>
</html>