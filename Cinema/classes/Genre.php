<?php
class Genre
{
    private string $genre;   
    private array $films;

    public function __construct(
        string $genre,
    ) {
        $this->genre = $genre;              
        $this->films = [];
    }

    public function getGenre(): string
    {
        return $this->genre;
    }

    public function setGenre(string $genre)
    {
        $this->genre = $genre;
        return $this;
    }

    public function addFilm(Film $film) : array
    {
        $this->films[] = $film;
    }

    public function afficherFilmParGenre(Film $film) {
        $result = "<h2>Films de ". $this. "</h2></br>";
        
        foreach($this->films as $film) {
            $result .= $film->getTitre()."</br>";
        }
        return $result;
    }

    public function __toString()
    {
        return $this->genre;
    }
}
