<?php

    class Auteur {
        private string $nom;
        private string $prenom;
    
        public function __construct(string $nom, string $prenom){
            $this->nom = $nom;
            $this->prenom = $prenom;
        }

        public function getNom(): string {
            return  $this->nom;
        }

        public function setNom(string $nom) {
            $this->nom = $nom;
            return  $this;
        }

        public function getPrenom(): string {
            return  $this->prenom;
        }

        public function setPrenom(string $prenom) {
            $this->prenom = $prenom;
            return  $this;
        }

        // public function getAfficherBibliotheque() {
        //     return "Livres de ".$this->prenom.$this->nom."</br>"
        //     $this->;
        // }

        public function __toString() {
            return "Livres de ".$this->prenom.$this->nom;
        }

    }
?>