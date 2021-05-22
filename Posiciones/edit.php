<?php
session_start();
if (isset($_SESSION["usuario"])) {
    require_once "../models/Posiciones.php";
    $posicion = new Posicion();
    $id = $_GET["id"];
    $posicion = $posicion->find($id);
    require_once "../Views/partials/headerAll.php";
    require_once "../Views/Posiciones/edit.php";
    require_once "../Views/partials/footer.php";
}else{
    header("location:../index.php");
}

