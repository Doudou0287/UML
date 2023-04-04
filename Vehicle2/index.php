<?php

include_once 'Vehicle.php';
include_once 'Technician.php';

$technician1 = new Technician("me again");
$vehicle1 = new Vehicle("something else", $technician1);



?>