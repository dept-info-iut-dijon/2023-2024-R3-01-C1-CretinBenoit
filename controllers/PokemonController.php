<?php
Class PokemonController
{
    public function displayAddPokemon(?string $message = NULL) : void
    {
        $AddPokemonView = new View('AddPokemon');
        $PM = new PokemonManager();


        $AddPokemonView->generer(['message' => $message]);
    }

    public function addType():void
    {
        $addType = new View('AddType');
        $addType->generer([]);
    }

    public function addPokemon(array $pokemon):void
    {
        $pokemonCree = new Pokemon($pokemon);
        $PM = new PokemonManager();

        

        $id = $PM->createPokemon($pokemonCree);

        if($id) $message = "Le pokemon a été ajouté avec succès !";
        else "Le pokemon n'a pas pu être ajouté";

        $addPokemon = new View('Index');
        $listPokemon = $PM->getAll();
        $addPokemon->generer(['message' => $message, 'listPokemon' => $listPokemon]);
    }

    public function deletePokemon(int $idPokemon = -1)
    {
        $PM = new PokemonManager();
        if($idPokemon != -1)
        {
            $PM->deletePokemon($idPokemon);
            $delPokemon = new View('Index');
            $listPokemon = $PM->getAll();
            $delPokemon->generer(['listPokemon' => $listPokemon]);
        }
    }

    public function displayEditPokemon(int $idPokemon = -1)
    {
        $PM = new PokemonManager();
        $editPokemonView = new View('EditPokemon');
        $pokemon = $PM->getById($idPokemon);

        var_dump($idPokemon);
        var_dump($pokemon);
        $editPokemonView->generer(['pokemon' => $pokemon]);
    }
}
?>