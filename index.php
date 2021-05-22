<?php
session_start();
if(isset($_SESSION["usuario"])){
    header("location:home/index.php");
}
else{
    if (isset($_GET["accion"])) {
        switch ($_GET["accion"]) {
            case '1':
                $mensaje = "El usuario se creo correctamente";
                $clase = "alert alert-success";
                break;
            case '2':
                $mensaje = "Error el usuario no pudo ser creado";
                $clase = "alert alert-danger";
                break;
            case '3':
                $mensaje = "Error Usuario o contraseña Incorrectos";
                $clase = "alert alert-danger";
                break;
        }
    }

    require_once "Views/partials/headerIndex.php";
    require_once "Views/index.php";
    require_once "Views/partials/footer.php";
}

?>