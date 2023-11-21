<?php

$nombre = strval(readline("Introduce tu nombre: "));

$edad = intval(readline("Introduce tu edad: "));

if (esMayorEdad($edad)) {
    echo "Usted es mayor de edad";
} else {
    echo "Todavía eres menor de edad";
}



function esMayorEdad($e)
{
    if ($e >= 18)
    {
        return true;
    } else 
    {
        return false;
    }
}