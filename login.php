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
        header("Location: AccederUsuario.php?error=notServer");
    }else

//crear sesion
    if(isset($_POST["Usuario"]) && isset($_POST["Contra"])){

        $Usu = $_POST["Usuario"];
        $contra = $_POST["Contra"];

        $sql = "SELECT Id FROM usuarios WHERE usuarios.Nick = '$Usu' AND usuarios.Password = '$contra' ";
        $result = $conn->query($sql);

        if($result->num_rows > 0){
            //echo "Logeado correctamente";

            session_start();

            $_SESSION["nombre"] = $Usu;
			$_SESSION['numProductos'] = 0;
			$_SESSION['carrito'] = array();

            header("Location: Perfil.php");

        }else{
            header("Location: AccederUsuario.php?error=notOK");
        }
    }else{
        header("Location: AccederUsuario.php?error=noform");
    }

    ?>

</body>
</html>
