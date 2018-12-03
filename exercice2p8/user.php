<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>Exercice2</title>
    </head>
    <body>
        <p>Sur la page index, faire un liens vers une autre page. Passer d'une page à l'autre le contenu des variables lastname, 
            firstname et age grâce aux sessions. Ces variables auront été définies directement dans le code.
            Il faudra afficher le contenu de ces variables sur la deuxième page.</p>
        <?= 'Bonjour ' . $_SESSION['lastName'] . ' ' . $_SESSION['firstName'] . ' ,vous avez ' . $_SESSION['age'] . ' ans.'; ?>
        <a href="index.php"><button type="button">Retour sur la page index</button></a>
    </body>
</html>

