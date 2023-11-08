<?php 

$nombre = strval(readline("Introduce tu nombre: "));

$edad = intval(readline("Introduce tu edad: "));

if ($edad >= 18)
{
    echo "Usted es mayor de edad";
    return true;
}else
{
    echo "Todavía eres menor de edad";
    return false;
}

