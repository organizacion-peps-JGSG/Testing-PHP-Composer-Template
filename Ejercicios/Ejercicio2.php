<?php

namespace Ejercicios;

class Ejercicio2
{
    const LEGAL_AGE = 18;

    public function __construct()
    {

    }

    public function init()
    {
        echo $this->isLegalAge($this->getAge()) ? 'Ya puedes conducir' : 'Aún no puedes conducir';
    }

    public function getAge(): bool
    {
        $age = null;
        while (!is_numeric($age)) {
            echo 'Introduce la edad: ';
            $age = readline();
        }
        return $age;
    }

    public function isLegalAge($age): bool
    {
        return $age >= self::LEGAL_AGE;
    }
    //$checkAge = new CheckAge();
    //$checkAge->init();
}