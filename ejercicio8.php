<!-- Manuel Felipe Sánchez Córdoba -->
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Ejercicio 8. Bucle for: Tabla de multiplicar</title>
    </head>
    <body>
        <h1>Ejercicio 8. Bucle for: Tabla de multiplicar</h1>
        <p>Tabla de multiplicar del 1 al 10:</p>
        <?php
            for ($i = 1; $i <= 10; $i++) {
                echo "<p>";
                for ($j = 1; $j <= 10; $j++) {
                    echo "$i x $j = " . ($i * $j) . "<br/>";
                }
                echo "</p>";
            }
        ?>
    </body>
</html>