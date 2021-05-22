<?php
session_start();
if (isset($_SESSION["usuario"])) {
    require_once "../models/Equipo.php";
    require_once "../models/Posiciones.php";
    $equipo = new Equipo();
    $listaEquipos = $equipo->all();
    $posicion = new Posicion();
    $listaPosiciones = $posicion->all();
    require_once "../Views/partials/headerAll.php";
    require_once "../Views/Jugadores/create.php";
    require_once "../Views/partials/footer.php";
}else{
    header("location:../index.php");
}
    
?>