<?php
require_once "Producto_2.php";
$producto = new Producto (111, "Pendrive 8", "Pendrive marca Kingston de 8 GB", 150);
echo "id: ".$producto->get_id()."<br/>";
echo "nombre: ".$producto->get_nombre()."<br/>";
echo "descripción: ".$producto->get_descripcion()."<br/>";
echo "precio: Bs. ".$producto->get_precio()."<br/>";
$producto->set_nombre("Pendrive 16");
$producto->set_descripcion("Pendrive marca Kingston de 16GB");
$producto->set_precio(300);
echo '<hr />';
echo "id: ".$producto->get_id()."<br/>";
echo "nombre: ".$producto->get_nombre()."<br/>";
echo "descripción: ".$producto->get_descripcion()."<br/>";
echo "precio: Bs. ".$producto->get_precio()."<br/>";
?>