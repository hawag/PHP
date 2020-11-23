<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>exo 1 à 2</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>

    <!-- Exo 1 -->
    <h1>exo 1</h1>
      
    <?php

    function firstFunction ($premiere) {
        return strtoupper($premiere) ;
    }

    echo firstFunction("salut tout le monde") ;

    ?>

    <!-- Exo 2 -->
    <hr>
    <h2>exo 2</h2>
  

    <?php

    function secondFunction ($premiere , $deuxieme) {
        return strtoupper($premiere . $deuxieme) ;
    }

    echo secondFunction("Salut tout le monde " , "je suis Hawa") ;

    ?>

    <!-- Exo 3 -->
    <hr>
    <h2>Exo 3</h2>


    <?php 

    function compareNumber ($lastNumber , $firstNumber) {
        if ($lastNumber > $firstNumber) {
            return "Le premier nombre est plus grand";
        }

        else if ($lastNumber < $firstNumber) {
            return"Le premier nombre est plus petit";
        }
        else {
            return  "Les deux nombres sont identiques";
        }

    } 

    echo compareNumber(12,7);
    ?>

     <!-- Exo 4 -->
     <hr>
    <h2>Exo 4</h2>

    <?php 

    function identity($name , $firstName , $age) {
    return "Bonjour " . $name . $firstName . " tu as " . $age . " ans";
    }

    echo identity("Hawa " , "Gary" , "23");

    ?>

    <!-- Exo 5 -->
    <hr>
    <h2>Exo 5</h2>

    <ul>

    <?php
    // Methode 1
    // On crée une boucle, i=0 et i sera inferieur ou egale a 300 et $i++ veut dire qu'on ajoute un et on verifie qu'on est toujours dans les conditions de la boucle. 
    // i pour itération, on utilise i lorsqu'on a un compteur
    // ici, le code qui va être dans la boucle sera executé 300x. 

    // dans cette exo tout les chiffres impaire entre 0 et 300 vont être affiché 

    for ($i = 0; $i <=300; $i ++) {
     if ($i % 2 == 1) {
         echo "<li>" . $i . "</li>";
     }
    }

    echo "<hr>" ;
    // Methode 2, en utilisant une fonction 

    function testEven($value) {
        if ($value % 2 == 1) { return true; }
        else { return false; } 


    }
   
    function test() {
        $result = "<ul>" ;
        for ($i=0; $i <= 300 ; $i++) {
            if (testEven($i)=== true) 
                {
                    $result .= "<li>" . $i . "</li>";
                }
        }
        $result .= "</ul>";
        return $result;
    }

    echo test ();



    ?>
    </ul>


    <!-- Exo 6 -->
    <hr>
    <h2>Exo 6</h2>

    <ul>
    <?php

    for ($i= 1; $i <=100; $i++) {
        if (($i % 3 === 0 ) && ($i % 5 === 0)) {
            echo "<li> FizzBuzz </li>";
        }
        else if ($i % 3 === 0) {
            echo "<li> Fizz </li>";
        }
        else if ($i % 5 === 0 ) {
            echo "<li> Buzz </li>";
        }
        else {
            echo "<li>" . $i . "</li>";
        }
    }
    ?>
    </ul>








    </body>
</html>