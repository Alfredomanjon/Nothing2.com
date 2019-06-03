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
    }else


    if(isset($_POST["Nombre"]) && isset($_POST["Apellido"]) && isset($_POST["Nick"]) && isset($_POST["Password"]) && isset($_POST["Correo"])){

        $Nombre = $_POST["Nombre"];
        $Apellido = $_POST["Apellido"];
        $Nick = $_POST["Nick"];
        $Password = $_POST["Password"];
        $Correo = $_POST["Correo"];

        $sqll = "SELECT Id FROM usuarios WHERE usuarios.Nick = '$Nick' AND usuarios.Password = '$Password' ";
        console.log($sqll);
        $sql = "UPDATE usuarios
        SET usuarios.Nombre = '$Nombre', usuarios.Apellido= '$Apellido', usuarios.Nick= '$Nick', usuarios.Password= '$Password', usuarios.Correo= '$Correo'
        WHERE usuarios.Id = $sqll;";
        console.log($sql);
        $result = $conn->query($sql);

            header("Location: Perfil.php");




    }else{
        header("Location: ModificarUsuario.php?error=noform");
    }

    ?>

</body>
</html>
