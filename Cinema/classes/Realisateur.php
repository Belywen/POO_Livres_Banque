<?php

class Realisateur extends Personne
{
    private array $films;

    public function __construct(
        string $nom,
        string $prenom,
        string $sexe,
        string $dateNaissance
    ) {
        parent::__construct(
            $nom,
            $prenom,
            $sexe,
            $dateNaissance
        );
        $this->films = [];
    }

    public function addFilm(Film $film)
    {
        $this->films[] = $film;
    }

    public function afficherInfosReal(): string
    {
        $result = $this . "</br> 
                Sexe : " . $this->sexe . "</br>
                Né le :" . $this->dateNaissance->format('d-m-Y');
        return $result;
    }

    public function afficherFilmParReal() {
        $result = "<h2>Films réalisés par ". $this." : </h2>";

        foreach($this->films as $film) {
            $result .= "</br>".$film->getInfosFilms().
                    " - Type : ".$film->getgenre()."</br></br>
                    Synopsis : ".$film->getSynopsis()."</br>";

        }
        return $result;
    }

}
