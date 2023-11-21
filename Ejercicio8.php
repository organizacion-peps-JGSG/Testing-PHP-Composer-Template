<?php

function fibonacci($n)
{
    $sequence = [];

    if ($n <= 0) {
        return $sequence;
    }

    $sequence[] = 1;

    if ($n > 1) {
        $sequence[] = 1;

        $contador = 2;
        
        while ($contador < $n) {
            $next = $sequence[$contador - 1] + $sequence[$contador - 2];
            $sequence[] = $next;
            $contador++;
        }   
    }

    return $sequence;
}

$num = intval(readline("Introduce un número: "));
$fibonacciSequence = fibonacci($num);

echo "La sucesión de Fibonacci es --> " . json_encode($fibonacciSequence);
?>
