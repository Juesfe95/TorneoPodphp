<?php
session_start();
if (isset($_SESSION["usuario"])) {
    require_once "../models/Posiciones.php";
    $posicion = new Posicion();
    $posicion->id = $_POST["id"];
    $posicion->nombre = $_POST["nombre"];
    if ($posicion->update() > 0) {
        header("location:Index.php?accion=3");
    } else {
        header("location:Index.php?accion=4");
    }
}else{
    header("location:../index.php");
}
    
