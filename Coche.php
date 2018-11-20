<?php 
    //definimos la clase
    class Coche{
        //Atributos
        public $ruedas;
        public $largo;
        public $color;
        public $motor;
        public $peso;
        //constructor
        public function __construct($ruedas, $largo, $color, $motor, $peso){
            $this->ruedas=$ruedas;
            $this->largo=$largo;
		    $this->color=$color;
		    $this->motor=$motor;
		    $this->peso=$peso;
        }
        public function correr(){
            return 'El auto de color: '.$this->color.' de ruedas '.$this->ruedas.' y de motor '.$this->motor;
        }
        public function mecanico(){
            return '<br />El coche tiene un problema en el motor de '.$this->motor.', debido a que el peso de '.$this->peso.' es demasiado para el mismo';
        }        
    }
?>