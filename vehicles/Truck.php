<?php

namespace Vehicles;
require_once 'VehicleBase.php';

class Truck extends VehicleBase{
    private $type;
    private static $count = 0;
    public function __construct($ownername, $type){
      $this->type = $type;
      $this->owner =$ownername;
      //parent::__construct($owner);//para usar constructor en las clases hijas se usa la palabra reservada "parent:__construct"
      self:: $count++;
    }
    public static function getTotal()
    {
      return self::$count;
    }

    public function startEngine()
    {
      return 'Truck : start engine';
    }
}

?>
