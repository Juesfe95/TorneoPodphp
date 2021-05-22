<?php
session_start();
if (isset($_SESSION["usuario"])) {
    require_once "../models/Posiciones.php";
    $posicion = new Posicion();
    $posicion->id = $_GET["id"];
    if($posicion->VerificarEliminar() == null){
        if ($posicion->delete() > 0) {
            header("location:Index.php?accion=5");
        } else {
            header("location:Index.php?accion=6");
        }
    }else{
        header("location:Index.php?accion=7");
    }
    
}else{
    header("location:../index.php");
}

