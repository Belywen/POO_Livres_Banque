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
}
?>