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

        public function getNom()
        {
                return $this->nom;
        }

        public function setNom($nom)
        {
                $this->nom = $nom;
                return $this;
        }
 
        public function getPrenom()
        {
                return $this->prenom;
        }
 
        public function setPrenom($prenom)
        {
                $this->prenom = $prenom;
                return $this;
        }

        public function getDateNaissance()
        {
                return $this->dateNaissance;
        }

        public function setDateNaissance($dateNaissance)
        {
                $this->dateNaissance = $dateNaissance;
                return $this;
        }

        public function getVille()
        {
                return $this->ville;
        }

        public function setVille($ville)
        {
                $this->ville = $ville;
                return $this;
        }

        public function addCompte(Compte $compte) {
            $this->comptes [] = $compte;
        }

        public function afficherCompte() {
                $result = "<h2>Comptes</h2>";

                foreach ($this->comptes as $compte) {
                        $result .= $compte->getInfos()."</br>";
                }
                return $result;
        }

        public function age() {
            $today = new DateTime();
            $calculAge = $this->dateNaissance->diff($today);

            return $calculAge->y;
        }

        public function getInfos() {
            //affichage nom prenom age comptes?
            $result = "Titulaire : ".$this." (".$this->age()." ans)</br>";
            $result .= $this->afficherCompte();
            return $result;
        }

        public function __toString() {
            return $this->nom." ".$this->prenom;
        }
    }
?>










