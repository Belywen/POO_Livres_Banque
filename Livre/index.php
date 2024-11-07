<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO Livre</title>
</head>
<body>
    <h1>POO Livre</h1>

    <?php

    spl_autoload_register(function ($class_name) {
        require 'classes/'.$class_name.'.php';
    });

    $sKing = new Auteur("King", "Stephan");

    $bookCa = new Livre("Ca", $sKing, "1138", "1986", "20");
    $bookSimetierre = new Livre("Simetierre", $sKing, "1983", "374", "15");
    $bookLeFleau = new Livre("Le Fléau", $sKing, "1978", "823", "14");
    $bookShinning = new Livre("Shinning", $sKing, "1977", "447", "16");

    echo $sKing->afficherBibliotheque();

    ?>
</body>
</html>

<?php

?>