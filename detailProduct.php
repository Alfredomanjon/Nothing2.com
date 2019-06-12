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
    $conn = new mysqli($servername, $user,$password,$dbname);
    if ($conn->connect_error) {
        header("Location: AccederUsuario.php?error=notServer");
    }else{
?>



<br>
<div>
    <h3 class="centroInicio"> <?php $var_value = $_GET['id'];
     ?>
   </h3>
</div>
<?php

    $sql = "SELECT * FROM `productos` WHERE id_producto=$var_value";
    $result1 = $conn->query($sql);
    echo "<div class='row'>";

    echo "<div class='container col-11 '>";
    echo "<div class='container-fluid'>";

    echo "<div class='row'>";


    if ($result1->num_rows > 0) {

        //bucle while en el cual fetch_assoc lo convierte en un array ascociativo

        while($row = $result1->fetch_assoc()) {
            $numId = $row["id_producto"];


?>


  <?php
    echo "<img id='Nada' class='float-right ' src=".$row["Foto"]."  >";

    echo "<div class='container col-6 '>";
    echo "<div class='container-fluid'>";
    echo "<div class='row'>";
    ?>




            <div class="container">
    <div class="row">

    <div class="col">
    <?php
      echo "<h1 >".$row["Nombre"]."</h1>";
    ?>
    </div>
    </div>
    <div class="row">
    <div class="col-12">
      <?php
    echo "<h3  >".$row["Descripcion"]."</h3>";
    ?>
    </div>
    <div class="col">
      <?php
      $idProduct = $row["id_producto"];
    echo "<button href='addCarrito.php?id_producto=$idProduct' > Añadir al carrito </button>";
    echo "<h3 class='' >".$row["Precio"]."€</h3>";
    ?>
    </div>



    </div>
    </div>
    </div>
    </div>
    </div>


</div>


<?php




        }
      } else {
        echo "0 results";
      }
      echo "</div>";
      echo "</div>";
      echo "</div>";
    }
?>



</body>
</html>
