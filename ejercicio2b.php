<?php

include 'funciones/ejercicio2b.php';

$nombre = strval(readline("Introduce tu nombre: "));

$edad = intval(readline("Introduce tu edad: "));

if (esMayorEdad($edad)) {
    echo "Usted es mayor de edad";
} else {
    echo "Todavía eres menor de edad";
}


