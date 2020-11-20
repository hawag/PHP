<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Exo 1 2 et 3 partie 3</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>

        <!--exo 1-->

    <h1>Exo 1, 2 et 3</h1>

       <?php
       $month = array ("Janvier" , "Fevrier", "Mars", "Avril", "Mai", "Juin", "Juillet", "Aout", "Septembre", "Octobre", "Novembre", "Decembre",);

        ?>

        <!--exo 2

        <?php
       $month = array ("Janvier" , "Fevrier", "Mars", "Avril", "Mai", "Juin", "Juillet", "Aout", "Septembre", "Octobre", "Novembre", "Decembre",);

       echo $month[5];

        ?>         -->

        <!--exo 3-->

        <?php
       $month = array ("Janvier " , "Fevrier ", "Mars ", "Avril ", "Mai ", "Juin ", "Juillet ", "Aout ", "Septembre ", "Octobre ", "Novembre ", "Decembre ",);

       foreach ($month as $elements) 
        {   
            echo '<pre>' ;
           echo $elements ;
           echo '</pre>';
        }

        ?>

        <hr>
        <h2>Exo 4 </h2>
        

        <?php

            $departements = [
                2 => "Aisne",
                59 => "Nord",
                60 => "Oise",
                62 => "Pas-de-Calais",
                80 => "Somme",
            ];

            echo $departements[60] ;

        ?>

            <hr>
            <h2>Exo 5</h2>

        <?php

            $departements = [
                2 => "Aisne",
                59 => "Nord",
                60 => "Oise",
                62 => "Pas-de-Calais",
                80 => "Somme",
            ];

            foreach ($departements as $elements)  {   
            echo '<pre>' ;
            echo $elements ;
            echo '</pre>';
            }

        ?>

        <hr>
        <h2>exo 6</h2>

        <?php

        $departements = [
            2 => "Aisne",
            59 => "Nord",
            60 => "Oise",
            62 => "Pas-de-Calais",
            80 => "Somme",
        ];

        foreach ($departements as $cle => $elements) 
        {
        echo "Le departement ".$elements." a le numero ". $cle."<br>";
        }
        ?>






    </body>
</html>