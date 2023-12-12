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

    /**
     * Insère un Pokemon dans la BDD
     * @param Pokemon le pokemon à insérer
    */
    public function createPokemon(Pokemon $pokemon): int
    {
        $nomEspece = $pokemon->getNomEspece();
        $description = $pokemon->getDescription();
        $type1 = $pokemon->getTypeOne();
        $type2 = $pokemon->getTypeTwo();
        $url = $pokemon->getUrlImg();

        $sql = "Insert INTO pokemon (nomEspece, description, typeOne, typeTwo, urlImg) VALUES (:valeurNom, :valeurDesc, :valeurType1, :valeurType2, valeurUrl)";
        $params = [
            ':valeurNom' => $nomEspece,
            ':valeurDesc' => $description,
            ':valeurType1' => $type1,
            ':valeurType2' => $type2,
            ':valeurUrl' => $url,
        ];

        $this->execRequest($sql, $params);
        $id = $this->execRequest("Select Last_Insert_ID()");
        return $id;
    }
}
?>