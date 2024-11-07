<?php
class Livres {
    private string $titre;
    private string $auteur;
    private int $nbPages;
    private int $anneeParution;
    private float $prix;    

    public function __construct(string $titre, string $auteur, 
                int $nbPages, int $anneeParution, float $prix) {
        $this->titre = $titre;
        $this->auteur = $auteur;
        $this->nbPages = $nbPages;
        $this->anneeParution = $anneeParution;
        $this->prix = $prix;
    }

    public function getTitre(): string {
        return  $this->titre;
    }

    public function setTitre(string $titre)  {
        $this->titre = $titre;
        return  $this;
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
        return $this->titre." ( ".$this->AnneeParution." ) : ".
        $this->nbPages." pages / ".$this->prix." €.";
    }
}

?>