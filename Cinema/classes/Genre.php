<?php
class Genre
{
    private string $genre;

    public function __construct(
        string $genre,
    ) {
        $this->genre = $genre;
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

    public function __toString()
    {
        return $this->genre;
    }
}
