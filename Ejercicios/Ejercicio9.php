<?php

class Ejercicio9
{
    const OPTION_1 = 1;
    const OPTION_2 = 2;
    const OPTION_3 = 3;
    const OPTION_4 = 4;
    const OPTION_0 = 0;
    private ?int $option = null;

    public function __construct($limit = null, $showMenu = true)
    {
        if ($showMenu) {
            while (!isset($this->option) || $this->option != self::OPTION_0) {
                $this->showMenu();
                $this->option = $this->getOption();
                $this->applyOption();
            }
        }
    }

    public function showMenu(): void
    {
        echo "Menu:" . PHP_EOL;
        echo "    1. Sumar" . PHP_EOL;
        echo "    2. Restar" . PHP_EOL;
        echo "    3. Multiplicar" . PHP_EOL;
        echo "    4. Dividir" . PHP_EOL;
        echo "    0. Salir" . PHP_EOL;
    }

    private function getOption(): bool|string
    {
        return readline();
    }

    private function getNumber($message = ''): bool|string
    {
        $number = null;
        while (!is_numeric($number)) {
            echo $message;
            $number = readline();
        }
        return $number;
    }

    private function applyOption(): void
    {
        switch ($this->option) {
            case self::OPTION_1:
                $s1 = $s1 ?? $this->getNumber("Introduzca el primer sumando: ");
                $s2 = $s2 ?? $this->getNumber("Introduzca el segundo sumando: ");
                $sum = $this->sum($s1, $s2);
                echo PHP_EOL;
                echo sprintf("La suma de %s + %s = %s.", $s1, $s2, $sum);
                break;
            case self::OPTION_2:
                $s1 = $s1 ?? $this->getNumber("Introduzca el primer minuendo: ");
                $s2 = $s2 ?? $this->getNumber("Introduzca el segundo sustraendo: ");
                $substract = $this->subtract($s1, $s2);
                echo PHP_EOL;
                echo sprintf("La resta de %s - %s = %s.", $s1, $s2, $substract);
                break;
            case self::OPTION_3:
                $s1 = $s1 ?? $this->getNumber("Introduzca el multiplicando: ");
                $s2 = $s2 ?? $this->getNumber("Introduzca el multiplicador: ");
                $multiply = $this->multi($s1, $s2);
                echo PHP_EOL;
                echo sprintf("La multiplicación de %s x %s = %s.", $s1, $s2, $multiply);
                break;
            case self::OPTION_4:
                $s1 = $s1 ?? $this->getNumber("Introduzca el dividendo: ");
                $s2 = $s2 ?? $this->getNumber("Introduzca el divisor: ");
                $divide = $this->divide($s1, $s2);
                echo PHP_EOL;
                echo sprintf("La división de %s / %s = %s.", $s1, $s2, $divide);
                break;
        }
        echo PHP_EOL;
        echo PHP_EOL;
    }


    public function sum($s1 = null, $s2 = null)
    {
        return $s1 + $s2;
    }

    public function subtract($s1 = null, $s2 = null)
    {
        return $s1 - $s2;
    }

    public function multi($s1 = null, $s2 = null)
    {
        return $s1 * $s2;
    }

    public function divide($s1 = null, $s2 = null)
    {
        return $s1 / $s2;
    }


}

/*$exercise = new Ejercicio9();*/