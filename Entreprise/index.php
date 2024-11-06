<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>POO Entreprise</h1>
    <?php

    // require "Entreprise.php";
    // require "Employe.php";

    spl_autoload_register(function ($class_name) {
        require 'classes/'.$class_name.'.php';
    });

    $elanFormation = new Entreprise("ELAN FORMATION", "1993-01-01", "14 rue du Rhône", "67100", "STRASBOURG");
    echo $elanFormation->getRaisonSociale();
    ?>
</body>
</html>