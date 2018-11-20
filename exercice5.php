<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <p>
            <a href="exercice5.php?week=12">Dis-moi bonjour</a>
        </p>
        <?php
        if (isset($_GET['week'])) { // On a le nom, le prénom
            echo 'Bonjour, semaine en cours :  ' . $_GET['week'];
        } else { // Il manque des paramètres, on avertit le visiteur
            echo 'Il faut renseigner une semaine !';
        }
        ?>
    </body>
</html>