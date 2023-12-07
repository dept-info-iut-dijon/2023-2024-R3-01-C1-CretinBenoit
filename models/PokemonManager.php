<?php
require_once("Model.php");
require_once("Pokemon.php");
class PokemonManager extends Model
{
    /**
     * Récupère tous les Pokemon sous forme d'un tableau
     * @return array tableau contenant tous les Pokemons
     */
    public function getAll() : array
    {
        $res = [];
        $sql = "Select * from pokemon";
        $stmt = $this->execRequest($sql);
        if ($stmt)
        {
            $res = $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        $result = [];
        $i = 0;
        while(isset($res[$i]))
        {
            $result[$i] = new Pokemon($res[$i]);
            $i = $i + 1;
        }
        return $result;
    }

    /**
     * Récupère un Pokemon grâce à son id
     * @param int id du Pokemon
     * @return ?Pokemon Pokemon correspondant à l'id ou null
     */
    public function getById(int $idPokemon):?Pokemon
    {
        $sql = "Select * from Pokemon where idPokemon=?";
        $stmt = $this->execRequest($sql, array($idPokemon));
        if ($stmt)
        $res = null;
        {
            $pokemon = $stmt->fetch(PDO::FETCH_ASSOC);
            if ($pokemon)
            {
                $res = new Pokemon($pokemon);
            }
        }
        return $res;

        
    }
}
?>