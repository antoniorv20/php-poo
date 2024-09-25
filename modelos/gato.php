<?php
declare(strict_types=1);
require_once 'animal.php';

class Gato extends Animal
{
    private bool $domestico;

    public function __construct(string $nombre, int $edad, bool $domestico)
    {
        parent::__construct($nombre, $edad);
        $this->domestico = $domestico;
    }

    public function tostring(): string
    {
        return parent::tostring() . " Estado: " . ($this->domestico ? 'Domestico' : 'Salvaje');
    }

    public function hacerRuido(): string{
        return "Miau, miau";
    }
    
}