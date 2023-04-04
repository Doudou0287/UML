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

// Create instances of the Vehicle class
$vA = new Vehicle('A');
$vB = new Vehicle('B');
$vC = new Vehicle('C');

// Create instances of the Technician class
$juliette = new Technician('Juliette');
$jalila = new Technician('Jalila');
$paul = new Technician('Paul');

// Assign technicians to vehicles
$vA->addTechnician($juliette);
$vB->addTechnician($jalila);
$vB->addTechnician($juliette);
$vC->addTechnician($paul);

// Assign vehicles to technicians
$juliette->addVehicle($vA);
$juliette->addVehicle($vB);
$jalila->addVehicle($vB);
$paul->addVehicle($vC);

var_dump($vA);
var_dump($vB);
var_dump($vC);
var_dump($paul);
// var_dump($jalila);
// var_dump($juliette);

?>