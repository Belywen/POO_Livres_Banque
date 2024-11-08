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
        require 'classes/' . $class_name . '.php';
    });

    $bob = new Titulaire("Bob", "Sinclar", "1980-01-01", "Paris");
    $alice = new Titulaire("Alice", "Nevers", "1977-01-01", "Saint Malo");

    $courantFr = new Compte($bob, "Compte courant", 10, "€", 0, 0, 0);
    $pelFr = new Compte($bob, "Plan Epargne Logement", 5000, "€", 0, 0, 0);
    $pelEn = new Compte($alice, "Plan Epargne Logement", 500, "£", 0, 0, 0);


    //Infos titulaires + age + comptes :
    echo $bob->afficherInfosTitulaire();
    echo $alice->afficherInfosTitulaire();

    echo "</br>---</br>";

    //Infos completes comptes + titulaire:
    echo $courantFr->afficherInfosCompte();
    echo $pelFr->afficherInfosCompte();
    echo $pelEn->afficherInfosCompte();

    echo "</br>---</br>";

    echo "Opérations sur compte courant </br>";
    echo "Avant crédit de 200 : " . $courantFr->getInfos();
    $courantFr->credit(200);
    echo "Avant débit de 3000 : " . $courantFr->getInfos();
    $courantFr->debit(3000);

    echo "Opérations de virement </br>";
    echo "Avant virement de 2790 : " . $courantFr->getInfos();
    $pelFr->virement($courantFr, 2790);
    echo "Après virement: </br>";
    echo "Sur courant : " . $courantFr->getInfos();
    echo "Sur PEL : " . $pelFr->getInfos();



    ?>
</body>

</html>