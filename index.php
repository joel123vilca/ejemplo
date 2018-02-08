<?php
include 'Vehicles/Car.php';
include 'Vehicles/Truck.php';
include 'Vehicles/ToyCar.php';

use Vehicles\{Car, Truck, ToyCar};

$car = new Car('max');

echo "<br>GPS Pos :".$car->getPos();

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
try {
  echo "<br>class toycar";
  $ToyCar= new ToyCar('alex');
  $ToyCar->move();
} catch (Exception $e) {
  echo 'this is a toy';//exception : una nueva forma de encontrar errores
  //log...
} finally{
  echo '<br>finally';
}

echo '<br>newcar:'.$newcar->getOwner();


?>
