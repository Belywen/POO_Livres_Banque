<?php
class Casting {
    private Acteur $acteur;
    private Role $role;
    private Film $film;

    public function __construct(Acteur $acteur, Role $role, Film $film){
        $this->acteur = $acteur;
        $acteur->addCasting($this);
        $this->role = $role;
        $role->addCasting($this);    
        $this->film = $film;
        $film->addCasting($this);    
    }

    public function getActeur() : string
    {
        return $this->acteur;
    }

    public function setActeur(string $acteur)
    {
        $this->acteur = $acteur;

        return $this;
    }

    public function getRole() : string
    {
        return $this->role;
    }

    
    public function setRole(string $role)
    {
        $this->role = $role;

        return $this;
    }

   
    public function getFilm() : string
    {
        return $this->film;
    }

    public function setFilm(string $film)
    {
        $this->film = $film;
        return $this;
    }
}
?>