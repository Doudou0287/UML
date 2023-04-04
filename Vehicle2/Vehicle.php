<?php

include_once 'Technician.php';

class Vehicle {
  private string $registerNumber;
  private ?Technician $technician;

  public function __construct(string $registerNumber, ?Technician $technician = null) {
    $this->registerNumber = $registerNumber;
    $this->technician = $technician;
  }

  public function __toString(): string {
    $result = "Vehicle with register number: " . $this->registerNumber;
    if ($this->technician != null) {
      $result .= ", assigned to technician: " . $this->technician->getName();
    }
    return $result;
  }
  
  public function setRegisterNumber(string $registerNumber): void {
    $this->registerNumber = $registerNumber;
  }
  
  public function getRegisterNumber(): string {
    return $this->registerNumber;
  }
  
  public function setTechnician(?Technician $technician): void {
    $this->technician = $technician;
  }
  
  public function getTechnician(): ?Technician {
    return $this->technician;
  }
}
?>
