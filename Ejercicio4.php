<?php 

function jugarPiedraPapelTijeras($tiradas) {
    $jugador1 = 0;
    $jugador2 = 0;
    $opciones = ['piedra', 'papel', 'tijera'];

    for ($i = 0; $i < $tiradas; $i++) {
        $eleccionJugador1 = $opciones[rand(0, 2)];
        $eleccionJugador2 = $opciones[rand(0, 2)];

        echo "Tirada " . ($i + 1) . " - Jugador 1 elige: " . $eleccionJugador1 . " - Jugador 2 elige: " . $eleccionJugador2 . "\n";

        if ($eleccionJugador1 === $eleccionJugador2) {
            echo "Empate\n";
        } elseif (
            ($eleccionJugador1 === 'piedra' && $eleccionJugador2 === 'tijera') ||
            ($eleccionJugador1 === 'papel' && $eleccionJugador2 === 'piedra') ||
            ($eleccionJugador1 === 'tijera' && $eleccionJugador2 === 'papel')
        ) {
            echo "Jugador 1 gana esta ronda\n";
            $jugador1++;
        } else {
            echo "Jugador 2 gana esta ronda\n";
            $jugador2++;
        }
    }

    if ($jugador1 > $jugador2) {
        echo "Jugador 1 gana";
    } elseif ($jugador2 > $jugador1) {
        echo "Jugador 2 gana";
    } else {
        echo "El juego termina en empate con $jugador1 puntos para Jugador 1 y $jugador2 puntos para Jugador 2\n";
    }
}

jugarPiedraPapelTijeras(5);
?>