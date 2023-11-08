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

        for ($i = 2; $i<$n;$i++)
        {
            $num2 = $vector[$i - 1] + $vector[$i - 2];
            array_push($vector,$num2);
        }

    }

    else if ($n == 1)
    {
        $vector[0] = 1;
    }

    return $vector;
}