<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <p>
            <a href="exercice6.php?building=12&room=101">Dis-moi bonjour</a>
        </p>
        <?php
        if (isset($_GET['building']) && isset($_GET['room'])) { // On a le nom, le prénom
            echo 'Bonjour, vous devez vous rendre au ' . $_GET['building'] . ' dans la salle ' . $_GET['room'];
        } else { // Il manque des paramètres, on avertit le visiteur
            echo 'Il faut renseigner un immeuble et une salle !';
        }
        ?>
    </body>
</html>