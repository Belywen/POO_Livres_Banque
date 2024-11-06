<?php
class Livres {
    private string $titre;
    private string $auteur;
    private int $nbPages;
    private int $anneeParution;
    private float $prix;    

    public function __construct($titre) {
        $this->titre = $titre;
    }
}

?>