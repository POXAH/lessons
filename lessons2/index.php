<?php

/*********************/
/*Вывод таблицы умножения*/
/*********************/

?><table width="250"><?
    for ($i = 1; $i <= 9; $i++){
        ?><tr align="center"><?
        for ($j = 1; $j <= 9; $j++){
        ?> <td align="center"> <?=$i*$j?></td><?
        }
        ?></tr> <?
    }
?></table><?

/*********************/
/*Вывод квадрватов чисел в бесконечном цикле до значения превышающего 100*/
/*********************/

echo "<br>";
$i = 0;
while (true){
    $a = $i++**2;
    echo $i."^2 = ".$a."<br>" ;
    if ($a > 100) goto b;
}
b:
echo "Цикл закончен";
echo "<br>";echo "<br>";

/*********************/
/*Функция умножающая значения*/
/*********************/

function lessons2($a, $b, $c = 5){
    return $a*$b*$c;
}
echo $a = lessons2(2, 4);