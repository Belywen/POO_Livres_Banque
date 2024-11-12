<?php
class Compte
{
    private string $libelle;
    private float $soldeInitial;
    private string $devise;
    private Titulaire $titulaire;

    public function __construct(
        string $libelle,
        float $soldeInitial,
        string $devise,
        Titulaire $titulaire
    ) {
        $this->libelle = $libelle;
        $this->soldeInitial = $soldeInitial;
        $this->devise = $devise;
        $this->titulaire = $titulaire;
        $this->titulaire->addCompte($this);
    }

    public function getLibelle(): string
    {
        return $this->libelle;
    }

    public function setLibelle(string $libelle)
    {
        $this->libelle = $libelle;
        return $this;
    }

    public function getSoldeInitial(): float
    {
        return $this->soldeInitial;
    }

    public function setSoldeInitial(float $soldeInitial)
    {
        $this->soldeInitial = $soldeInitial;
        return $this;
    }

    public function getDevise(): string
    {
        return $this->devise;
    }

    public function setDevise(string $devise)
    {
        $this->devise = $devise;
        return $this;
    }

    public function getTitulaire(): string
    {
        return $this->titulaire;
    }

    public function setTitulaire(string $titulaire)
    {
        $this->titulaire = $titulaire;
        return $this;
    }

    public function getInfos()
    {
        return "Compte : " . $this . "</br>
            Solde init : " . $this->soldeInitial . $this->devise . "</br>";
    }

    public function afficherInfoscomptes()
    {
        $result = $this->getInfos();
        $result .= "de " . $this->titulaire->getNom() . " " . $this->titulaire->getPrenom();
        return $result;
    }

    public function credit(float $montant)
    {
        $result = $this->soldeInitial += $montant;
        return $result;
    }

    public function debit(float $montant)
    {
        $result = $this->soldeInitial -= $montant;
        return $result;
    }

    public function virement(Compte $compteDest, float $montant)
    {
        $this->debit($montant);
        $compteDest->credit($montant);
    }

    public function __toString()
    {
        return $this->libelle;
    }
}
