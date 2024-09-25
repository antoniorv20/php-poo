<?php
declare(strict_types= 1);

abstract class Animal{
    protected string $nombre;
    protected int $edad;

    public function __construct(string $nombre, int $edad){
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

    public function tostring(): string{
        return "Nombre: {$this->nombre}, Edad: {$this->edad} años";
        
    }

    public abstract function hacerRuido(): string;

}