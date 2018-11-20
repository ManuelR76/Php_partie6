<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <p>
            <a href="exercice3.php?startDate=2/05/2016&endDate=27/11/2016">Dis-moi bonjour</a>
        </p>
        <?php
        if (isset($_GET['startDate']) && isset($_GET['endDate'])) { // On a le nom, le prénom
            echo 'Bonjour, date de début :  ' . $_GET['startDate'] . ' date de fin : ' . $_GET['endDate'] . ' !';
        } else { // Il manque des paramètres, on avertit le visiteur
            echo 'Il faut renseigner une date de début et de fin !';
        }
        ?>
    </body>
</html>