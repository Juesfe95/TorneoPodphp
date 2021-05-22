<?php
session_start();
if (isset($_SESSION["usuario"])) {
    require_once "../models/Equipo.php";
    $equipo = new Equipo();
    $equipo->id = $_GET["id"];
    if($equipo->VerificarEliminar() == null){
        if ($equipo->delete() > 0) {
            header("location:Index.php?accion=5");
        } else {
            header("location:Index.php?accion=6");
        }
    }else{
        header("location:Index.php?accion=7");
    }
    
} else {
    header("location:../index.php");
}

