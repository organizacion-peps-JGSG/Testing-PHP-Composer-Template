<?php
session_start();

// Inicializar o recuperar el número secreto
if (!isset($_SESSION['numeroSecreto'])) {
    $_SESSION['numeroSecreto'] = rand(0, 10);
    $_SESSION['intentos'] = 0;
}

// Función para comprobar la adivinanza
function comprobarAdivinanza($numeroUsuario) {
    $_SESSION['intentos']++;

    if ($numeroUsuario == $_SESSION['numeroSecreto']) {
        return "¡Felicidades! Has adivinado el número secreto en " . $_SESSION['intentos'] . " intentos.";
    } else {
        return ($numeroUsuario > $_SESSION['numeroSecreto']) ? "Demasiado alto. Intenta de nuevo." : "Demasiado bajo. Intenta de nuevo.";
    }
}

// Procesar el formulario si se ha enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $mensaje = comprobarAdivinanza($_POST['numeroUsuario']);
} else {
    // Reiniciar el juego si es la primera visita o si se reinicia manualmente
    $_SESSION['numeroSecreto'] = rand(0, 10);
    $_SESSION['intentos'] = 0;
    $mensaje = "";
}
?>
