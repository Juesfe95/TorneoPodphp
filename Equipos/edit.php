<?php
session_start();
if (isset($_SESSION["usuario"])) {
    require_once "../models/Equipo.php";
    require_once "../models/Municipio.php";
    $equipo = new Equipo();
    $id = $_GET["id"];
    $equipo = $equipo->find($id);
    $municipio = new Municipio();
    $listaMunicipios = $municipio->all();
    require_once "../Views/partials/headerAll.php";
    require_once "../Views/Equipos/edit.php";
    require_once "../Views/partials/footer.php";
}else{
    header("location:../index.php");
}

