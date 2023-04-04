<?php
class Animal {
    private $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

    public function __toString() {
        return "Animal: " . $this->name;
    }

    public function setName($newName) {
        $this->name = $newName;
    }
}

?>