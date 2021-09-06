<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/styleTemplate.css">
    <link rel="stylesheet" href= <?=$style?>>
    <title><?= $title ?></title>
</head>

<body>
    <h1>Tableau de Bord</h1>
    <nav>
        <ul>
            <li><a href="index.php">Accueil</a></li>
            <li><a href="index.php?action=budget">Budget</a></li>
            <li><a href="index.php?page=products">Produits</a></li>
            <li>Planning</li>
            <li>Todo-list</li>
            <li>Objectifs</li>
        </ul>
    </nav>
    <?= $content ?>
</body>

</html>