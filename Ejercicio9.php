<?php

function suma($x, $y) {
    return $x + $y;
}

function resta($x, $y) {
    return $x - $y;
}

function multiplica($x, $y) {
    return $x * $y;
}

function divide($x, $y) {
    return $x / $y;
}

function menuApp() {
    echo "MENU CALCULADORA\n";
    $opcion = -1;

    while ($opcion != 0) {
        echo "1. Suma\n";
        echo "2. Resta\n";
        echo "3. Multiplicación\n";
        echo "4. División\n";
        echo "0. Salir\n";

        $opcion = intval(readline("Introduzca opción: "));

        if ($opcion == 1) {
            $s1 = intval(readline("Introduzca el primer sumando: "));
            $s2 = intval(readline("Introduzca el segundo sumando: "));
            echo "La suma de $s1 + $s2 = " . suma($s1, $s2) . ".\n";
        } elseif ($opcion == 2) {
            $minuendo = intval(readline("Introduzca el minuendo: "));
            $sustraendo = intval(readline("Introduzca el sustraendo: "));
            echo "La resta de $minuendo - $sustraendo = " . resta($minuendo, $sustraendo) . ".\n";
        } elseif ($opcion == 3) {
            $multiplicando = intval(readline("Introduzca el primer número: "));
            $multiplicador = intval(readline("Introduzca el multiplicador: "));
            echo "La multiplicación de $multiplicando * $multiplicador = " . multiplica($multiplicando, $multiplicador) . ".\n";
        } elseif ($opcion == 4) {
            $dividendo = intval(readline("Introduzca el dividendo: "));
            $divisor = intval(readline("Introduzca el divisor: "));
            echo "La división de $dividendo / $divisor = " . divide($dividendo, $divisor) . ".\n";
        } elseif ($opcion != 0) {
            echo "Error: Opción incorrecta, introduzca una nueva opción.\n";
        }
    }
}

menuApp();