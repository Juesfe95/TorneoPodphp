<?php
session_start();
if (isset($_SESSION["usuario"])) {
    require_once "../models/Municipio.php";
    $municipio = new Municipio();
    $municipio->id = $_POST["id"];
    $municipio->nombre = $_POST["nombre"];
    if ($municipio->update() > 0) {
        header("location:Index.php?accion=3");
    } else {
        header("location:Index.php?accion=4");
    }
}else{
    header("location:../index.php");
}
    
