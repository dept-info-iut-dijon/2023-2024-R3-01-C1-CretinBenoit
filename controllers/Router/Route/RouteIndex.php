<?php
require_once("controllers/Router/Route.php");
require_once("controllers/MainController.php");
Class RouteIndex extends Route
{
    private MainController $controller;

    public function __construct($controller)
    {
        parent::__construct();
        $this->controller = $controller;
    }

    public function get($params = [])
    {
        $this->controller->Index();
    }

    public function post($params = [])
    {

    }
}
?>