<?php
require_once("controllers/Router/Route.php");
require_once("controllers/PokemonController.php");
Class RouteAddPokemon extends Route
{
    private PokemonController $controller;

    public function __construct($controller)
    {
        parent::__construct();
        $this->controller = $controller;
    }

    public function get($params = [])
    {
        $this->controller->displayAddPokemon();
    }

    public function post($params = [])
    {
        $this->controller->addPokemon($params);
    }
}
?>