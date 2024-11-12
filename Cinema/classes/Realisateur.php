<?php

class Realisateur extends Personne
{
    protected string $nom;
    protected string $prenom;
    protected string $sexe;
    protected DateTime $dateNaissance;

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
    }

    public function afficherInfosReal(): string
    {
        $result = $this . "</br> 
                Sexe : " . $this->getSexe() . "</br>
                Né le :" . $this->getdateNaissance()->format('d-m-Y');
        return $result;
    }
}
