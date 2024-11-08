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
    echo $courantFr->getInfos();
    $courantFr->credit(200);
    echo $courantFr->getInfos();
    // $courantFr->debit(3000);
    // echo $courantFr->getInfos();
    //Voir pour virement

    echo "</br> Opérations sur pelEsn </br>";
    echo $pelEn->getInfos();
    $pelEn->credit(200);
    echo $pelEn->getInfos();
    // $pelEn->debit(3000);
    // echo $pelEn->getInfos();






    ?>
</body>

</html>