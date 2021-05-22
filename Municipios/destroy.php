<?php
session_start();
if (isset($_SESSION["usuario"])) {
    require_once "../models/Municipio.php";
    $municipio = new Municipio();
    $municipio->id = $_GET["id"];
    if($municipio->VerificarEliminar() == null){
        if ($municipio->delete() > 0) {
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

