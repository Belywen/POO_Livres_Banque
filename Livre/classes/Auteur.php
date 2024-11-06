<?php
    class Auteur {
        private string $nom;
        private string $prenom;
    
        public function __construct($nom, $prenom){
            $this->nom = $nom;
            $this->prenom = $prenom;
        }

        public function getNom() {
            return  $this->nom;
        }

        public function setNom($nom) {
            $this->nom = $nom;
            return  $this;
        }

        public function getPrenom() {
            return  $this->prenom;
        }

        public function setPrenom($prenom) {
            $this->prenom = $prenom;
            return  $this;
        }

        public function getInfos() {

        }

        public function __toString() {
            return "Livres de ".$this->prenom.$this->nom;
        }

    }
?>