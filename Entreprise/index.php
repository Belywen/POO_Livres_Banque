<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO Entreprise</title>
</head>
<body>
    <h1>POO Entreprise</h1>
    <?php

    spl_autoload_register(function ($class_name) {
        require 'classes/'.$class_name.'.php';
    });

    $elanFormation = new Entreprise("ELAN FORMATION", "1993-01-01", "14 rue du Rhône", "67100", "STRASBOURG");
    $tf1 = new Entreprise("TF1", "1970-01-01", "13 rue de la Seine", "75000", "PARIS");
    $franceTravail = new Entreprise("FRANCE TRAVAIL", "1990-01-01", "13 rue du travail", "67100", "STRASBOURG");

    $stephane = new Employe("SMAIL", "Stéphane", "stephane@elan-formation.fr");
    $mickael = new Employe("MURMANN", "Mickael", "mickael@elan-formation.fr");

    $c1 = new Contrat($elanFormation, $stephane, "2020-01-01", "CDI");
    $c2 =new Contrat($elanFormation, $mickael, "2010-01-01", "Interim");
    $c3 =new Contrat($tf1, $stephane, "2023-01-01", "CDD");
    $c4 =new Contrat($franceTravail, $stephane, "2024-01-01", "Interim");
    

    echo $elanFormation->afficherEmployes();
    echo $tf1->afficherEmployes();
    echo $franceTravail->afficherEmployes();

    echo $stephane->afficherEntreprises();
    echo $mickael->afficherEntreprises();
    ?>
</body>
</html>