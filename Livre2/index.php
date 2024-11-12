<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    spl_autoload_register(function ($class_name) {
        require "./classes/" . $class_name . ".php";
    });

    $sKing = new Auteur("King", "Stephen");

    $ca = new Livre("Ca", 1986, 1138, 20, $sKing);
    $simetierre = new Livre("Simetierre", 1986, 1138, 20, $sKing);

    echo $sKing->afficherBibliographie();
    ?>
</body>

</html>