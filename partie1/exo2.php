<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>exo 1 partie 2</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
       
        
    <?php

    $lastName = "Hawa" ;
    $firstName = "Gary";
    $age = (int) 23 ; 
    
    /*pas de guillemet pour un nombre entier sinon il pense que c'est une chaine de caractere 
    int = integrer | il force le type de la variable, ici il precise que c'est un entier. 
    bool = pour le type boolean(true ou false) |
      */

    ?>

    <ul>
        <li> Nom : <?php echo $lastName ?></li>
        <li> Prenom : <?php echo $firstName ?> </li>
        <li> Age : <?php echo $age ?> </li>
    </ul>

    <!-- MANIERE DE CONCATENER -->
    <p><?php echo "je m'appelle ".ucfirst($lastName).' '.strtoupper($firstName). " et j'ai ". ($age+10) . " ans.";?></p>
    
    <!-- pour ajouter 10 ans a l'age mettre la var entre parenthese et ajouter +10 ou *10... selon ce qu'on veut calculer

    strtoupper = Mettre en majuscule  | string to upper case
    ucfirst = Met la premiere lettre en Majuscule | upper caser first character 
    strtolower = mettre en miniscule | -->



    </body>
</html>