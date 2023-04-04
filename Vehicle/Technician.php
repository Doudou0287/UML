<?php
include_once 'Vehicle.php';

class Technician {
  private string $name;
  private ?Vehicle $vehicle;

  public function __construct(string $name, ?Vehicle $vehicle = null) {
    $this->name = $name;
    $this->vehicle = $vehicle;
  }

  public function __toString(): string {
    $result = "Technician: " . $this->name;
    if ($this->vehicle != null) {
      $result .= " assigned to " . $this->vehicle->__toString();
    }
    return $result;
  }
}
?>