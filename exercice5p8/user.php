<?php
if (isset($_POST['login']) && isset($_POST['password'])) {
    setcookie('login', htmlspecialchars($_POST['login']), time() + 60 * 60 * 24);
    setcookie('password', htmlspecialchars($_POST['password']), time() + 60 * 60 * 24);
}
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>Exercice4</title>
    </head>
    <body>
        <div class="exercice">
            <div>Faire une page qui va récupérer les informations du cookie créé à l'exercice 3 et qui les affiches.</div>
        </div>
        <div>Mon cookie a pour login : <?= $_COOKIE['login']; ?> et pour password <?= $_COOKIE['password']; ?></div>
    </body>
</html>

