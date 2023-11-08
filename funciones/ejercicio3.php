<?php

function obtenerCalificaion($n)
{
    $calificacion = "Incorrecta";
    if ($n >=0 && $n <3) return "Muy deficiente";
    else if ($n >= 3 && $n <5) return "Insuficiente";
    else if ($n >= 5 && $n <6) return "Suficiente";
    else if ($n >= 6 && $n <7) return "Bien";
    else if ($n >= 7 && $n <9) return "Notable";
    else if ($n >= 9 && $n <=10) return "Sobresaliente";


    return $calificacion;
}

?>