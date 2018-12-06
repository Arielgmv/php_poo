<?php
require_once "Auto_4.php";
$auto = new Auto(4, 4, "Ford");
$auto->encenderMotor();
if($auto->arrancar()){
    echo "El auto está andando";
}else{
    echo "No se puede arrancar el auto si el motor no está encendido";
}
?>