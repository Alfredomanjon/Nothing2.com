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
    <link rel=StyleSheet href="css/Alfredo.css" type="text/css" media=screen>
    <link rel="icon" type="image/jpg" href="imagenes/logo_copia1.png">
</head>
<body>
<?php
    include 'navbar.php';

    $servername = "localhost";
    $user = "root";
    $password = "";
    $dbname = "latiendaenclase1";
    $conn = new mysqli($servername, $user,$password,$dbname);
    if ($conn->connect_error) {
        header("Location: AccederUsuario.php?error=notServer"); 
    }else{
?>

<div class="MenuInicio">

    <h1 class="tituloInicio"> Nothing.com</h1>
    <h3 class="centro">Compratelos al mejor precio</h3>
    
    
</div>
<br>
<div>
    <h1 class="tituloProductos">Nuestros Productos</h1>
</div>
<?php

    $sql = "SELECT * FROM productos";
    $result1 = $conn->query($sql);

    echo "<div class='row col-12'>";
    if ($result1->num_rows > 0) {

        //bucle while en el cual fetch_assoc lo convierte en un array ascociativo
        while($row = $result1->fetch_assoc()) {
            
            echo "<div class='col-3'>";
            echo "<div class='producto rounded'>";
            echo "<br>";
            echo "<div class='imagenProducto'>";
            echo "<img src=".$row["Foto"]." class='center' id='Nada'>";
            echo "</div>";
            echo "<br>";
            echo "<h3 class='centro'>".$row["Nombre"]."</h3>";
            echo "<h3 class='centro'>".$row["Precio"]."€</h3>";
            echo "<br>";
            echo "</div>";
            echo "</div>";
            
            
        }
      } else {
        echo "0 results";
      }

      echo "</div>";

    }
?>



</body>
</html>