<?php 
declare(strict_types=1);
include_once 'figura.php';

class Cuadrado extends Figura{

    private float $lado;

    public function __construct(float $lado)
    {
        $this->lado = $lado;
        $this->calcularArea();
    }

    public function calcularArea(): void
    {
        $this->area =  $this->lado * $this->lado;
    }

}