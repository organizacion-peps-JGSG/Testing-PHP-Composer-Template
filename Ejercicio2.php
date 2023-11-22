<?php
function verificarEdad($edad) {
    if ($edad >= 18) {
        return "Usted es mayor de edad";
    } else {
        return "Todavía eres menor de edad";
    }
}

// Para probar la función
$nombre = strval(readline("Introduce tu nombre: "));
$edad = intval(readline("Introduce tu edad: "));

echo verificarEdad($edad);
?>
