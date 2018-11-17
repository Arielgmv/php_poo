<?php 
    //definimos la clase
    class Coche{
        //Atributos
        public $ruedas;
        public $largo;
        public $color;
        public $motor;
        public $peso;
        public function correr(){
            return 'El auto de color: '.$this->color.' de ruedas'.$this->ruedas.' y de motor '.$this->motor;
        }
        public function mecanico(){
            return '<br />El coche tiene un problema en el motor de '.$this->motor.', debido a que el peso de '.$this->peso.' es demasiado para el mismo';
        }
        //constructor
        /*public function __construct($ruedas, $largo, $ancho, $motor, $peso){
            $this->ruedas=$ruedas;
            $this->largo=$largo;
		    $this->ancho=$ancho;
		    $this->motor=$motor;
		    $this->peso=$peso;
        }*/
    }

    //Creamos el objeto / Instanciamos la clase y le pasamos los parámetros del constructor
    //$coche = new Coche(4, 2000, 300, 1600, 500);

    //recuperar datos
    //echo $coche.ancho;
?>