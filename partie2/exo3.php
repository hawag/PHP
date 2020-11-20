<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>exo 3 partie 3</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>


    <?php
    echo ($gender != 'Homme') ? 'C\'est une développeuse !!!' : 'C\'est un développeur !!!';
    // ecriture ternaire : 1 conditions et 2 valeurs
    ?>
    
    <?php

    $gender = "Femme" ;

        if ($gender != 'Homme')  {
        echo "C'est une développeuse !!!";
        } 
        else {
            echo "C'est un développeur";
        };

    ?>



    </body>
</html>