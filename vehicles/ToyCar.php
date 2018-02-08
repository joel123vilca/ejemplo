<?php

namespace Vehicles;
require_once 'VehicleBase.php';

class ToyCar extends VehicleBase
{
  public function move(){
    echo $this->startEngine()."<br>";
    echo "<br>toyCAR:moving";
  }
  public function startEngine()
  {
    throw new \Exception('Engine not found');
  }

}
 ?>
