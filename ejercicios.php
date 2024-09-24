<?php
declare(strict_types= 1);
include 'modelos/persona.php';
include 'modelos/coche.php';


$persona1 = new Persona('Paco',22);

echo $persona1 -> tostring().'<br>';


$coche1 = new Coche('Audi','A7', 2019);

echo $coche1 -> obtenerInfo().'<br>';
