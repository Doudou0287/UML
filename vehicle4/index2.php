<?php
class Vehicle {
    private $registerNumber;
    private $technician;

    public function __construct($registerNumber, $technician = null) {
        $this->registerNumber = $registerNumber;
        $this->setTechnician($technician);
    }

    public function getRegisterNumber() {
        return $this->registerNumber;
    }

    public function setRegisterNumber($registerNumber) {
        $this->registerNumber = $registerNumber;
    }

    public function getTechnician() {
        return $this->technician;
    }

    public function setTechnician($technician) {
        if ($this->technician !== null) {
            // Remove technician from any other vehicle they may be assigned to
            foreach ($this->technician as $key => $value) {
                if ($value === $technician) {
                    unset($this->technician[$key]);
                }
            }
        }
        if ($technician !== null) {
            // If technician is not null, assign them to this vehicle
            $this->technician = (array) $technician;
        } else {
            // If technician is null, remove any existing technician from this vehicle
            $this->technician = null;
        }
    }
    
    public function addTechnician($technician) {
        $technician = (array) $technician;
        foreach ($technician as $t) {
            if (!in_array($t, $this->technician)) {
                $this->technician[] = $t;
            }
        }
    }
}

class Technician {
    private $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
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