<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <p>
            <a href="exercice4.php?language=PHP&server=LAMP">Dis-moi bonjour</a>
        </p>
        <?php
        if (isset($_GET['language']) && isset($_GET['server'])) { // On a le nom, le prénom
            echo 'Bonjour, langage utilisé :  ' . $_GET['language'] . ' sur serveur : ' . $_GET['server'] . ' !';
        } else { // Il manque des paramètres, on avertit le visiteur
            echo 'Il faut renseigner un langage et un serveur !';
        }
        ?>
    </body>
</html>