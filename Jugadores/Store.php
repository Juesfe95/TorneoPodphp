<?php
session_start();
if (isset($_SESSION["usuario"])) {
    require_once "../models/Jugador.php";
    $jugador = new Jugador();
    $jugador->nombre = $_POST["nombre"];
    $jugador->posicionId = $_POST["posicion"];
    $jugador->equipoId = $_POST["equipo"];
    if ($jugador->save() > 0) {
        header("location:Index.php?accion=1");
    } else {
        header("location:Index.php?accion=2");
    }
}else{
    header("location:../index.php");
}
    

?>