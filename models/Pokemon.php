<?php
require_once("PokemonManager.php");
class Pokemon 
{
    // Attribut, Getter et Setter pour l'id du Pokemon
    private ?int $idPokemon;
    public function getIdPokemon():?int
    {
        return $this->idPokemon;
    }
    public function setIdPokemon(int $id)
    {
        $this->idPokemon = $id;
    }

    // Attribut, Getter et Setter pour le nom d'espèce du Pokemon
    private string $nomEspece;
    public function getNomEspece():string
    {
        return $this->nomEspece;
    }
    public function setNomEspece(string $nom)
    {
        $this->nomEspece = $nom;
    }

    // Attribut, Getter et Setter pour la description du Pokemon
    private ?string $description;
    public function getDescription():?string
    {
        return $this->description;
    }
    public function setDescription(string $desc)
    {
        $this->description = $desc;
    }

    // Attribut, Getter et Setter pour le premier type du Pokemon
    private string $typeOne;
    public function getTypeOne():string
    {
        return $this->typeOne;
    }
    public function setTypeOne(string $t1)
    {
        $this->typeOne = $t1;
    }

    // Attribut, Getter et Setter pour le deuxième type du Pokemon
    private ?string $typeTwo;
    public function getTypeTwo():?string
    {
        return $this->typeTwo;
    }
    public function setTypeTwo(string $t2)
    {
        $this->typeTwo = $t2;
    }

    // Attribut, Getter et Setter pour l'url d'image du Pokemon
    private ?string $urlImg;
    public function getUrlImg():?string
    {
        return $this->urlImg;
    }
    public function setUrlImg(string $url)
    {
        $this->urlImg = $url;
    }


    /**
     * Constructeur d'un pokemon
     * @param array $donnes 
     */
    public function __construct(array $donnes)
    {
        $this->hydrate($donnes);
    }

    /**
     * Adapte le tableau donné pour le constructeur
     * @param $donnes donnes que l'on souhaite un Pokemon
     */
    public function hydrate(array $donnes)
    {
        foreach($donnes as $key => $value)
        {
            $method = 'set'.ucfirst($key);
            if(method_exists($this,$method))
            {
                $this->$method($value);
            }
        }
    }
}
?>