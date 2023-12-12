<?php
require_once("controllers/MainController.php");
require_once("controllers/Router/Route/RouteIndex.php");
require_once("controllers/PokemonController.php");
require_once("controllers/Router/Route/RouteAddPokemon.php");
require_once("controllers/Router/Route/RouteSearch.php");
require_once("controllers/Router/Route/RouteAddType.php");
Class Router
{
    private array $routeList;
    private array $ctrlList;
    private string $action_key;

    public function __construct($name_of_action_key = "action")
    {
        $this->createControllerList();
        $this->createRouteList();
    }

    public function createControllerList()
    {
        $this->ctrlList = [];
        $this->ctrlList["main"] = new MainController();
        $this->ctrlList["pokemon"] = new PokemonController();
    }

    public function createRouteList()
    {
        $this->routeList = [];
        $this->routeList["index"] = new RouteIndex($this->ctrlList["main"]);
        $this->routeList["add-pokemon"] = new RouteAddPokemon($this->ctrlList["pokemon"]);
        $this->routeList["search"] = new RouteSearch($this->ctrlList["main"]);
        $this->routeList["add-pokemon-type"] = new RouteAddType($this->ctrlList["pokemon"]);
    }

    public function routing($get, $post)
    {
        $donnees = $get;
        $method = 'GET';
        $routeName = "index";
        if(isset($get['action']))
        {
            $action = $get['action'];
            switch($action)
            {
                case 'add-pokemon': $routeName = "add-pokemon";break;
                case 'search': $routeName = "search";break;
                case 'add-pokemon-type': $routeName = "add-pokemon-type";break;
            }
        }
        if(isset($post))
        {
            $donnees = $post;
            $method = 'POST';
            switch($action)
            {
                case 'add-pokemon': $routeName = "add-pokemon";break;
            }
        }

        $route = $this->routeList[$routeName];
        $route->action($donnees, $method);
    }
}
?>