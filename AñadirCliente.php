<?php
    
    $servername = "localhost";
    $user = "root";
    $password = "";
    $dbname = "latiendaenclase1";
    $conn = new mysqli($servername, $user,$password,$dbname);

    // Check connection

    if ($conn->connect_error) {
        die("Error: " . $conn->connect_error);
    }else

    //… conexión con BBDD y comprobación de conexión

    if (isset($_POST["Nick"]) && isset($_POST["Nombre"]) && isset($_POST["Apellido"]) && isset($_POST["Contra"]) && isset($_POST["Correo"])) {

    $NICK =  $_POST["Nick"];
    $NOMBRE =  $_POST["Nombre"];
    $APELLIDO = $_POST["Apellido"];
    $CONTRA =  $_POST["Contra"];
    $CORREO =  $_POST["Correo"];

    $sql = "CALL ABRIR_CUENTA('$NICK','$CONTRA','$NOMBRE','$APELLIDO','$CORREO')";
   

    if ($conn->query($sql) === TRUE) {
        header("Location: AccederUsuario.php?error=AddOK");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        echo "No se han insertado los datos";
    }
  }
?>