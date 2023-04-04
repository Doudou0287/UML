
<?php
class Vehicle {
    private $registerNumber;
    private $technician;

    public function __construct($registerNumber, $technician = null) {
        $this->registerNumber = $registerNumber;
        $this->technician = $technician;
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
        $this->technician = $technician;
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

// Create a technician instance


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

// Create a vehicle instance using both jalila and juliette technicians
$vA->setTechnician([$paul, $juliette]);
var_dump($vA);

$vB->setTechnician($jalila);
$vB->setTechnician($paul);
var_dump($vB);

var_dump($vA);