<?php

include 'funciones/ejercicio6.php';

    print("ES PRIMO".PHP_EOL);
    $n=intval(readline("Introduzca un numero: "));

    echo "$n es primo --> " . (esPrimo($n) ? "Si" : "No") . PHP_EOL;