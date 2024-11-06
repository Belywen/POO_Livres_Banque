<?php
class Livres {
    private string $titre;
    private string $auteur;
    private int $nbPages;
    private int $anneeParution;
    private float $prix;    

    public function __construct($titre) {
        $this->titre = $titre;
        $this->auteur = $auteur;
        $this->nbPages = $nbPages;
        $this->anneeParution = $anneeParution;
        $this->prix = $prix;
    }

    public function getTitre() {
        return  $this->titre;
    }

    public function setTitre($titre) {
        $this->titre = $titre;
        return  $this;
    }

    public function getNbPages() {
        return  $this->titre;
    }

    public function setNbPages($nbPages) {
        $this->nbPages = $nbPages;
        return  $this;
    }

    public function getAnneeParution() {
        return  $this->anneeParution;
    }

    public function setAnneeParution($anneeParution) {
        $this->anneeParution = $anneeParution;
        return  $this;
    }

    public function getPrix() {
        return  $this->prix;
    }

    public function setPrix($prix) {
        $this->prix = $prix;
        return  $this;
    }
}

?>