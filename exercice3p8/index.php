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
        <title>Exercice3</title>
    </head>
    <body>
        <p>Faire un formulaire qui permet de récupérer le login et le mot de passe de l'utilisateur. 
            A la validation du formulaire, stocker les informations dans un cookie.</p>
        <form method="POST" action="user.php">
            <div><label for="login"> Login :</label><input type="text" name="login" /></div>
            <div><label for="password">Password :</label><input type="password" name="password" /></div>
            <div><input type="submit" value="valider"/></div>
        </form> 
    </body>
</html>
