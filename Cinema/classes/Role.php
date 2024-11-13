<?php 
class Role {
    private string $perso;
    private array $castings;

    public function __construct(string $perso) {
        $this->perso = $perso;
        $this->castings = [];
    }

    public function addCasting(Casting $casting)
    {
        $this->castings[] = $casting;
    }

    public function getPerso() : string
    {
        return $this->perso;
    }

    public function setPerso(string $perso)
    {
        $this->perso = $perso;
        return $this;
    }

    public function afficherActeurPourUnRole() {
        $result = "<h2>Role de ".$this."</h2></br>";

        foreach($this->castings as $casting) {
            $result .= $casting->getActeur()." dans ".$casting->getFilm()."</br>";
        }

        return $result;
    }

    public function __toString()  {
        return $this->perso;
    }
}
?>

