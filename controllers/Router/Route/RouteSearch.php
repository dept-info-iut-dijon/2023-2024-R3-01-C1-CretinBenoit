<?php
require_once("controllers/Router/Route.php");
require_once("controllers/MainController.php");
Class RouteSearch extends Route
{
    private MainController $controller;

    public function __construct($controller)
    {
        parent::__construct();
        $this->controller = $controller;
    }

    public function get($params = [])
    {
        $this->controller->Search();
    }

    public function post($params = [])
    {

    }
}
?>