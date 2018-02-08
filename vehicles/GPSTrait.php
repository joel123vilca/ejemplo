<?php
  namespace Vehicles;
  //El objetivo de un trait es el de reducir las limitaciones propias de la herencia simple permitiendo que los desarrolladores reutilicen a voluntad conjuntos de métodos sobre varias clases independientes y pertenecientes a clases jerárquicas distintas.
  trait GPSTrait
  {
    function getPos()
    {
      echo 'lat,long';
    }
  }

 ?>
