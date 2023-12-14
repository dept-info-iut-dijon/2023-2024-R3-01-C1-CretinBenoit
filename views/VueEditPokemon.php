<h1>Modifier Pokemon</h1>

<form method="post" action="?action=edit-pokemon">
    <p>
        <label for="nomEspece">Nom Espèce</label>
    </p>
    <p>
        <?php
        echo  '<input type="text" id="nom" name="NomEspece" value = '.$pokemon->getNomEspece().' >';
        ?>
    </p>
    <p>
        <label for="Description">Description</label>
    </p>
    <p>
        <?php
        echo '<input type="text" id="desc" name="Description" value = '.$pokemon->getDescription().'>';
        ?>
    </p>
    <p>
        <label for="type1">Type 1</label>
    </p>
    <p>
        <?php
        echo '<input type="text" id="type1" name="TypeOne" value = '.$pokemon->getTypeOne().'>';
        ?>
    </p>
    <p>
        <label for="type2">Type 2</label>
    </p>
    <p>
        <?php
        echo '<input type="text" id="type2" name="TypeTwo" value = '.$pokemon->getTypeTwo().'>';
        ?>
    </p>
    <p>
        <label for="url">Url Image</label>
    </p>
    <p>
        <?php
        echo '<input type="text" id="url" name="UrlImg" value = '.$pokemon->getUrlImg().'>';
        ?>
    </p>
    <p>
        <button type="submit" class="submitbutton">Valider</button>
    </p>
</form>