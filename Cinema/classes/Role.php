<?php 
class Role {
    private string $role;
    private array $castings;

    public function __construct(string $role) {
        $this->role = $role;
        $this->castings = [];
    }

    public function addCasting(Casting $casting)
    {
        $this->castings[] = $casting;
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

    public function __toString()  {
        $this->role;
    }
}
?>

