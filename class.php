<?php 
    //definimos la clase
    class Coche{
        //Atributos
        private var $ruedas;
        private var $largo;
        private var $ancho;
        private var $motor;
        private var $peso;

        //constructor
        public function __construct($ruedas, $largo, $ancho, $motor, $peso){
            $this->ruedas=$ruedas;
            $this->largo=$largo;
		    $this->ancho=$ancho;
		    $this->motor=$motor;
		    $this->peso=$peso;
        }
    }

    //Creamos el objeto / Instanciamos la clase y le pasamos los parámetros del constructor
    $coche = new Coche(4, 2000, 300, 1600, 500);

    //recuperar datos
    echo $coche.ancho;
?>