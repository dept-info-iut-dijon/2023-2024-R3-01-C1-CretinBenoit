<h1>Pokedex</h1>
<?php 
    echo '<table><tr><td>ID</td><td>Pokemon</td><td>Types</td><td>Image</td><td>Options</td><tr>';
    foreach($listPokemon as $value)
    {
        echo '<tr><td class="petitecolonne">'.$value->getIdPokemon().'</td><td class="grandecolonne">'.$value->getNomEspece().'</td><td class="petitecolonne">'.$value->getTypeOne().' '.$value->getTypeTwo().'</td><td class="grandecolonne"><img src="'.$value->getUrlImg().'"></td><td class="petitecolonne"><a href="index.php?action=edit-pokemon&idPokemon='.$value->getIdPokemon().'">Modifier</a></br><a href="index.php?action=del-pokemon&idPokemon='.$value->getIdPokemon().'">Supprimer</a></td></tr>';
    }
    echo '</table>';

?>
