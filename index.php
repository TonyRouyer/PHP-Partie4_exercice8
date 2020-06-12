<?php
    function addition($nb1 = 0, $nb2 = 0, $nb3 = 0){
        $somme = $nb1 + $nb2 + $nb3;
        return $somme;
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
            <?php echo addition(); ?>
        </p>
    </body>
</html>