<?php
session_start();
if (isset($_SESSION["usuario"])) {
    require_once "../models/Jugador.php";
    $jugador = new Jugador();
    $jugador->id = $_GET["id"];
    if ($jugador->delete() > 0) {
        header("location:Index.php?accion=5");
    } else {
        header("location:Index.php?accion=6");
    }
}else{
    header("location:../index.php");
}

