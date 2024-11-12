<?php
class Livre
{
    private string $titre;
    private int $nbPages;
    private int $anneeParution;
    private float $prix;
    private Auteur $auteur;

    public function __construct(
        string $titre,
        int $nbPages,
        int $anneeParution,
        float $prix,
        Auteur $auteur
    ) {
        $this->titre = $titre;
        $this->nbPages = $nbPages;
        $this->anneeParution = $anneeParution;
        $this->prix = $prix;
        $this->auteur = $auteur;
        $this->auteur->addLivre($this);
    }

    public function getTitre(): string
    {
        return $this->titre;
    }

    public function setTitre(string $titre)
    {
        $this->titre = $titre;
        return $this;
    }

    public function getNbPages(): int
    {
        return $this->nbPages;
    }

    public function setNbPages(int $nbPages)
    {
        $this->nbPages = $nbPages;
        return $this;
    }

    public function getAnneeParution(): int
    {
        return $this->anneeParution;
    }

    public function setAnneeParution(int $anneeParution)
    {
        $this->anneeParution = $anneeParution;
        return $this;
    }

    public function getPrix(): float
    {
        return $this->prix;
    }

    public function setPrix(float $prix)
    {
        $this->prix = $prix;
        return $this;
    }

    public function getAuteur(): string
    {
        return $this->auteur;
    }

    public function setAuteur(string $auteur)
    {
        $this->auteur = $auteur;
        return $this;
    }

    public function getInfos()
    {
        $result = $this . "(" . $this->anneeParution . " ) : " . $this->nbPages . " / " . $this->prix . "€";
        return $result;
    }

    public function __toString()
    {
        return $this->titre;
    }
}
