<!DOCTYPE html>
<html lang="en">
<head>
  <?php include "navbar.php";
  ?>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel=StyleSheet href="css/Diego.css" type="text/css" media=screen>
  <link rel="icon" href="../../../../favicon.ico">

  <title>Tu Perfil sin Nada</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/checkout/">
  <link href="form-validation.css" rel="stylesheet">
  <?php
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



    </head>
    <body class="bg-light fondo2">
        <div class="container">

          <div class="row justify-content-center text-center perfilTop">
            <div class="col-4 BordePerfil Background">

              <div class="row py-3 justify-content-center text-center">

                <h2>Tu Perfil sin Nada <a href="ModificarUsuario.php"><img src="imgs/opciones.png" alt="Settings" style="width:30px;height:30px;"></a></h2>

              </div>
              <div class="row text-center justify-content-center">
                <?php echo "Nick: ". "&nbsp" ?>
                <div class="border rounded">
                  <?php echo $row["Nick"]  ?>
                </div>
              </div>
              <br>
              <div class="row text-center justify-content-center">
                <?php echo "Nombre: ". "&nbsp" ?>
                <div class="border rounded">
                  <?php echo $row["Nombre"]  ?>
                </div>
              </div>
              <br>
              <div class="row text-center justify-content-center">
                <?php echo "Apellido: ". "&nbsp" ?>
                <div class="border rounded">
                  <?php echo $row["Apellido"]  ?>
                </div>
              </div>
              <br>
              <div class="row text-center justify-content-center">
                <?php echo "Correo: ". "&nbsp" ?>
                <div class="border rounded">
                  <?php echo $row["Correo"]  ?>
                </div>
              </div>
              <br>
            </div>
          </div>
          <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        </div>


      <?php
    }
  } else {

    header("Location: AccederUsuario.php?error=notOK");

  }
  $conn->close(); // cierre de conexión con la BBDD

  ?>







  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
  <script src="../../assets/js/vendor/popper.min.js"></script>
  <script src="../../dist/js/bootstrap.min.js"></script>
  <script src="../../assets/js/vendor/holder.min.js"></script>



</body>
</html>
