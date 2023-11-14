<?php 

include 'funciones/ejercicio3.php';

$n=intval(readline("Introduzca la nota: "));
echo ('Calificación: '. obtenerCalificaion($n));