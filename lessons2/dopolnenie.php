<?php

/*********************/
/*Получение високосного года через стандартный функционал PHP*/
/*********************/

function year($year){
    $date = date_create_from_format('Y', $year);
    echo $date->format('L');
}
year(2020);


echo "<br>";echo "<br>";
/*********************/
/*Вывод простых чисел*/
/*********************/

function root($value){
    for ($i = 2; $i<= sqrt($value); $i++){
        if ($value%$i == 0) {
            return false;
        }
    }
    return true;
}

for ($i = 2; $i <= 100; $i++){
    if (root($i)) $a[] = $i;
}

echo"<PRE>";
print_r($a);
echo"</PRE>";

foreach ($a as $key => $value) {
    echo "$value - это простое число №".($key+1)."<br>";
}