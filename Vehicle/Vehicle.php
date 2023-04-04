<?php

class Vehicle{
    private string $registerNumber;

    public function __construct(string $registerNumber) {
      $this->registerNumber = $registerNumber;
    }
  
    public function __toString(): string {
      return "Vehicle with register number: " . $this->registerNumber;
    }
}
?>