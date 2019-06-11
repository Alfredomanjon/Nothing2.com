<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Nothing/CrearUsuario</title>
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

 ?>

<div class="Contaniner">
    <div class="espacio2"></div>
    <h2 class="centroInicio" id="red">Crea una nueva cuenta</h2>
    <div class="espacio3"></div>
    <form id="formulario" action="login.php" method="post">
          <input type="text" class="form-control col-12 offset-lg-5 col-lg-2 text-center" name="Nick" placeholder="Nick"><br>
          <input type="text" class="form-control col-12 offset-lg-5 col-lg-2 text-center" name="Nombre" placeholder="Nombre"><br>
          <input type="text" class="form-control col-12 offset-lg-5 col-lg-2 text-center" name="Apellido" placeholder="Apellidos"><br>
          <input type="text" class="form-control col-12 offset-lg-5 col-lg-2 text-center" name="Contra" placeholder="Contraseña"><br>
          <input type="text" class="form-control col-12 offset-lg-5 col-lg-2 text-center" name="Correo" placeholder="Correo"><br>
          <div class="espacio2"></div>
          <div class="botones col-12 offset-lg-4 col-lg-4">
            <input type="submit" class="btn btn btn-dark col-12 offset-lg-2 col-lg-4">
            <a class="btn btn btn-dark col-12 col-lg-4" id="red" href = "CrearCliente.php">No tienes cuenta?</a>
          </div>
          <div class="espacio2"></div>
    </form>
    <?php
        $arrErrores = [
            "noform" => "No se ha enviado el formulario",
            "notOK" => "Usuario o contraseña incorrecto",
            "nosesion" => "No hay sesion abierta",
            "close" => "Se ha cerrado la sesion correctamente",
            "notServer" => "Los servidores no estan operativos",
            "0result" => "Hay 0 resultados"
        ];

        if(isset($_GET["error"])){
            $claveError = $_GET['error'];
            if(isset($arrErrores[$claveError])){
                echo "<div class='centro'><font color='red'>$arrErrores[$claveError]</font></div>";
            }else{
                echo "<p>Error desconocido</p>";
            }
        }
    ?>
</div>
<div class="fondoDescripcion">

</div>


</body>
</html>