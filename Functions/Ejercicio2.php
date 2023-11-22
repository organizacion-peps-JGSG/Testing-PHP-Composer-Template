<?php
function verificarEdad($edad) {
    if ($edad >= 18) {
        return "Usted es mayor de edad";
    } else {
        return "Todavía eres menor de edad";
    }
}
?>