<?php

namespace Vehicles;
require_once 'VehicleBase.php';
class Car extends VehicleBase
{
  public function move(){
    echo "<br>CAR:moving";
  }
}
 ?>
