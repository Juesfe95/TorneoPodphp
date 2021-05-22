<?php
session_start();
if (isset($_SESSION["usuario"])) {
    require_once "../models/Municipio.php";
    $municipio = new Municipio();
    $listaMunicipios = $municipio->all();
    if (isset($_GET["accion"])) {
        switch ($_GET["accion"]) {
            case '1':
                $mensaje = "Ya existe un municipio registrado con este nombre";
                $clase = "alert alert-danger";
                break;
        }
    }
    require_once "../Views/partials/headerAll.php";
    require_once "../Views/Equipos/create.php";
    require_once "../Views/partials/footer.php";
}else{
    header("location:../index.php");
}
    
?>