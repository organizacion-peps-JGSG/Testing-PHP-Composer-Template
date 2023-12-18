<!--Manuel Felipe Sánchez Córdoba-->
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Ejercicio 9. Bucle do-while: Tabla de multiplicar</title>
</head>
<body>
    <h1>Ejercicio 9. Bucle do-while: Tabla de multiplicar</h1>
    <p>Modifique este HTML</p>

    <?php
    $i = 0;

    do {
        echo "Tabla de multiplicar del $i <br/>";
        echo "-----------------------------------------<br/>";

        $j = 0;
        do {
            echo "$i x $j = " . ($i * $j) . "<br/>";
            $j++;
        } while ($j <= 10);

        echo "<br/>";
        $i++;
    } while ($i <= 10);
    ?>
</body>
</html>
