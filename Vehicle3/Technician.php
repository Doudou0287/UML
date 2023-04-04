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
      $result .= ", assigned to vehicle with register number: " . $this->vehicle->getRegisterNumber();
    }
    return $result;
  }
  
  public function setName(string $name): void {
    $this->name = $name;
  }
  
  public function getName(): string {
    return $this->name;
  }
  
  public function setVehicle(?Vehicle $vehicle): void {
    $this->vehicle = $vehicle;
  }
  
  public function getVehicle(): ?Vehicle {
    return $this->vehicle;
  }
}
?>