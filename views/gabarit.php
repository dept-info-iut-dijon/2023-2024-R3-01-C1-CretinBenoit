<!doctype html>
<html lang="fr">

<head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="public/css/main.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $titre ?></title>
</head>

<body>
<header>
    <!-- Menu -->
    <nav>
        <ul class="menu-list">
            <li><a href="index.php">Accueil</a></li>
            <li><a href="index.php?action=add-pokemon">Ajouter Pokemon</a></li>
            <li><a href="index.php?action=add-pokemon-type">Ajouter Type Pokemon</a></li>
            <li><a href="index.php?action=search">Recherche</a></li>
    </nav>
</header>
<!-- #contenu -->
<main id="contenu">
    <?= $contenu ?>
</main>
<footer>

</footer>
</body>

</html>