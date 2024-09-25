<?php

abstract class Figura{
    protected float $area;

 

    public abstract function calcularArea(): void;

    public function mostrarArea(): string{
        return "Area: {$this->area}";

    }

}