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
        <div class="result"> 
            <form method="POST" action="user.php">
                <div><label for="login"> Login :</label><input type="text" name="login" /></div>
                <div><label for="password">Password :</label><input type="password" name="password" /></div>
                <div><input type="submit" value="valider"/></div>
            </form>

        </div>
    </body>
</html>
