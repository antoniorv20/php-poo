<?php
declare(strict_types=1);
require_once 'animal.php';

class Perro extends Animal
{
    private string $raza;

    public function __construct(string $nombre, int $edad, string $raza)
    {
        parent::__construct($nombre, $edad);
        $this->raza = $raza;
    }

    public function tostring(): string
    {
        return parent::tostring() . " , Raza: {$this->raza}";
    }

    public function hacerRuido(): string{
        return "Guau, guau";
    }
}