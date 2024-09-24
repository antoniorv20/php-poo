<?php
/**
 *Crea una clase persona
 *debe tener atributo nombre y edad
 *debe tener un metodod publico llamado saludar que devuelva un string con el formato ?Hola mi nombre es:   y tengo:   años 
 */


declare(strict_types=1);

class Persona
{
    private string $nombre;
    private int $edad;

    public function __construct(string $nombre, int $edad)
    {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

    public function getNombre(): string
    {
        return $this->nombre;
    }


    public function getedad(): int
    {
        return $this->edad;
    }

    public function setNombre(string $nombre): void
    {
        $this->nombre = $nombre;
    }


    public function setedad(int $edad): void
    {
        $this->edad = $edad;
    }

    public function tostring()
    {
        return "Hola me llamo: " . $this->nombre . ' y tengo: ' . $this->edad . ' años';
    }

}

