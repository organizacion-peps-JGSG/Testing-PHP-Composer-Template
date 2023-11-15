<?php 

function esPrimo($numero)
{
    $contador = 0;

     if ($numero == 1) return true;


     for ($i = 2; $i <= sqrt($numero); $i++) {
        if ($numero % $i === 0) {
            return false;
        }
    }

    return true;
}