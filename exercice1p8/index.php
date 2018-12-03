<?php
$userAgent = $_SERVER['HTTP_USER_AGENT'];
$ipAdress = $_SERVER['SERVER_ADDR'];
$serverName = $_SERVER['SERVER_NAME'];
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>Exercice1</title>
    </head>
    <body>
        <div>Faire une page HTML permettant de donner à l'utilisateur : son User Agent, son adresse ip, le nom du serveur</div>
        <div>Votre User Agent : <?= $userAgent; ?></div>
        <div>Votre adresse ip : <?= $ipAdress; ?></div>
        <div>Votre serveur : <?= $serverName; ?></div>
    </body>
</html>
