<?php

include 'funciones/ejercicio7.php';

$num = intval(readline("Introduce un número: "));

echo "La sucesión de fibonacci es --> " . json_encode(fibonnaci($num));