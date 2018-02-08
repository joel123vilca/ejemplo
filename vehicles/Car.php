<?php

namespace Vehicles;
require_once 'VehicleBase.php';
require_once 'GPSTrait.php';
class Car extends VehicleBase implements \Serializable
{
  use GPSTrait;

  public function move(){
    echo $this->startEngine()."<br>";
    echo "<br>CAR:moving";
  }
  public function startEngine()
  {
    return 'Car : start engine';
  }
  public function serialize()
  {
    echo "<br> Serialize";
    return $this->owner;
  }

  public function unserialize($serialized){
    echo "<br>unserialize<br>";
    $this->owner = $serialized;
  }
}
 ?>
