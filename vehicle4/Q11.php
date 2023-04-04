<?php

class Vehicle {
    private $registerNumber;
    private $technicians;

    public function __construct($registerNumber) {
        $this->registerNumber = $registerNumber;
        $this->technicians = array();
    }

    public function setRegisterNumber($registerNumber) {
        $this->registerNumber = $registerNumber;
    }

    public function getRegisterNumber() {
        return $this->registerNumber;
    }

    public function addTechnician($technician) {
        array_push($this->technicians, $technician);
        $technician->addVehicle($this);
    }

    public function getTechnicians() {
        return $this->technicians;
    }
}

class Technician {
    private $name;
    private $vehicles;

    public function __construct($name) {
        $this->name = $name;
        $this->vehicles = array();
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

    public function addVehicle($vehicle) {
        array_push($this->vehicles, $vehicle);
    }

    public function getVehicles() {
        return $this->vehicles;
    }
}



// Create the first vehicle instance
$vA = new Vehicle('A');
var_dump($vA);

// Create the second vehicle instance
$vB = new Vehicle('B');
var_dump($vB);

// Create three technician instances with different names
$paul = new Technician('paul');
$juliette = new Technician('juliette');
$jalila = new Technician('jalila');

// Create two vehicle instances
$vA = new Vehicle('A', [$juliette, $paul]);
$vB = new Vehicle('B', [$jalila]);
var_dump($vA);
var_dump($vB);

$vB->addTechnician($paul);
var_dump($vA);
var_dump($vB);

?>