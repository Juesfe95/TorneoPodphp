<?php
session_start();
if (isset($_SESSION["usuario"])) {
    require_once "../models/Jugador.php";
    $jugador = new Jugador();
    $listaJugadores = $jugador->all();
    if (isset($_GET["accion"])) {
        switch ($_GET["accion"]) {
            case '1':
                $mensaje = "El jugador se inserto correctamente";
                $clase = "alert alert-success";
                break;
            case '2':
                $mensaje = "Error el jugador no pudo ser creado";
                $clase = "alert alert-danger";
            case '3':
                $mensaje = "El jugador se actualizo correctamente";
                $clase = "alert alert-success";
                break;
            case '4':
                $mensaje = "Error el jugador no pudo ser actualizado";
                $clase = "alert alert-danger";
            case '5':
                $mensaje = "El jugador se elimino correctamente";
                $clase = "alert alert-success";
                break;
            case '6':
                $mensaje = "Error el jugador no pudo ser eliminado";
                $clase = "alert alert-danger";
        }
    }
    require_once "../Views/partials/headerAll.php";
    require_once "../Views/Jugadores/index.php";
    require_once "../Views/partials/footer.php";
}else{
    header("location:../index.php");
}

?>