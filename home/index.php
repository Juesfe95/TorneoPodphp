<?php
    session_start();
if (isset($_SESSION["usuario"])) {
    require_once "../Views/partials/headerAll.php";
    require_once "../Views/home/index.php";
    require_once "../Views/partials/footer.php";
}
    
?>