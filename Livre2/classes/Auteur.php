<?php
class Auteur
{
    private string $nom;
    private string $prenom;
    private array $livres;

    public function __construct(string $nom, string $prenom)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->livres = [];
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

    public function getNom(): string
    {
        return $this->nom;
    }

    public function setNom(string $nom)
    {
        $this->nom = $nom;
        return $this;
    }

    public function addLivre(Livre $livre)
    {
        $this->livres[] = $livre;
    }

    public function afficherBibliographie()
    {
        $result = "<h2>Livres de " . $this . "</h2></br>";

        foreach ($this->livres as $livre) {
            $result .= $livre->getInfos() . "</br>";
        }
        return $result;
    }

    public function __toString()
    {
        return $this->prenom . " " . $this->nom;
    }
}
