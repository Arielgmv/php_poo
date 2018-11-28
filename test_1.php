<?php
    require_once 'Coche_1.php';
    //Creamos el objeto
    $coche = new Coche ("Bridgestone", "3 metros", "Plomo", "2400 cc", "1200 Kg.");
    //Mostramos los resultados
    $coche->ruedas="Michelin";
    echo $coche->correr();
    /*echo 'Ruedas: '.$coche->ruedas.'<br />';
    echo 'Largo: '.$coche->largo.'<br />';
    echo 'Color: '.$coche->color.'<br />';
    echo $coche->mecanico();*/
?>