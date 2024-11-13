<?php
class Genre
{
    private string $type;   
    private array $films;

    public function __construct(
        string $type,
    ) {
        $this->type = $type;              
        $this->films = [];
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $type)
    {
        $this->type = $type;
        return $this;
    }

    public function addFilm(Film $film)  
    {
        $this->films[] = $film;
    }

    public function afficherFilmParGenre() : string
    {
        $result = "<h2>Films de ". $this. "</h2></br>";
        
        foreach($this->films as $film) {
            $result .= $film."</br>";
        }
        return $result;
    }

    public function __toString()
    {
        return $this->type;
    }
}
