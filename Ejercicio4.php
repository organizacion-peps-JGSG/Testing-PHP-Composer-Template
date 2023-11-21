<?php
function juegoPiedraPapelTijera($jugador1, $jugador2) {
    if ($jugador1 === $jugador2) {
        return "Empate";
    } elseif (
        ($jugador1 === "Piedra" && $jugador2 === "Tijera") ||
        ($jugador1 === "Tijera" && $jugador2 === "Papel") ||
        ($jugador1 === "Papel" && $jugador2 === "Piedra")
    ) {
        return "¡Jugador 1 gana!";
    } else {
        return "¡Jugador 2 gana!";
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $opciones = ["Piedra", "Papel", "Tijera"];

    $jugador1 = $opciones[rand(0, 2)];
    $jugador2 = $opciones[rand(0, 2)];

    echo "Jugador 1 eligió: $jugador1<br>";
    echo "Jugador 2 eligió: $jugador2<br><br>";
    echo juegoPiedraPapelTijera($jugador1, $jugador2);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juego Piedra, Papel, Tijera</title>
</head>
<body>
    <form method="post">
        <button type="submit" name="submit">¡Jugar!</button>
        <p></p>
    </form>
</body>
</html>
