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


}
?>