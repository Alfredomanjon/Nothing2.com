<!DOCTYPE html>
<html>
<body>
    <?php

    $servername = "localhost";
    $user = "root";
    $password = "";
    $dbname = "latiendaenclase1";
    $conn = new mysqli($servername, $user,$password,$dbname);
    if ($conn->connect_error) {
        header("Location: ModificarUsuario.php?error=notServer");
    }
    session_start();
    var_dump($_POST);

    $Nick= $_SESSION["nombre"];



    if(isset($_POST["Nombre"]) && isset($_POST["Apellido"]) && isset($_POST["Password"]) && isset($_POST["Correo"])){

echo "<br>PASO POR EL IF";


        $Nombre = $_POST["Nombre"];
        $Apellido = $_POST["Apellido"];
        $Password = $_POST["Password"];
        $Correo = $_POST["Correo"];

        $sql = "UPDATE usuarios
        SET usuarios.Nombre = '$Nombre', usuarios.Apellido= '$Apellido', usuarios.Password= '$Password', usuarios.Correo= '$Correo'
        WHERE usuarios.Nick = '$Nick';";
        echo "<br>";
        echo $sql;

        $result = $conn->query($sql);
        if(isset($result) && $result){
          header("Location: Perfil.php");
        }else{
                  echo "<br>";        echo "<br>";
          echo $conn->error;
        }






    }else{
        header("Location: ModificarUsuario.php?error=noform");
    }

    ?>

</body>
</html>
