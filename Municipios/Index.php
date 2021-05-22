<?php
session_start();
if (isset($_SESSION["usuario"])) {
    require_once "../models/Municipio.php";
    $municipio = new Municipio();
    $listaMunicipios = $municipio->all();
    if (isset($_GET["accion"])) {
        switch ($_GET["accion"]) {
            case '1':
                $mensaje = "El municipio se inserto correctamente";
                $clase = "alert alert-success";
                break;
            case '2':
                $mensaje = "Error el muncipio no pudo ser creado";
                $clase = "alert alert-danger";
            case '3':
                $mensaje = "El municipio se actualizo correctamente";
                $clase = "alert alert-success";
                break;
            case '4':
                $mensaje = "Error el muncipio no pudo ser actualizado";
                $clase = "alert alert-danger";
            case '5':
                $mensaje = "El municipio se elimino correctamente";
                $clase = "alert alert-success";
                break;
            case '6':
                $mensaje = "Error el muncipio no pudo ser eliminado";
                $clase = "alert alert-danger";
                break;
            case '7':
                $mensaje = "El municipio no puede ser eliminado por que Tiene equipos asociados";
                $clase = "alert alert-danger";
                break;
        }
    }
    require_once "../Views/partials/headerAll.php";
    require_once "../Views/Municipios/index.php";
    require_once "../Views/partials/footer.php";
}else{
    header("location:../index.php");
}

?>