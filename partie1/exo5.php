<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>exo 5 partie 1</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
     
    
    <?php

    $answer =$_GET["hawa"]; // pour passer un element dans url 
  //  $answer = "yes" ;

    if  ($answer == "yes") {

        echo "Vous avez repondu yes";
     } 

     else if  ($answer == "no") {

        echo "Vous avez repondu non";
     } 

    else {
        echo "Vous avez répondu autre chose";
    }

    print_r($_GET)
    

    ?>




    </body>
</html>