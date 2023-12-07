<?php
require_once("views/View.php");
require_once("models/PokemonManager.php");

Class MainController{
    public function Index() : void {
        $indexView = new View('Index');
        $PM = new PokemonManager();

        $listPokemon = $PM->getAll();

        $indexView->generer(['listPokemon' => $listPokemon]);
    }

    public function Search() : void {
        $searchView = new View('Search');
        $searchView->generer([]);
    }
}
?>