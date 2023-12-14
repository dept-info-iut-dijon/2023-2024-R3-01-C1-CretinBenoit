<h1>Recherche</h1>


<input type="text" id="search" name="search" placeholder="...">
<select name="props" id="props-select">
    <?php
    $reflectionClass = new ReflectionClass('pokemon');
    $properties = $reflectionClass->getProperties();
    foreach($properties as $prop)
    {
        echo '<option value='.$prop->getName().'>'.$prop->getName().'</option>';
    }
    ?>
</select>