<?php
session_start();
if (isset($_SESSION["usuario"])) {
    require_once "../models/Equipo.php";
    $equipo = new Equipo();
    $listaEquipos = $equipo->all();
    if (isset($_GET["accion"])) {
        switch ($_GET["accion"]) {
            case '1':
                $mensaje = "El equipo se inserto correctamente";
                $clase = "alert alert-success";
                break;
            case '2':
                $mensaje = "Error el equipo no pudo ser creado";
                $clase = "alert alert-danger";
            case '3':
                $mensaje = "El equipo se actualizo correctamente";
                $clase = "alert alert-success";
                break;
            case '4':
                $mensaje = "Error el equipo no pudo ser actualizado";
                $clase = "alert alert-danger";
            case '5':
                $mensaje = "El equipo se elimino correctamente";
                $clase = "alert alert-success";
                break;
            case '6':
                $mensaje = "Error el equipo no pudo ser eliminado";
                $clase = "alert alert-danger";
                break;
            case '7':
                $mensaje = "Error el equipo no pudo ser eliminado por que tiene jugadores asociados";
                $clase = "alert alert-danger";
                break;
        }
    }
    require_once "../Views/partials/headerAll.php";
    require_once "../Views/Equipos/index.php";
    require_once "../Views/partials/footer.php";
}else{
    header("location:../index.php");
}


?>