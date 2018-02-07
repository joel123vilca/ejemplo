<?php
include 'Vehicles/Car.php';
include 'Vehicles/Truck.php';

use Vehicles\{Car, Truck};

$car = new Car('max');
$car->move();
echo '<br>owner car :'.$car->getOwner();

$truck = new Truck('alex','Pickup');
$truck->move();
echo '<br>owner truck :'.$truck->getOwner();

?>
