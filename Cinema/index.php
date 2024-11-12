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


    $cNolan = new realisateur("Nolan", "Christopher", "M", "1970-09-30");
    $inception = new film("Inception", "2010-01-01", 148, "Dom Cobb, un voleur talentueux 
    spécialisé dans l'extraction de secrets en infiltrant les rêves des autres. 
    Pour retrouver sa vie et sa famille, il accepte un dernier travail : implanter 
    une idée dans l'esprit d'un héritier, une mission complexe appelée 'inception'. 
    Mais plus ils plongent dans les rêves, plus la frontière entre réalité et illusion 
    devient floue, menaçant la survie de l'équipe.");

    /*Afficher infos: film+real+genre*/

    /*Afficher infos : real*/
    echo $cNolan->afficherInfosReal();

    /*Afficher films par real*/

    /*Afficher films par genre*/

    ?>
</body>

</html>