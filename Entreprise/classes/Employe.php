<?php

class Employe {
    private string $nom;
    private string $prenom;
    private string $email;
    private Entreprise $entreprise;

    public function __construct(string $nom, string $prenom, string $email, Entreprise $entreprise) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->email = $email;
        $this->entreprise = $entreprise;
        $this->entreprise->addEmploye($this);
    }

    public function getNom(): string {
        return $this->nom;
    }

    public function setNom(string $nom) {
        $this->nom = $nom;
        return $this;
    }

    public function getPrenom(): string {
        return $this->prenom;
    }

    public function setPrenom(string $prenom) {
        $this->prenom = $prenom;
        return $this;
    }

    public function getEmail(): string {
        return $this->email;
    }

    public function setEmail(string $email) {
        $this->email = $email;
        return $this;
    }

    public function setEntreprise(Entreprise $entreprise) {
        $this->entreprise =$entreprise;
        return $this;
    }
    
    public function getInfos() {
        return $this." travaille dans l'entreprise ".$this->entreprise->$raisonSociale."</br>";
        // return $this->getNom()." ".$this->getPrenom()." travaille dans l'entreprise ".$this->entreprise->$raisonSociale."</br>";
    } 

    public function __toString() {
        return $this->prenom." ".$this->nom;
    }
}
?>