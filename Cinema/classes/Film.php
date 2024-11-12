<?php
class Film
{
    private string $titre;
    private DateTime $dateSortieFr;
    private int $duree;
    private string $synopsis;

    public function __construct(
        string $titre,
        string $dateSortieFr,
        int $duree,
        string $synopsis,
    ) {
        $this->titre = $titre;
        $this->dateSortieFr = new DateTime($dateSortieFr);
        $this->duree = $duree;
        $this->synopsis = $synopsis;
    }

    public function getTitre(): string
    {
        return $this->titre;
    }

    public function setTitre(string $titre)
    {
        $this->titre = $titre;
        return $this;
    }

    public function getDateSortieFr(): DateTime
    {
        return $this->dateSortieFr;
    }

    public function setDateSortieFr(string $dateSortieFr)
    {
        $this->dateSortieFr = new DateTime($dateSortieFr);
        return $this;
    }

    public function getDuree(): int
    {
        return $this->duree;
    }

    public function setDuree(int $duree)
    {
        $this->duree = $duree;
        return $this;
    }

    public function getSynopsis(): string
    {
        return $this->synopsis;
    }

    public function setSynopsis(string $synopsis)
    {
        $this->synopsis = $synopsis;
        return $this;
    }

    public function __toString()
    {
        return $this->titre;
    }
}
