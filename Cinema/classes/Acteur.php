<?php
class Acteur extends Personne {

    private array $castings;

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
    $this->castings = [];
    }

    public function addCasting(Casting $casting)
    {
        $this->castings[] = $casting;
    }

    public function afficherFilmographie() {
        $result = "<h2>Filmographie de ".$this."</h2></br>";

        foreach($this->castings as $casting) {
            $result .= $casting->getRole()." dans ".$casting->getFilm()."</br>";
        }

        return $result;
    }


    public function __toString()
    {
        return parent::__toString();
    }


}
?>