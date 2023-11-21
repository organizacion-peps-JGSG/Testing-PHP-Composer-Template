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

        for ($i = 2; $i < $n; $i++) {
            $next = $sequence[$i - 1] + $sequence[$i - 2];
            $sequence[] = $next;
        }
    }

    return $sequence;
}

$num = intval(readline("Introduce un número: "));
$fibonacciSequence = fibonacci($num);

echo "La sucesión de Fibonacci es --> " . json_encode($fibonacciSequence);
?>
