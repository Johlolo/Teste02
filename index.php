<?php

function primos() {
    $inicial = 10;
    $final = 29;
    $str = [];
    $x = 0;
    for($i = ($inicial+1); $i < $final; $i++)
    {
        $divisores = 0;
        
        for($j = $i; $j >= 1; $j--)
        {
            if (($i % $j) == 0) {
                $divisores++;
            }
        }
        if ($divisores == 2)
        {
            $str[$x] = $i;
            $x = $x + 1;
        }
    }
    print_r($str);

}

echo primos();

?>