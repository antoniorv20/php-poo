<?php

declare(strict_types=1);

class Plan
{
    // Definición de constante
    public const PLAN_BASICO = 'basico';
    public const PLAN_ESTANDAR = 'estandar';
    public const PLAN_PREMIUM = 'premium';

    private const PRECIO_BASICO = 9.99;
    private const PRECIO_ESTANDAR = 14.99;
    private const PRECIO_PREMIUM = 19.99;

    private string $planActual;

    public function __construct(string $planActual)
    {
        $array = [self::PLAN_BASICO, self::PLAN_ESTANDAR, self::PLAN_PREMIUM];
        if (in_array($planActual, $array)) {
            $this->planActual = $planActual;
        } else {
            throw new InvalidArgumentException("El plan seleccionado no es valido");
        }
    }

    // Método para obtener el precio del plan
    public function obtenerPrecio(): float
    {
        switch ($this->planActual) {
            case self::PLAN_BASICO:
                return self::PRECIO_BASICO;
            case self::PLAN_ESTANDAR:
                return self::PRECIO_ESTANDAR;
            case self::PLAN_PREMIUM:
                return self::PRECIO_PREMIUM;
            default:
                throw new Exception('Plan no reconocido');
        }
    }


}
