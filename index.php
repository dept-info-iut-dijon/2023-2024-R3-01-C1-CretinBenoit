<?php
    require_once("controllers/MainController.php");
    require_once("controllers/Router/Router.php");

    $routeur = new Router();
    $routeur->routing($_GET, $_POST);
?>