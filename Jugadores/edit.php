<?php
session_start();
if (isset($_SESSION["usuario"])) {
    require_once "../models/Jugador.php";
    require_once "../models/Equipo.php";
    require_once "../models/Posiciones.php";
    $jugador = new Jugador();
    $id = $_GET["id"];
    $jugador = $jugador->find($id);
    $equipo = new Equipo();
    $listaEquipos = $equipo->all();
    $posicion = new Posicion();
    $listaPosiciones = $posicion->all();
    require_once "../Views/partials/headerAll.php";
    require_once "../Views/Jugadores/edit.php";
    require_once "../Views/partials/footer.php";
}else{
    header("location:../index.php");
}

