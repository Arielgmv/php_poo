<?php
//Antes de definir la clase incluimos la clase padre Vehiculo
require_once "Vehiculo_4.php";
class Moto extends Vehiculo{
    public function __construct($cantidad_de_ruedas, $marca){
        parent::__construct(0, $cantidad_de_ruedas, $marca);
    }
}
?>