<?php
declare(strict_types= 1);
require_once 'figura.php';


class Circulo extends Figura{
    private float $radio;

    public function __construct($radio){
        $this ->radio = $radio;
    }

    public function calcularArea(): void{
        $this->area = ($this->radio * $this-> radio) * 3.14 ;
    
    }

    public function mostrarArea(): string{

        $this -> calcularArea() ;
        return "el area del circulo es: " . $this -> area ;
    }

}