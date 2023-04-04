<?php

include_once 'Vehicle.php';
include_once 'Technician.php';


$vehicle = new Vehicle("something");
$technician = new Technician("him", $vehicle);
echo $technician . "\n";

$technician = new Technician("me");
echo $technician . "\n";




