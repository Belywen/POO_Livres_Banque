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

    $lily = new Titulaire("Renau", "Lily", "1988-03-14", "Saverne");

    $courant = new Compte("Courant", 200, "€", $lily);
    $pel = new Compte("PEL", 3000, "€", $lily);


    echo $lily->afficherTitulaireComptes();
    echo "---</br>";
    echo $courant->afficherInfoscomptes();
    echo "</br>---</br>";
    echo "courant : " . $courant->credit(50);
    echo "</br>---</br>";
    echo "courant : " . $courant->debit(50);
    echo "</br>---</br>";
    echo "courant vers pel: " . $courant->virement($pel, 350);


    ?>
</body>

</html>