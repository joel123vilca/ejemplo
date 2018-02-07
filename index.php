<?php
include 'Vehicles/Car.php';
include 'Vehicles/Truck.php';

use Vehicles\{Car, Truck};

$car = new Car('max');
$car->move();
echo '<br>owner car :'.$car->getOwner();
echo "<br>1<br>";
$truck = new Truck('alex','Pickup');
$truck->move();
//echo '<br>owner truck :'.$truck->getOwner();
echo "<br>2<br>";

$truck = new Truck('juan','Pickup');
$truck->move();
//echo "<br>total truck:".Truck::$count;
echo "<br> total truck:".Truck::getTotal();

$ser = serialize($car);
$newcar = unserialize($ser);

echo 'newcar:'.$newcar->getOwner();
?>
