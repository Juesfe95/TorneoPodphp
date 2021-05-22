<?php
session_start();
if (isset($_SESSION["usuario"])) {
    require_once "../models/Posiciones.php";
    $posicion = new Posicion();
    $posicion->nombre = $_POST["nombre"];
    if ($posicion->validarNombre() == null) {
        if ($posicion->save() > 0) {
            header("location:Index.php?accion=1");
        } else {
            header("location:Index.php?accion=2");
        }
    } else {
        header("location:Create.php?accion=1");
    }
}else{
    header("location:../index.php");
}
    
?>