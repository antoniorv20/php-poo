<?php
/**
 * crear clase coche
 * debe tener coche marca y año
 * contructor
 * metodo llamado obterner informacion formato 
 */

 
declare(strict_types=1);

class Coche
{
    private string $marca;

    private string $modelo;
    private int $anio;

    public function __construct(string $marca, string $modelo ,int $anio)
    {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->anio = $anio;
    }

    public function getMarca(): string
    {
        return $this->marca;
    }

    public function getModelo(): string
    {
        return $this->modelo;
    }

    public function getAnio(): int
    {
        return $this->anio;
    }

    public function setMarca($marca): void
    {
     $this->marca =$marca;
    }

    public function setModelo($modelo): void
    {
         $this->modelo = $modelo;
    }

    public function setAnio($anio): void
    {
         $this->anio = $anio;
    }

    public function obtenerInfo()
    {
        return "Coche: " . $this->marca ." " . $this->modelo . " y es del año: ". $this->anio ;
    }

}

