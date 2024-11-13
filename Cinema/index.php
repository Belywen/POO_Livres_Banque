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


    $cNolan = new Realisateur("Nolan", "Christopher", "M", "1970-09-30");
    $mScorcese = new Realisateur("Scorcese", "Martin", "M", "1942-11-17");

    $sF = new Genre("Science-Fiction");
    $drame = new Genre("Drame");
    $policier = new Genre("Policier");

    $inception = new Film("Inception", "2010-01-01", 148, "Dom Cobb, un voleur talentueux 
    spécialisé dans l'extraction de secrets en infiltrant les rêves des autres. 
    Pour retrouver sa vie et sa famille, il accepte un dernier travail : implanter 
    une idée dans l'esprit d'un héritier, une mission complexe appelée 'inception'. 
    Mais plus ils plongent dans les rêves, plus la frontière entre réalité et illusion 
    devient floue, menaçant la survie de l'équipe.", $cNolan, $sF);

    $lDicaprio = new Acteur("Dicaprio", "Leonardo", "M", "1974-11-11");
    $mCotillard = new Acteur("Cotillard", "Marion", "F", "1975-03-30");
    $cBale= new Acteur("Bale", "Christian", "M", "1974-11-11");

    $domCom = new Role("Dominic Com");
    $malCom = new Role("Mallorie Cobb");

    $theDarkKnight = new Film("The Dark Knight", "2008-01-01", 152, "Batman lutte contre le chaos 
    semé par le Joker, un criminel anarchiste déterminé à plonger Gotham dans le désespoir. Alors 
    que la ville se retrouve menacée par des choix moraux déchirants, Batman doit faire face à son 
    propre sens de la justice. Le film explore les frontières entre le bien et le mal, et la manière 
    dont une ville et un héros peuvent être façonnés par leurs adversaires.", $cNolan, $sF);
    /*Christian bale > Batman - Heath Ledger > Joker*/    

    $wallStreet = new Film("Le loup de Wall Street", "2013-01-01", 179, "Jordan Belfort, un courtier 
    en bourse ambitieux qui crée une société de courtage à succès, Stratton Oakmont. Conduit par sa 
    soif de pouvoir, d'argent et de luxure, il tombe dans des pratiques illégales, comme la fraude et 
    le blanchiment d'argent, tout en exploitant ses employés et clients. La spirale destructrice de son 
    comportement le mène à la chute, avec la justice et l'intrusion des autorités fédérales qui mettent 
    fin à son empire financier.", $mScorcese, $drame);
    /*acteur : Dicaprio > Jordan Belfort - Margot Robbie > Naomi Lapaglia*/

    $jBelfort = new Role("Jordan Belfort");

    $lesInfiltres = new Film("Les Infiltrés", "2006-01-01", 158, "L'histoire de deux hommes qui mènent 
    une double vie : Billy Costigan, un jeune policier sous couverture, et Colin Sullivan, un membre de
     la mafia irlandaise infiltré dans la police. Les deux hommes cherchent à découvrir l'identité de 
     l'autre tout en jonglant avec leur loyauté et leurs obligations envers leurs employeurs respectifs. 
     Le film se concentre sur le jeu de chat et de souris entre les deux, jusqu'à une confrontation 
     explosive où la trahison et la corruption sont révélées dans un final surprenant.", $mScorcese, $policier);
    /* dicaprio > William « Billy » Costigan - Matt Damon > Colin Sullivan*/

    

    /*Afficher infos : real*/    
    echo $cNolan->afficherInfosReal();

    /*Afficher films par real + genre*/
    echo "</br>---</br>";
    echo $cNolan->afficherFilmParReal();


    /*Afficher films par genre*/
    echo "</br>---</br>";
    echo $sF->afficherFilmParGenre();

    echo "</br>---</br></br>";
    $casting1 = new casting($lDicaprio, $domCom, $inception);
    $casting2 = new casting($lDicaprio, $jBelfort, $wallStreet);
    $casting3 = new casting($cBale, $domCom, $inception);
   
    
    /*Filmographie d'un acteur */
    echo $lDicaprio->afficherFilmographie();

    /*Afficher les acteurs pour 1 role */
    echo $domCom->afficherActeurPourUnRole();

       

    ?>
</body>

</html>