<?php
session_start();
if (isset($_SESSION["usuario"])) {
    require_once "../models/Municipio.php";
    $municipio = new Municipio();
    $municipio->nombre = $_POST["nombre"];
    if ($municipio->validarNombre() == null) {
        if ($municipio->save() > 0) {
            header("location:Index.php?accion=1");
        } else {
            header("location:Index.php?accion=2");
        }
    }else{
        header("location:Create.php?accion=1");
    }
}else{
    header("location:../index.php");
}
    
?>