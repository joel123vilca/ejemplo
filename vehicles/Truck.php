<?php

namespace Vehicles;
require_once 'VehicleBase.php';

class Truck extends VehicleBase{
    private $type;
    public function __construct($ownername, $type){
      $this->type = $type;
      $this->owner =$ownername;
      //parent::__construct($owner);//para usar constructor en las clases hijas se usa la palabra reservada "parent:__construct"

    }
    public function move(){
      echo "<br>TRUCK:moving".$this->type;
    }
}

?>
