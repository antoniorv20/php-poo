<?php
declare(strict_types=1);

require_once 'modelos/cuentab.php';
require_once 'modelos/convertidor.php';


/**
 * Ejercicio 1
 * Crea una clase llamada Persona 
 * Debe tener los siguientes atributos: nombre y edad 
 * Debe tener un método público llamado saludar() que devuelva un string con el formato "Hola, mi nombre es: [nombre] y tengo [edad] años"
 */

/**
 * Ejercicio2 
 * Crea una clase llamada Coche
 * Debe tener tres propiedades privadas: marca, modelo y año
 * Debe tener un constructor que incialice estas tres propiedades
 * Debe tener un método público llamado obtenerInformacion() que devuelva un string con el siguiente formato "Coche [marca] [modelo] del año [año]
 */

/**
 * Ejercicio3
 * Crea una clase llamada CuentaBancaria que simule las operaciones bancarias básicas:
 * Debe tener una propiedad privada $saldo
 * Debe tener un constructor que inicialice el saldo
 * Debe tener 3 métodos públicos:
 *  depositar($cantidad) añade la cantidad al saldo si  es positiva y devuelve  true, si  no devuelve false
 *  retirar($cantidad) resta la cantidad del saldo si hay suficiente saldo y la cantidad es positiva, devuelve true si se realiza la operación, false si no
 *  obtenerSaldo() devuelve el saldo actual
 *  
 */

$cuenta = new CuentaBancaria(100.0);  // Crear una cuenta con saldo inicial de 100€

if ($cuenta->depositar(50.0)) {
    echo "Depósito exitoso. ";
} else {
    echo "Depósito fallido. ";
}

echo "<br>";
echo $cuenta->obtenerSueldo();  // Mostrar el saldo actual
echo "<br>";


if ($cuenta->retirar(30.0)) {
    echo "Retiro exitoso. ";
} else {
    echo "Retiro fallido. ";
}

echo "<br>";
echo $cuenta->obtenerSueldo();  // Mostrar el saldo actual
echo "<br>";
echo "<br>";


 /**
  * Ejercicio 4
  * Crea una clase llamada ConvertidorMoneda que permita realizar conversiones entre dólares y euros.
  * La clase debe cumplir los siguientes requisitos:
  * La clase debe tener dos propiedades estáticas privadas: $tasaDolarEuro inicializada con un valor 0.85 y $tasaEuroDolar inicializada con un valor 1.18
  * Implementa los siguientes métodos estáticos: 
  * dolaresaEuros(float $dolares):float - convierte dólares a euros
  * eurosaDolares(float $euros):float - convierte euros a dólares
  * actualizarTasas(float $nuevaTasaDolarEuro, float $nuevaTasaEuroDolar):void - actualiza las tasas de cambio
  * obtenerTasasActuales():array Devuelve un array con las tasas de cambio actuales
  *
  * Crea un script para probar la clase:
  * Realiza conversiones de 100 dólares a euros y 100 euros a dólares
  * Actualiza las tasas de cambio a 0.82 para dólar a  euro y 1.22 para euro a dólar
  * Realiza nuevamente las conversiones con las tasas actualizadas
  * Muestra las tasas de cambio actuales
  */

// 1. Realizar conversiones de 100 dólares a euros y 100 euros a dólares con las tasas actuales
echo "Conversión inicial:";
echo "<br>";

echo "100 dólares a euros: " . ConvertidorMoneda::dolaresEuros(100) . " €";
echo "<br>";

echo "100 euros a dólares: " . ConvertidorMoneda::eurosDolares(100) . " $";
echo "<br>";
echo "<br>";

// 2. Actualizar las tasas de cambio a 0.82 para dólar a euro y 1.22 para euro a dólar
ConvertidorMoneda::actualizarTasas(1.22, 0.82);

// 3. Realizar nuevamente las conversiones con las tasas actualizadas
echo "Conversión después de actualizar las tasas:";
echo "<br>";

echo "100 dólares a euros: " . ConvertidorMoneda::dolaresEuros(100) . " €\n";
echo "<br>";

echo "100 euros a dólares: " . ConvertidorMoneda::eurosDolares(100) . " $\n";
echo "<br>";


// 4. Mostrar las tasas de cambio actuales
echo "Tasas de cambio actuales:";
$tasasActuales = ConvertidorMoneda::obtenerTasasActuales();
print_r($tasasActuales);
