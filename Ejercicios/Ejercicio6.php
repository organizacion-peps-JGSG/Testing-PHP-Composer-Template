<?php

class Ejercicio6
{

    public ?int $number = null;

    public function __construct($number = null)
    {
        $this->number = $number;
        while (!is_numeric($this->number)) { // Si no nos han pasado cuantos números quieren lo pedimos por línea
            echo 'Introduce un número: ';
            $this->number = readline();
        }
    }

    public function esPrimo($number = null)
    {
        $number = isset($number) ? $number : $this->number;
        $divisores = 0;
        for ($i = 2; $i < $number; $i++) {
            if ($number % $i == 0) {
                $divisores++;
            }
        }
        return $divisores == 0;
    }
}

/*$exercise = new Ejercicio6();
echo $exercise->esPrimo() ? 'Es primo' : 'No es primo';*/