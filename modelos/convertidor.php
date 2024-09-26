<?php
declare(strict_types=1);

class ConvertidorMoneda{
    private static float $tasaDolarEuro = 0.85;
    private static float $tasaEuroDolar = 1.18;

     // Método para convertir dólares a euros
     public static function dolaresEuros(float $dolar): float {
        return self::$tasaDolarEuro * $dolar;
    }

    // Método para convertir euros a dólares
    public static function eurosDolares(float $euro): float {
        return self::$tasaEuroDolar * $euro;
    }

    // Método estático para actualizar las tasas de conversión
    public static function actualizarTasas(float $nuevaTasaEuroDolar, float $nuevaTasaDolarEuro): void {
        self::$tasaEuroDolar = $nuevaTasaEuroDolar;  // Actualiza la tasa Euro-Dólar
        self::$tasaDolarEuro = $nuevaTasaDolarEuro;  // Actualiza la tasa Dólar-Euro
    }

    public static function obtenerTasasActuales(): array {
        return [
            'tasaDolarEuro' => self::$tasaDolarEuro,
            'tasaEuroDolar' => self::$tasaEuroDolar
        ];
    }

}

