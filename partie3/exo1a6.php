<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Exo 1 à 6 partie 3</title>
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
        <ul>
        <?php
       $month = array ("Janvier " , "Fevrier ", "Mars ", "Avril ", "Mai ", "Juin ", "Juillet ", "Aout ", "Septembre ", "Octobre ", "Novembre ", "Decembre ",);

       foreach ($month as $elements)  {   
           echo "<li>". $elements . "</li>" ;
          };

        ?>

        </ul>


        <!--exo 4-->
        <hr>
        <h2>Exo 4 </h2>
        
          <ul>
        <?php

            $departements = [
                '02' => "Aisne",
                '59' => "Nord",
                '60' => "Oise",
                '62' => "Pas-de-Calais",
                '80' => "Somme",
            ];

            echo "<li>" . $departements[59] . "</li>" ;

        ?>
        </ul>

        <!--exo 5-->
            <hr>
            <h2>Exo 5</h2>
            <ul>
        <?php

            $departements = [
                '02' => "Aisne",
                '59' => "Nord",
                '60' => "Oise",
                '62' => "Pas-de-Calais",
                '80' => "Somme",
            ];

            foreach ($departements as $elements)  {   
            echo "<li>" . $elements . "</li>" ;
            }

        ?>
        </ul>

             <!--exo 6-->
        <hr>
        <h2>exo 6</h2>

        <?php

        $departements = [
            '02' => "Aisne",
            '59' => "Nord",
            '60' => "Oise",
            '62' => "Pas-de-Calais",
            '80' => "Somme",
        ];

        foreach ($departements as $key => $value) 
        {
        echo "Le departement ".$value." a le numero ". $key."<br>";
        }
        ?>

    </body>
</html>