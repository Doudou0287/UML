<?php

include_once 'Vehicle.php';

class Technician {
  private string $name;
  
  public function __construct(string $name, ?Vehicle $vehicle = null) {
    $this->name = $name;
  }

  public function __toString(): string {
    $result = "Technician: " . $this->name;
    return $result;
  }
  
  public function setName(string $name): void {
    $this->name = $name;
  }
  
  public function getName(): string {
    return $this->name;
  }
  
}
?>