<?php
    class Titulaire {
        private string $nom;
        private string $prenom;
        private DateTime $dateNaissance;
        private string $ville;
        private array $comptes;

        public function __construct(string $nom, string $prenom, string $dateNaissance, string $ville) {
            $this->nom = $nom;
            $this->prenom = $prenom;
            $this->dateNaissance = new DateTime($dateNaissance);
            $this->ville = $ville;
            $this->comptes = [];
        }

        public function getNom() : string 
        {
                return $this->nom;
        }

        public function setNom(string $nom)
        {
                $this->nom = $nom;
                return $this;
        }
 
        public function getPrenom() : string
        {
                return $this->prenom;
        }
 
        public function setPrenom(string $prenom)
        {
                $this->prenom = $prenom;
                return $this;
        }

        public function getDateNaissance() : DateTime
        {
                return $this->dateNaissance;
        }

        public function setDateNaissance(DateTime $dateNaissance)
        {
                $this->dateNaissance = $dateNaissance;
                return $this;
        }

        public function getVille() : string
        {
                return $this->ville;
        }

        public function setVille(string $ville)
        {
                $this->ville = $ville;
                return $this;
        }

        public function addCompte(Compte $compte) {
                $this->comptes [] = $compte;
        }

        public function afficherInfosTitulaire() {
                $result = "<h2>Comptes de ".$this." (".$this->age()." ans)</h2>";
                $result .= $this->getInfos();
                return $result;
        }

        public function age() {
                $today = new DateTime();
                $calculAge = $this->dateNaissance->diff($today);
                
                return $calculAge->y;
        }

        public function getInfos() {
                $result = "";
                foreach ($this->comptes as $compte) {
                        $result .= $compte->getLibelle()."</br>";
                }
                return $result;
        }

        public function __toString() {
                return $this->nom." ".$this->prenom;
        }
    }
?>










