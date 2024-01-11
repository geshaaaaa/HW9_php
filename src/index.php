<?php

function arrayActions()
{
    $arr = [];
    $length = 10;
    $sum = 0;
    $mult = 1;
    $count = 0;
    $arrDivideThree = [];

    for ($i = 0; $i < $length; $i++)
    {
        $arr[$i] = rand(1, 9);
        $sum += $arr[$i];
        $mult *= $arr[$i];

        if ($arr[$i] === 5)
        {
            $count++;
        }

        if ($arr[$i] % 3 == 0)
        {
            $arrDivideThree[] = $arr[$i];
        }
    }

    var_dump($arr);
    echo "Сума елементів: $sum". PHP_EOL;
    echo "Добуток елементів: $mult" . PHP_EOL;
    echo "Кількість п'ятірок: $count" . PHP_EOL;
    echo "Числа, які націло діляться на 3: " . implode(', ', $arrDivideThree) . "\n";
}

arrayActions();