<?php
session_start();
require_once "models/Login.php";
$login = new Login();
$login->usuario = $_POST["usuario"];
$login->pasword = $_POST["pasword"];

if ($login->validar_usuario() == null) {
    header("location:Index.php?accion=3");
} else {
    $_SESSION["usuario"] = $_POST["usuario"];
    header("location:home/index.php");
}
