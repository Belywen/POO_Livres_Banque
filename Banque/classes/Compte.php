<?php
    class Compte {
        private Titulaire $titulaire;
        private string $libelle;
        private float $soldeInitial;
        private string $devise;

    public function __construct(Titulaire $titulaire, string $libelle, float $soldeInitial, string $devise) {
        $this->titulaire = $titulaire;
        $this->libelle = $libelle;
        $this->soldeInitial = $soldeInitial;
        $this->devise = $devise;   
        $this->titulaire->addCompte($this);
    }
        
    public function getLibelle() : string
    {
            return $this->libelle;
    }

    public function setLibelle(string $libelle)
    {
            $this->libelle = $libelle;
            return $this;
    }

    public function getSoldeInitial() : float
    {
            return $this->soldeInitial;
    }

    public function setSoldeInitial(float $soldeInitial)
    {
            $this->soldeInitial = $soldeInitial;
            return $this;
    }

    public function getDevise() : string
    {
            return $this->devise;
    }
    
    public function setDevise(string $devise)
    {
            $this->devise = $devise;
            return $this;
    }

    public function getInfos() {      
        $result = "Solde initial : ".$this->soldeInitial.$this->devise."</br>";

        return $result;
     }

     public function afficherInfosCompte()
     {
        $result = "Type : ".$this."</br>";
        $result .= "Titulaire : ".$this->titulaire->getNom()." ".$this->titulaire->getPrenom()."</br>";
        $result .= $this->getInfos();
        $result .= "</br>";

        return $result;
     }

    public function __toString() {
        return $this->libelle;
    }
}

?>