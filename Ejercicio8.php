<?php
function imprimirTablaMultiplicar($numero)
{
    echo "Tabla de multiplicar del " . $numero . "<br/>";
    echo "------------------------------<br/>";

    for ($i = 0; $i < 10; $i++) {
        echo $numero . " x " . $i . " = " . ($numero * $i) . "<br/>";
    }

    echo "<br/>";
}

// Llamada a la función con un número específico
$num = intval(readline("Introduce un número: "));
imprimirTablaMultiplicar($num);s cambiar el número según tus necesidades
?>
