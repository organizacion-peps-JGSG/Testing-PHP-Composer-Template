<?php

namespace Ejercicios;
class Ejercicio5
{
    public ?int $length = null;
    public int $startNumber = 0;

    public function __construct($length = null, $startNumber = 0)
    {
        $this->length = $length;
        $this->startNumber = $startNumber;
        while (!is_numeric($this->length)) { // Si no nos han pasado cuantos números quieren lo pedimos por línea
            print_r($this->length);
            echo 'entramos';
            echo 'Introduce cuantos números quieres generar: ';
            $this->length = readline();
        }
    }

    public function generarNumeros($pares = true)
    {
        $numbers = [];
        $startNumber = ($this->isPar($this->startNumber) && $pares) || ($this->esImpar($this->startNumber) && !$pares) ? $this->startNumber : $this->startNumber + 1;
        while (count($numbers) < $this->length) {
            $numbers[] = $startNumber;
            $startNumber = $startNumber + 2;
        }
        return $numbers;
    }

    public function isPar($number)
    {
        return $number % 2 == 0;
    }

    public function esImpar($number)
    {
        return !$this->isPar($number);
    }
}

/*$exercise = new Ejercicio5();
$pares = $exercise->generarNumeros();
echo 'Pares:';
print_r($pares);
$impares = $exercise->generarNumeros(false);
echo 'Impares:';
print_r($impares);*/
