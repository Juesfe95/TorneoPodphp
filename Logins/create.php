<?php
if (isset($_GET["accion"])) {
    switch ($_GET["accion"]) {
        case '1':
            $mensaje = "El nombre de usuario ya existe por favor intente con otro";
            $clase = "alert alert-danger";
            break;
        }
    require_once "../Views/partials/headerIndex.php";
    require_once "../Views/Logins/create.php";
    require_once "../Views/partials/footer.php";
    }else{
    require_once "../Views/partials/headerIndex.php";
    require_once "../Views/Logins/create.php";
    require_once "../Views/partials/footer.php";
    }
 
?>

