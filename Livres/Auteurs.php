<?php
    class Auteurs {
        private string $nom;
        private string $prenom;
    
        public function __construct($nom, $prenom){
            $this->nom = $nom;
            $this->prenom = $prenom;
        }
    }
?>