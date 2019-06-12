<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Nothing/SobreNosotros</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
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

    <h2 class="tituloInicio2">Sobre Nosotros</h2>

    <div class="presentacion">

        <p class="centro1 col-12 offset-lg-4 col-lg-4">Somos un pequeño grupo de inovadores con la idea de poder dar un producto simple y sencillo
        al mejor precio , nuestra idea es dar el mejor servicio posible y que disfrutes de tu 
        compra tanto como nosotos</p>

    </div>

    <div class="espacio2"></div>

    <hr>

    <div class="productos">
        

        <h3 class="centro">Nuestros productos</h3>

        <p class="centro1 col-12 offset-lg-4 col-lg-4">Al igual que tu queremos que nuestros productos sena de un calidad perfecta, por 
            eso revisamos a diario nuestros productos para garantizar una calidada a Nuestros
            clientes
        </p>
    </div>

    <div class="espacio2"></div>

    <hr>

    <div class="productos">
        

        <h3 class="centro">Nuestro Proposito</h3>

        <p class="centro1 col-12 offset-lg-4 col-lg-4">Al igual que tu queremos que nuestros productos sena de un calidad perfecta, por 
            eso revisamos a diario nuestros productos para garantizar una calidada a Nuestros
            clientes
        </p>
    </div>

    <div class="espacio2"></div>

<?php

    }

?>
</body>
<?php

  include 'footer.php';

?>
</html>