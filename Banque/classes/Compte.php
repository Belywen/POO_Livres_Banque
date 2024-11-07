<?php
    class Compte {
        private Titulaire $titulaire;
        private string $libelle;
        private float $soldeInitial;
        private string $devise;

    public function __construc(Titulaire $titulaire, string $libelle, float $soldeInitial, string $devise) {
        $this->libelle = $libelle;
        $this->soldeInitial = $soldeInitial;
        $this->devise = $devise;   
        $this->titulaire->addCompte($this);
    }
        
    public function getLibelle()
    {
            return $this->libelle;
    }

    public function setLibelle($libelle)
    {
            $this->libelle = $libelle;
            return $this;
    }

    public function getSoldeInitial()
    {
            return $this->soldeInitial;
    }

    public function setSoldeInitial($soldeInitial)
    {
            $this->soldeInitial = $soldeInitial;
            return $this;
    }

    public function getDevise()
    {
            return $this->devise;
    }
    
    public function setDevise($devise)
    {
            $this->devise = $devise;
            return $this;
    }

    public function getInfos() {
        //affichage datas comptes nom prenom
    }

    public function __toString() {
        return $this->libelle;
    }


    }

?>