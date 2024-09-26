<?php
declare(strict_types=1);

class CuentaBancaria {
    private float $saldo;

    public function __construct(float $saldo = 0)
    {
        $this->saldo = $saldo;
    }

    public function depositar(float $cantidad): bool
    {
        if ($cantidad > 0) {  // Verificar que la cantidad sea positiva
            $this->saldo += $cantidad;  // Sumar la cantidad al saldo actual
            return true;
        } else {
            return false;
        }
    }

    public function retirar(float $cantidad): bool{
        if ($this ->saldo >= $cantidad && $this ->saldo > 0) {  
            $this->saldo -= $cantidad;  
            return true;
        } else {
            return false;
        }
    }

    public function obtenerSueldo(): string
    {
        return "El saldo es de: {$this->saldo} €";
    }
}
