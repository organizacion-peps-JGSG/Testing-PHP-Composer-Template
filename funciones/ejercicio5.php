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