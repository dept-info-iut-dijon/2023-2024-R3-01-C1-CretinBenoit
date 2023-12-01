<?php
require_once("views/View.php");
require_once("models/PokemonManager.php");

Class MainController{
    public function Index() : void {
        $indexView = new View('Index');
        $PM = new PokemonManager();

        $listPokemon = $PM->getAll();
        $existe = $PM->getById(1);
        $existePas = $PM->getById(3);

        $indexView->generer(['listPokemon' => $listPokemon, 'existe' => $existe, 'existePas' => $existePas]);
    }
}
?>