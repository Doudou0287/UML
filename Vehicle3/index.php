<?php
include_once 'Vehicle.php';
include_once 'Technician.php';

$technician1 = new Technician("John Doe");
$vehicle1 = new Vehicle("ABC123", $technician1);
$technician1->setVehicle($vehicle1);
echo $vehicle1->getRegisterNumber() . "\n"; // Output: ABC123

$technician2 = new Technician("Jane Smith");
$vehicle2 = new Vehicle("DEF456", $technician2);
$technician2->setVehicle($vehicle2);
$vehicle2->setTechnician($technician1);
echo $vehicle2->getTechnician()->getName() . "\n"; 
?>