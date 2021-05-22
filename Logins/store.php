<?php
    require_once "../models/Login.php";
    $login = new Login();
    $login->usuario = $_POST["usuario"];
    $login->pasword = $_POST["pasword"];

if ($login->validarNombre() == null) {
    if ($login->save() > 0) {
        header("location:../Index.php?accion=1");
    } else {
        header("location:../Index.php?accion=2");
    }
} else {
    $_SESSION["usuario"] = $_POST["usuario"];
    header("location:create.php?accion=1");
}
   