<?php

    class Contrat {
        private Entreprise $entreprise;
        private Employe $employe;
        private DateTime $dateEmbauche;
        private string $typeContrat;

        public function __construct(Entreprise $entreprise, Employe $employe, string $dateEmbauche, 
                        string $typeContrat) {
            $this->entreprise = $entreprise;
            $this->employe = $employe;
            $this->dateEmbauche = new DateTime($dateEmbauche);
            $this->typeContrat = $typeContrat;
            $this->entreprise->addContrat($this);
            $this->employe->addContrat($this);
        }

        public function getEntreprise() : string 
        {
            return $this->entreprise;
        }

        public function setEntreprise(string $entreprise) {
            $this->entreprise = $entreprise;
            return $this;
        }        

        public function getEmploye() : string
        {
            return $this->employe;
        }
        
        public function setEmploye(string $employe) {
            $this->employe = $employe;
            return $this;
        }

        public function getDateEmbauche() : DateTime
        {
           return $this->dateEmbauche->format("d-m-Y");
        }
            
        public function setDateEmbauche(DateTime $dateEmbauche)
        {
            $this->dateEmbauche = $dateEmbauche;
            return $this;
        }

        public function getTypeContrat(){
            return $this->typeContrat;
        }
        
        public function setTypeContrat(string $typeContrat){
            $this->typeContrat = $typeContrat;
            return $this;
        }
    }
    ?>