<?php
    require_once 'Coche.php';
    //Creamos el objeto
    $coche = new Coche ();
    //Seteamos las propiedades
    $coche->ruedas = 'Bridgestone';
    $coche->largo = '3 metros';
    $coche->color = 'Plomo';
    $coche->motor = '2400 cc';
    $coche->peso = '1200 Kg.';
    //Mostramos los resultados
    echo 'Ruedas: '.$coche->ruedas.'<br />';
    echo 'Largo: '.$coche->largo.'<br />';
    echo 'Color: '.$coche->color.'<br />';
    echo $coche->correr();
    echo $coche->mecanico();
?>