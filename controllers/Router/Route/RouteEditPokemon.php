<?php
require_once("controllers/Router/Route.php");
require_once("controllers/PokemonController.php");
Class RouteEditPokemon extends Route
{
    private PokemonController $controller;

    public function __construct($controller)
    {
        parent::__construct();
        $this->controller = $controller;
    }

    public function get($params = [])
    {
        $this->controller->displayEditPokemon($params['idPokemon']);
    }

    public function post($params = [])
    {
        
    }
}
?>