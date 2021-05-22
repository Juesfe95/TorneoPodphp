<?php
session_start();
if (isset($_SESSION["usuario"])) {
    require_once "../models/Municipio.php";
    $municipio = new Municipio();
    $id = $_GET["id"];
    $municipioId = $municipio->find($id);
    require_once "../Views/partials/headerAll.php";
    require_once "../Views/Municipios/edit.php";
    require_once "../Views/partials/footer.php";
}else{
    header("location:../index.php");
}

