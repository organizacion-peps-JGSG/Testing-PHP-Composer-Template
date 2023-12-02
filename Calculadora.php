<?php

/**
 * Clase de Ejemplo que implementa una calculadora
 * @author: José Gaspar Sánchez García
 */
class Calculadora
{
    public function suma($a, $b): float
    {
        return $a + $b;
    }

    public function resta($a, $b): float
    {
        return $a - $b;
    }

    public function multiplica($a, $b): float
    {
        return $a * $b;
    }

    public function divide($a, $b): float
    {
        return $a / $b;
    }

    /**
     * Funcion que calcula el factorial del un número
     * @param: $numero: número entero positivo
     */
    public function factorial($numero)
    {
        if (is_int($numero) && $numero >= 0) {
            $factorial = 1;
            for ($i = 2; $i <= $numero; $i++) {
                $factorial = $factorial * $i;
            }
            return $factorial;
        } else {
            throw new InvalidArgumentException('Debes proporcionar un numero no negativo');
        }
    }
}