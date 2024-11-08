<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO Banque</title>
</head>
<body>
    <h1>POO Banques</h1>

    <?php

        spl_autoload_register(function ($class_name) {
            require 'classes/'.$class_name.'.php';
        });

        $bob = new Titulaire("Bob", "Sinclar", "1980-01-01", "Paris");
        $alice = new Titulaire("Alice", "Nevers", "1977-01-01", "Saint Malo");

        echo($bob);


        
        $courantFr = new Compte($bob, "Compte courant", 10, "€");
        $pelFr = new Compte($bob, "Plan Epargne Logement", 5000, "€");
        $courantEn = new Compte($alice, "Compte courant", 10000, "£");
        $pelFr = new Compte($alice, "Plan Epargne Logement", 500, "$");

       
        echo $bob->getInfos();
    ?>
</body>
</html>