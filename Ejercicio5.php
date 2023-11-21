<?php
function esPar($numero) {
    return $numero % 2 === 0;
}

function esImpar($numero) {
    return $numero % 2 !== 0;
}

function generarPares($n, $valor_inicial) {
    $pares = [];
    if (esImpar($valor_inicial)) {
        $pares[] = $valor_inicial + 1;
        $n--;
    }
    for ($i = 0; $i < $n; $i++) {
        $pares[] = $valor_inicial + ($i * 2);
    }
    return $pares;
}

function generarImpares($n, $valor_inicial) {
    $impares = [];
    if (esPar($valor_inicial)) {
        $impares[] = $valor_inicial + 1;
        $n--;
    }
    for ($i = 0; $i < $n; $i++) {
        $impares[] = $valor_inicial + ($i * 2);
    }
    return $impares;
}

// Ejemplos de uso:
echo "¿Es par 6? " . (esPar(6) ? "Sí" : "No") . "<br>";
echo "¿Es impar 7? " . (esImpar(7) ? "Sí" : "No") . "<br>";

echo "Pares: ";
$pares = generarPares(5, 10); // Genera 5 números pares empezando desde 10
echo "[" . implode(", ", $pares) . "]<br>";

echo "Impares: ";
$impares = generarImpares(5, 11); // Genera 5 números impares empezando desde 11
echo "[" . implode(", ", $impares) . "]<br>";
?>
