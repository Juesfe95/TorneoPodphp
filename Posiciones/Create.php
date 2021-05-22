<?php
session_start();
if (isset($_SESSION["usuario"])) {
    if (isset($_GET["accion"])) {
        switch ($_GET["accion"]) {
            case '1':
                $mensaje = "Ya existe una posicion registrada con este nombre";
                $clase = "alert alert-danger";
                break;
        }
    }
    require_once "../Views/partials/headerAll.php";
    require_once "../Views/Posiciones/create.php";
    require_once "../Views/partials/footer.php";
}else{
    header("location:../index.php");
}
    
?>