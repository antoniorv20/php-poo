<?php
declare(strict_types= 1);
require_once 'figura.php';


class Cuadrado extends Figura{
    private float $lado;

    public function __construct($lado){
        $this ->lado = $lado;
    }


    public function calcularArea(): void{
    $this->area = $this->lado * $this ->lado;
}

public function mostrarArea(): string{

    $this -> calcularArea() ;
    return "el area del cuadrado es: " . $this -> area ;
}

}