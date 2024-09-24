<?php
declare(strict_types= 1);
include 'modelos/pelicula.php';
include 'modelos/director.php';


$fechaNacimiento = new DateTime('22-05-2002');
$fechaCreacion = new DateTimeImmutable();
$d1 = new director(2,'Juan','perez',$fechaNacimiento, $fechaCreacion, 'gne igi');


$pelicula1 = new Pelicula(2,'el señor de los anillos',23,$d1);


echo $pelicula1 -> __tostring().'<br>';




echo '<br>';
echo $d1 -> tostring().'<br>';
echo $d1 -> getCreado() ->format('d-m-Y') .'<br>';
echo '<br>';

echo $pelicula1 -> getDirector() -> tostring().'<br>';
