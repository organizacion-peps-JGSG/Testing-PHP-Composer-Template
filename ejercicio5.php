<?php 

function esPar($n)
{
    if ($n % 2 == 0) return true;
    return false;
}

function esImpar($n)
{
    if ($n % 2 != 0) return true;

    return false;
}


function generarPares($valores,$inicio)
{
    $pares = [];

    while (count($pares) < $valores)
    {
        if (esPar($inicio))
        {
            array_push($pares,$inicio);
        }
        $inicio++;

    }

    return $pares;


}

function generarImpares($valores,$inicio)
{
    $impares = [];

    while (count($impares) < $valores)
    {
        if (esImpar($inicio))
        {
            array_push($impares,$inicio);
        }
        $inicio++;
    }
    return $impares;
}

print("Par e impar\n");
$n=intval(readline("Introduzca un numero: "));
$m=intval(readline("Introduzca el número de valores: "));
$i=intval(readline("Introduzca el número inicial: "));
$x=generarPares($m,$i);
$y=generarImpares($m,$i);
print_r("Impares: ".json_encode($y).PHP_EOL);
print_r("Pares: ".json_encode($x).PHP_EOL);