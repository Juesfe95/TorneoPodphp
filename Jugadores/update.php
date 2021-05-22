<?php
session_start();
if (isset($_SESSION["usuario"])) {
    require_once "../models/Jugador.php";
    $jugador = new Jugador();
    $jugador->id = $_POST["id"];
    $jugador->nombre = $_POST["nombre"];
    $jugador->posicionId = $_POST["posicion"];
    $jugador->equipoId = $_POST["equipo"];
    if ($jugador->update() > 0) {
        header("location:Index.php?accion=3");
    } else {
        header("location:Index.php?accion=4");
    }
}else{
    header("location:../index.php");
}
   
