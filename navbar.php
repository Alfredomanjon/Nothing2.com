<!DOCTYPE html>
<html lang="en">
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
session_start();


if(isset($_SESSION['nombre'])){
    $servername = "localhost";
  $user = "root";
  $password = "";
  $dbname = "latiendaenclase1";
  $conn = new mysqli($servername, $user,$password,$dbname);
  if ($conn->connect_error) {
      header("Location: AccederUsuario.php?error=notServer"); 
  }else

   //consulta a base de datos
   $Nick = $_SESSION['nombre'];
   $sql = "SELECT * FROM usuarios WHERE usuarios.Nick = '$Nick'";
   $result = $conn->query($sql);
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light navbar-fixed-top">
  <a class="navbar-brand" href="index.php">
    <img src="imgs/logo100px.png" width="120" class="logo2">
  </a>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    <li class="nav-item">
        <a class="nav-link" href="index.php">Nuevos Productos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="AccederUsuario.php">AccederUsuario</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="checkout.php">checkout</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Perfil.php">Usuario</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="AccederUsuario.php">Sobre Nosotros</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
                
                <?php
                  if ($result->num_rows > 0) {
                    //bucle while en el cual fetch_assoc lo convierte en un array ascociativo
                    while($row = $result->fetch_assoc()) {
                      echo "<a class='btn btn-link text-secondary' href='Perfil.php'>".$row["Nombre"]."</a>";
                    }
                  } else {
                  echo "0 results";
                }
                ?>
                <a class="btn btn-outline-secondary my-2 my-sm-0" href="cierreSesion.php">Cerrar sesion</a>
            </form>
  </div>
</nav>

<?php
}else{?>

<nav class="navbar navbar-expand-lg navbar-light bg-light navbar-fixed-top">
  <a class="navbar-brand" href="index.php">
    <img src="imgs/logo100px.png" width="120" class="logo2">
  </a>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    <li class="nav-item">
        <a class="nav-link" href="index.php">Nuevos Productos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="AccederUsuario.php">AccederUsuario</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="checkout.php">checkout</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Perfil.php">Perfil</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="AccederUsuario.php">Sobre Nosotros</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <img src="http://pluspng.com/img-png/customers-icon-image-35910-600.png" width="20">
      <button type="button" class="btn btn-link text-secondary">Hazte Cliente</button>
      <a href="Perfil.php" class="btn btn-secondary my-2 my-sm-0">Entrar a tu cuenta</a>
    </form>
  </div>
</nav>

<?php
}
?>
</body>
</html>
