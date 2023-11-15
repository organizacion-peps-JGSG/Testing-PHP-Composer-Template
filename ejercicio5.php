<?php 

include 'funciones/ejercicio5.php';

print("Par e impar\n");
$n=intval(readline("Introduzca un numero: "));
$m=intval(readline("Introduzca el número de valores: "));
$i=intval(readline("Introduzca el número inicial: "));
$x=generarPares($m,$i);
$y=generarImpares($m,$i);
print_r("Impares: ".json_encode($y).PHP_EOL);
print_r("Pares: ".json_encode($x).PHP_EOL);