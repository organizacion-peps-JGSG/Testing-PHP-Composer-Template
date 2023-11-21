<?php
function obtenerCalificacion($nota) {
    if ($nota >= 0 && $nota < 3) {
        return "Muy deficiente";
    } elseif ($nota >= 3 && $nota < 5) {
        return "Insuficiente";
    } elseif ($nota >= 5 && $nota < 6) {
        return "Suficiente";
    } elseif ($nota >= 6 && $nota < 7) {
        return "Bien";
    } elseif ($nota >= 7 && $nota < 9) {
        return "Notable";
    } elseif ($nota >= 9 && $nota <= 10) {
        return "Sobresaliente";
    } else {
        return "Nota no válida";
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['nota'])) {
        $nota = $_POST['nota'];

        if (!empty($nota)) {
            echo "Calificación: " . obtenerCalificacion($nota);
        } else {
            echo "Por favor, ingresa una nota.";
        }
    } else {
        echo "Por favor, ingresa una nota.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <input type="number" name="nota" alt="nota" placeholder="Nota">
        <button type="submit" name="submit">Comprobar</button>
        <p></p>
    </form>
</body>
</html>
