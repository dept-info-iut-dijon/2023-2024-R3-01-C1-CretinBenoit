<?php
Class PokemonController
{
    public function displayAddPokemon() : void
    {
        $AddPokemonView = new View('AddPokemon');
        $PM = new PokemonManager();


        $AddPokemonView->generer([]);
    }

    public function addType():void
    {
        $addType = new View('AddType');
        $addType->generer([]);
    }
}
?>