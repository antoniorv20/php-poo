<?php

declare(strict_types= 1);

/**
 * se declara utilizando la palabra clave interfaz
 * Todos los metodos de una interfaz tienen que ser publicos
 * No pueden contener propiedades o variables de instancia
 * Una clase puede inplementar varias interfaces
 * Las clases que implementa una interfaz deben proporcionar una implementacion para todos los metodos declarados en la interfaz
 */

 interface Reproducible{
    public function reproducir(): void;
    public function pausar(): void;
    public function detener(): void;

 }

 class Cancion implements Reproducible{
    private string $titulo;

    public function __construct($titulo){
        $this->titulo = $titulo;

    }

    public function reproducir(): void{
        echo "Reproduciendo" . $this ->titulo;
    }

    public function pausar(): void{
        echo "Cancion pausada";
    }

    public function detener(): void{
        echo "Reproduccion de cancion detenida";
    }
 }

 class Video implements Reproducible{
    private string $nombre;
    public function __construct($nombre){
        $this->nombre = $nombre;

    }

    public function reproducir(): void{
        echo "Reproduciendo" . $this ->nombre;
    }

    public function pausar(): void{
        echo "Cancion pausada";
    }

    public function detener(): void{
        echo "Reproduccion de cancion detenida";
    }
 }