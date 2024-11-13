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

    public function __toString()  {
        return $this->perso;
    }
}
?>

