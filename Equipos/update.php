<?php
session_start();
if (isset($_SESSION["usuario"])) {
    require_once "../models/Equipo.php";
    $equipo = new Equipo();
    $equipo->id = $_POST["id"];
    $equipo->nombre = $_POST["nombre"];
    $equipo->dt = $_POST["dt"];
    $equipo->IdMunicipio = $_POST["municipio"];
    if ($equipo->update() > 0) {
        header("location:Index.php?accion=3");
    } else {
        header("location:Index.php?accion=4");
    }
}else{
    header("location:../index.php");
}
    
