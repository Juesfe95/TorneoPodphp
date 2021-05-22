<?php
session_start();
if (isset($_SESSION["usuario"])) {
    require_once "../models/Equipo.php";
    $equipo = new Equipo();
    $equipo->nombre = $_POST["nombre"];
    $equipo->dt = $_POST["dt"];
    $equipo->IdMunicipio = $_POST["municipio"];
    if($equipo->validarNombre() == null)
    {
        if ($equipo->save() > 0) {
            header("location:Index.php?accion=1");
        } else {
            header("location:Index.php?accion=2");
        }
    }else{
        header("location:create.php?accion=1");
    }
    
}else{
    header("location:../index.php");
}
    

?>