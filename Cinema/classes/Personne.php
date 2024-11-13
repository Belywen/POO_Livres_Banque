<?php
class Personne
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
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->sexe = $sexe;
        $this->dateNaissance = new DateTime($dateNaissance);
    }

    public function getNom(): string
    {
        return $this->nom;
    }

    public function setNom(string $nom)
    {
        $this->nom = $nom;
        return $this;
    }

    public function getPrenom(): string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom)
    {
        $this->prenom = $prenom;
        return $this;
    }

    public function getSexe(): string
    {
        return $this->sexe;
    }


    public function setSexe(string $sexe)
    {
        $this->sexe = $sexe;
        return $this;
    }

    public function getDateNaissance(): DateTime
    {
        return $this->dateNaissance;
    }

    public function setDateNaissance(string $dateNaissance)
    {
        $this->dateNaissance = new DateTime($dateNaissance);

        return $this;
    }

    public function __toString(): string
    {
        return $this->prenom . " " . $this->nom;
    }
}
