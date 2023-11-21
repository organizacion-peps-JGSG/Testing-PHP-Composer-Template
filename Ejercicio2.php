<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <input type="text" name="nombre" alt="nombre" placeholder="Nombre">
        <input type="number" name="edad" alt="edad" placeholder="Edad">
        <button type="submit" name="submit">Comprobar</button>
        <p>
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // Verificar si los campos 'nombre' y 'edad' están establecidos en $_POST
                if (isset($_POST['nombre']) && isset($_POST['edad'])) {
                    $nombre = $_POST['nombre'];
                    $edad = $_POST['edad'];

                    // Verificar si los campos 'nombre' y 'edad' no están vacíos
                    if (!empty($nombre) && !empty($edad)) {
                        if ($edad >= 18) {
                            echo "Hola $nombre, puedes conducir.";
                        } else {
                            echo "Hola $nombre, todavía no puedes conducir.";
                        }
                    } else {
                        echo "Por favor, ingresa nombre y edad.";
                    }
                } else {
                    echo "Por favor, ingresa nombre y edad.";
                }
            }
            ?>
        </p>
    </form>
</body>
</html>
