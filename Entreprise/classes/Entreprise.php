<?php 

    class Entreprise {
        private string $raisonSociale;
        private DateTime $dateCreation;
        private string $adresse;
        private string $cp;
        private string $ville;

        public function __conctruct(string $raisonSociale, string $dateCreation, string $adresse, 
            string $cp, string $ville) {
                $this->raisonSociale = $raisonSociale;
                $this->dateCreation = $dateCreation;
                $this->adresse = $adresse;
                $this->cp = $cp;
                $this->ville = $ville;
            }

        public function getRaisonSociale(): string {
            return $this->raisonSociale;
        }

        public function setRaisonSociale(string $raisonSociale) {
            $this->raisonSociale = $raisonSociale;
            return $this;
        }

        // public function getDateCreation(): DateTime {
            //     return $this->dateCreation;
            // }
    
        // public function setDateCreation(string $dateCreation) {
        //     $this->dateCreation = $dateCreation;
        // return $this;
        // }

         // public function getAdresse(): string {
            //     return $this->adresse;
            // }
    
        // public function setAdresse(string $adresse) {
        //     $this->adresse = $adresse;
        // return $this;
        // }

        // public function getCp(): string {
            //     return $this->cp;
            // }
    
        // public function setCp(string $cp) {
        //     $this->cp = $cp;
        // return $this;
        // }

        // public function getVille(): string {
            //     return $this->ville;
            // }
    
        // public function setVille(string $ville) {
        //     $this->ville = $ville;
        // return $this;
        // }
    }