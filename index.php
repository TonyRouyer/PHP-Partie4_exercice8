<?php
    function addition($nb1 = 2, $nb2 = 3, $nb3 = 5){
        $somme = $nb1 + $nb2 + $nb3;
        echo $somme;
    } 
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>partie 4 exercice 8</title>
    </head>
    <body>
        <p>
            <?php 
                addition();
            ?>
        </p>
    </body>
</html>