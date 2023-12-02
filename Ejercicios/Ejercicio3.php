<?php

namespace Ejercicios;

class Ejercicio3
{
    const LEGAL_AGE = 18;

//echo getQualification(getNumber());

    function getNumber(): float
    {
        $number = null;
        while (!is_numeric($number)) {
            echo 'Introduce la nota: ';
            $number = readline();
        }
        return $number;
    }

    function getQualification($number): string
    {
        $qualification = 'Nota no valida';
        if ($number >= 0 && $number < 3) {
            $qualification = 'Muy deficiente';
        } elseif ($number >= 3 && $number < 5) {
            $qualification = 'Insuficiente';
        } elseif ($number >= 5 && $number < 6) {
            $qualification = 'Suficiente';
        } elseif ($number >= 6 && $number < 7) {
            $qualification = 'Bien';
        } elseif ($number >= 7 && $number < 9) {
            $qualification = 'Notable';
        } elseif ($number >= 9 && $number <= 10) {
            $qualification = 'Sobresaliente';
        }
        return $qualification;
    }

}