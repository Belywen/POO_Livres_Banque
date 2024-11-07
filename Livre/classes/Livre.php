<?php
class Livre {
    private string $titre;
    private Auteur $auteur;
    private int $nbPages;
    private int $anneeParution;
    private float $prix;     

    public function __construct(string $titre, Auteur $auteur, int $nbPages, 
                    int $anneeParution, float $prix) {
        $this->titre = $titre;
        $this->auteur = $auteur;
        $this->nbPages = $nbPages;
        $this->anneeParution = $anneeParution;
        $this->prix = $prix;
        $this->auteur->addLivre($this);
    }

    public function getTitre(): string {
        return  $this->titre;
    }

    public function setTitre(string $titre)  {
        $this->titre = $titre;
        return  $this;
    } 

    public function getAuteur()    {
        return $this->auteur;
    }

    public function setAuteur($auteur)    {
        $this->auteur = $auteur;
        return $this;
    }

    public function getNbPages(): int {
        return  $this->titre;
    }

    public function setNbPages(int $nbPages)  {
        $this->nbPages = $nbPages;
        return  $this;
    }

    public function getAnneeParution(): int {
        return  $this->anneeParution;
    }

    public function setAnneeParution(int $anneeParution) {
        $this->anneeParution = $anneeParution;
        return  $this;
    }

    public function getPrix(): float {
        return  $this->prix;
    }

    public function setPrix(float $prix) {
        $this->prix = $prix;
        return  $this;
    }

    public function __toString() {
        return $this->titre;
    }

    public function getInfos() {
        return $this->titre." (".$this->anneeParution.") : ".$this->nbPages. " pages / ".$this->prix." €";
    }

    
}

?>