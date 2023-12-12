<!-- Manuel Felipe Sánchez Córdoba-->
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Ejercicio 4. Calcular nota</title>
</head>
<body>
    <h1>Cálculo de notas</h1>
    <p> Pide una nota (número). Muestra la calificación según la nota:</p>
    <ul>
        <li>0-3: Muy deficiente.</li>
        <li>3-5: Insuficiente.</li>
        <li>5-6: Suficiente.</li>
        <li>6-7: Bien.</li>
        <li>7-9: Notable.</li>
        <li>9-10: Sobresaliente.</li>
    </ul>

    <?php
    // Verificar si se ha enviado una nota mediante el método POST
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtener la nota del formulario
        $nota = isset($_POST['nota']) ? $_POST['nota'] : '';

        // Validar la nota
        if (is_numeric($nota)) {
            // Convertir la nota a un número entero
            $n = intval($nota);

            // Determinar la calificación
            $calificacion = "";
            if ($n >= 0 && $n < 3) {
                $calificacion = "Muy deficiente";
            } else if ($n >= 3 && $n < 5) {
                $calificacion = "Insuficiente";
            } else if ($n >= 5 && $n < 6) {
                $calificacion = "Suficiente";
            } else if ($n >= 6 && $n < 7) {
                $calificacion = "Bien";
            } else if ($n >= 7 && $n < 9) {
                $calificacion = "Notable";
            } else if ($n >= 9 && $n <= 10) {
                $calificacion = "Sobresaliente";
            } else {
                $calificacion = "Calificación incorrecta";
            }

            // Mostrar el resultado
            echo "<p>Una nota de $nota es $calificacion.</p>";
        } else {
            echo "<p>Por favor, ingrese una nota válida.</p>";
        }
    }
    ?>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="nota">Introduzca la nota: </label>
        <input type="text" name="nota">
        <input type="submit" value="Calcular">
    </form>
</body>
</html>
