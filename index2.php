<?php

declare(strict_types= 1);   

require_once 'modelos/perro.php';
require_once 'modelos/gato.php';
require_once 'figuras/cuadrado.php';
require_once 'figuras/circulo.php';
require_once 'modelos/plan.php';



$miPerro = new Perro('Mini', 12, 'yorsite');

echo '<pre>';
var_dump($miPerro);
echo '</pre>';
echo '<br>';

$miPerro2 = new Perro('Toby', 12, 'Malinois');
echo '<br>';
echo $miPerro2 -> tostring() .'<br>';
echo $miPerro2 -> hacerRuido() . '<br>';

$miGato = new Gato('Toby', 12, false);
echo '<br>';
echo $miGato -> tostring() .'<br>';
echo $miGato -> hacerRuido() . '<br>';

echo '<br>';
$circulo = new Circulo(5);
$cuadrado = new Cuadrado(5);

echo $circulo -> mostrarArea() .'<br>';
echo $cuadrado -> mostrarArea() .'<br>';
echo '<br>';   

$planSubcripcion = new Plan(Plan::PLAN_BASICO);
echo $planSubcripcion -> obtenerPrecio() .'<br>';

$planSubcripcion = new Plan(Plan::PLAN_ESTANDAR);
echo $planSubcripcion -> obtenerPrecio() .'<br>';

$planSubcripcion = new Plan(Plan::PLAN_PREMIUM);
echo $planSubcripcion -> obtenerPrecio() .'<br>';

echo '<br>';

$planesYPrecios = Plan::obtenerPlanesYPrecios();

foreach ($planesYPrecios as $plan => $precio) {
    echo "$plan: $precio <br>";
}