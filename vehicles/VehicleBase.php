<?php
namespace Vehicles;
class VehicleBase
{
  protected $owner; //propiedades
  //metodos de la clase
  public function __construct($ownername){//esta funcion se ejecuta inmedia
    $this->owner = $ownername;
    echo '<br>construct<br>';
  }
  public function move(){
    echo "<br>moving";
  }
  public function getOwner(){//para poder acceder a la propiedades protetidas
    return $this->owner;
  }
  public function setOwner($ownername)//para poder cambiar la propiedad
  {
    $this->owner = $ownername;
  }
}

 ?>
