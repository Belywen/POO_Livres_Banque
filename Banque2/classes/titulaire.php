<?php

class Titulaire
{
    private string $nom;
    private string $prenom;
    private DateTime $dateNaissance;
    private string $ville;
    private array $comptes;

    public function __construct(
        string $nom,
        string $prenom,
        string $dateNaissance,
        string $ville,
    ) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dateNaissance = new Datetime($dateNaissance);
        $this->ville = $ville;
        $this->comptes = [];
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

    public function getDateNaissance(): DateTime
    {
        return $this->dateNaissance;
    }


    public function setDateNaissance(DateTime $dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;
        return $this;
    }

    public function afficherAge(): int
    {
        $today = new DateTime();
        $age = $this->dateNaissance->diff($today);

        return $age->y;
    }

    public function getVille(): string
    {
        return $this->ville;
    }


    public function setVille(string $ville)
    {
        $this->ville = $ville;
        return $this;
    }

    public function addCompte(Compte $compte)
    {
        $this->comptes[] = $compte;
    }

    public function getInfosTitulaire(): string
    {
        $result = $this . " (" . $this->afficherAge() . " ans)</br>";
        return $result;
    }

    public function getInfosComptes(): string
    {
        $result = "";
        foreach ($this->comptes as $compte) {
            $result .= "Compte : " . $compte->getLibelle() .
                "</br>Solde Initial : " . $compte->getSoldeInitial() . $compte->getDevise() . "</br></br>";
        }
        return $result;
    }

    public function afficherTitulaireComptes()
    {
        $result = "<h2>Liste des comptes de " . $this->getInfosTitulaire() . "</h2></br>";
        $result .= $this->getInfosComptes();
        return $result;
    }

    public function __toString()
    {
        return $this->nom . " " . $this->prenom;
    }
}
