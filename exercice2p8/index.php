<?php
session_start();
$_SESSION['lastName'] = 'Simonot';
$_SESSION['firstName'] = 'Cyril';
$_SESSION['age'] = '32';
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
        <a href="user.php"><button type="button">Affichage des variables sur user.php</button></a>
    </body>
</html>

