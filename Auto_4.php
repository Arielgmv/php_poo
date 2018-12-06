<?php
//Antes de definir la clase incluimos la clase padre Vehiculo
require_once "Vehiculo_4.php";
class Auto extends Vehiculo{
    public function __construct($cantidad_de_puertas, $cantidad_de_ruedas, $marca){
        parent::__construct($cantidad_de_puertas, $cantidad_de_ruedas, $marca);
    }
}
?>