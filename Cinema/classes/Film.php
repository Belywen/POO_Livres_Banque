<?php
class Film
{
    private string $titre;
    private DateTime $dateSortieFr;
    private int $duree;
    private string $synopsis;
    private Realisateur $realisateur;
    private Film $film;

    public function __construct(
        string $titre,
        string $dateSortieFr,
        int $duree,
        string $synopsis,
        Realisateur $realisateur,
        Film $film,
    ) {
        $this->titre = $titre;
        $this->dateSortieFr = new DateTime($dateSortieFr);
        $this->duree = $duree;
        $this->synopsis = $synopsis;
        $this->realisateur = $realisateur;
        $this->realisateur->addFilm($this); 
        $this->genre = $genre;
        $this->genre->addFilm($this); 
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

    public function getRealisateur() : string
    {
            return $this->realisateur;
    }

    public function setRealisateur(string $realisateur)
    {
            $this->realisateur = $realisateur;
            return $this;
    }

    public function getGenre() : string
    {
            return $this->genre;
    }

        public function setGenre(string $genre)
    {
            $this->genre = $genre;

            return $this;
    }

    public function getInfosFilms() {
        $result = $this." (".$this->duree.")
                 - Sortie en salle le : ".$this->dateSortieFr->format('d-m-Y');
        return $result;
    }


    public function __toString()
    {
        return $this->titre;
    }

        
        
}
