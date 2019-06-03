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

      <!-- Custom styles for this template -->
      <link href="form-validation.css" rel="stylesheet">
    </head>
    <body class="bg-light">

      <div class="container">
        <br><br>

        <div class="py-5 text-center">

          <h2>Tu Perfil sin Nada</h2>
        </div>

        <div class="row text-center">

          <div class="col-12 nick">
            <?php echo "Nick: " . $row["Nick"]  ?>
          </div>
          <div class="col-12 nombre">
            <?php echo "Nombre: " . $row["Nombre"]  ?>
          </div>
          <div class="col-12 apellido">
            <?php echo "Apellido: " . $row["Apellido"]  ?>
          </div>
          <div class="col-12 correo">
            <?php echo "Correo: " . $row["Correo"]  ?>
          </div>
        </div>
        <div class="row text-center">
          <div class="col-6 ">
            <br><a href="listaDeseados.php"><img src="imgs/listaDeseados.png" alt="listaDeseados" style="width:128px;height:128px;">
          </div>
          <div class="col-5 ">
            <br><a href="ModificarUsuario.php"><img src="imgs/9e7f16e0-af19-4a8b-89a2-78faa8aad2fb_200x200.png" alt="Settings" style="width:128px;height:128px;">
          </div>
            </div>
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
