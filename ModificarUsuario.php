<html>
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>MAZBank/Usuario</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <link rel=StyleSheet href="css/Diego.css" type="text/css" media=screen>
    <link rel="icon" type="image/jpg" href="imagenes/logo_copia1.png">

</head>
<body>

  <?php

   include 'navbar.php';

   $servername = "localhost";
   $user = "root";
   $password = "";
   $dbname = "latiendaenclase1";
   $conn = new mysqli($servername, $user,$password,
   $dbname);
   // Check connection
   if ($conn->connect_error) {
     die("Error: " . $conn->connect_error);
   }else
   echo "" ;

   $Nick = $_SESSION["nombre"];
   $sql = "SELECT * FROM usuarios WHERE Nick = '$Nick' ";

   $result = $conn->query($sql);
   if ($result->num_rows > 0) {
     while($row = $result->fetch_assoc()) {

  ?>

  <div class="fondo1">
    <div class="espacio1"></div>
    <div class="row">
      <div class=" col-4 offset-lg-4">
        <div class="espacio1"></div>
        <div class="Borde rounded">
          <div class="VerLetra">
        <h2 class="Inicio">Modifica tu cuenta para(Nada)</h2>
        <div class="espacio1"></div>
        <form id="formulario" action="modifica.php" method="post">
          <label>Nombre</label><br>
          <input type="text" name="Nombre" value=<?php echo $row["Nombre"] ?> >  <br>
          <label>Apellido</label><br>
          <input type="text" name="Apellido" value=<?php echo $row["Apellido"] ?> > <br>
          <label>Contraseña</label><br>
          <input type="password" name="Password" value=<?php echo $row["Password"] ?> > <br>
          <label>Correo</label><br>
          <input type="text" name="Correo" value=<?php echo $row["Correo"] ?> > <br>
          <div class="espacio1"></div>
          <div class="botones col-12">
            <input type="submit" class="btn btn btn-dark col-5">
          </div>
          <div class="espacio4"></div>
          </form>
          <?php

        }
      } else {

        header("Location: AccederUsuario.php?error=notOK");

      }



            $arrErrores = [
                "noform" => "No se ha enviado el formulario",
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
            $conn->close(); // cierre de conexión con la BBDD
          ?>
        <div class="espacio1"></div>
      </div>
      <div class="espacio1"></div>
      <div class="espacio1"></div>
    </div>
    <div class="espacio1"></div>
  </div>
  </div>
  </div>
</body>
</html>
