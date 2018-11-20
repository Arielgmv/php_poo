<?php
    require_once 'Coche.php';
    //Creamos el objeto
    $coche = new Coche ("Bridgestone", "3 metros", "Plomo", "2400 cc", "1200 Kg.");
    //Mostramos los resultados
    echo 'Ruedas: '.$coche->ruedas.'<br />';
    echo 'Largo: '.$coche->largo.'<br />';
    echo 'Color: '.$coche->color.'<br />';
    echo $coche->correr();
    echo $coche->mecanico();
?>