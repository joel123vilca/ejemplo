<?php
namespace Vehicles;
abstract class VehicleBase
{
  protected $owner; //propiedades
  //metodos de la clase
  public function __construct($ownername){//esta funcion se ejecuta inmediata
    $this->owner = $ownername;
    echo '<br>construct<br>';
  }
  public function move(){
    echo $this->startEngine()."<br>";
    echo "<br>moving";
  }
  public function getOwner(){//para poder acceder a la propiedades protegidas
    return $this->owner;
  }
  public function setOwner($ownername)//para poder cambiar la propiedad 
  {
    $this->owner = $ownername;
  }
  public abstract function startEngine();
}
 ?>
