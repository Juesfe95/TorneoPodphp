<?php
session_start();
if (isset($_SESSION["usuario"])) {
    require_once "../models/Posiciones.php";
    $posicion = new Posicion();
    $listaPosiciones = $posicion->all();
    if (isset($_GET["accion"])) {
        switch ($_GET["accion"]) {
            case '1':
                $mensaje = "La posicion se creo correctamente";
                $clase = "alert alert-success";
                break;
            case '2':
                $mensaje = "Error La posicion no pudo ser creada";
                $clase = "alert alert-danger";
            case '3':
                $mensaje = "La posicion se actualizo correctamente";
                $clase = "alert alert-success";
                break;
            case '4':
                $mensaje = "Error La posicion no pudo ser actualizada";
                $clase = "alert alert-danger";
            case '5':
                $mensaje = "La posicion se elimino correctamente";
                $clase = "alert alert-success";
                break;
            case '6':
                $mensaje = "Error La posicion no pudo ser eliminada";
                $clase = "alert alert-danger";
                break;
            case '7':
                $mensaje = "Error La posicion no pudo ser eliminada por que hay jugadores asociados";
                $clase = "alert alert-danger";
                break;
        }
    }
    require_once "../Views/partials/headerAll.php";
    require_once "../Views/Posiciones/index.php";
    require_once "../Views/partials/footer.php";
}else{
    header("location:../index.php");
}

?>