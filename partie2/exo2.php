<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>exo 2 partie 2</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>

        <?php
        $age = 24;
        $gender = "femme"; 
        

        if (($age>=18) && ($gender == "femme")) {
            echo "Vous êtes majeur et une femme ";
        } else if (($age<18) && ($gender == "femme")) {
            echo "Vous êtes mineur et une femme ";
        }
        else if (($age>=18) && ($gender == "homme")) {
            echo "Vous êtes majeur et un homme ";
        }
        else {
            echo "Vous êtes mineur et un homme ";
        }
        
        echo 'Vous êtes '.(($age<18)? 'mineur' : 'majeur').' et '.(($gender=='homme')? 'un homme' : 'une femme');




       
        ?>




    </body>
</html>