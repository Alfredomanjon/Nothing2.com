<?php

session_start();

if(isset($_SESSION['nombre'])){

    session_unset();
    session_destroy();
    header("Location: AccederUsuario.php?error=close");

}else{
    header("Location: AccederUsuario.php?error=nosesion");
}




?>