<?php

function fibonnaci($n)
{
    $vector = [];

    if ($n<1)
    {
        return $vector;
    }else if ($n == 1)
    {
        array_push($vector,1);
    }

    else if ($n > 2)
    {
        array_push($vector,1);
        array_push($vector,1);

        $contador = 2;
        
        while ($contador < $n)
        {
            
            $num2 = $vector[$contador - 1] + $vector[$contador - 2];
            array_push($vector,$num2);
            $contador++;
        }   

    }

    else if ($n == 1)
    {
        $vector[0] = 1;
    }

    return $vector;
}


$num = intval(readline("Introduce un número: "));

echo "La sucesión de fibonacci es --> " . json_encode(fibonnaci($num));