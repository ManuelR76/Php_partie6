<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <p>
            <a href="exercice2.php?lastname=Nemare&firstname=Jean&age=20">Dis-moi bonjour</a>
        </p>
        <?php
        if (isset($_GET['lastname']) && isset($_GET['firstname']) && isset ($_GET ['age'])) { // On a le nom, le prénom
            echo 'Bonjour ' . $_GET['lastname'] . ' ' . $_GET['firstname'] . ' !';
        } else { // Il manque des paramètres, on avertit le visiteur
            echo 'Il faut renseigner un nom, un prénom et un âge !';
        }
        ?>
    </body>
</html>