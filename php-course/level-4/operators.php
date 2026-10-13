<?php
/*
 * break и continue в PHP
 */

$array = [1, 2, 3, 1, 4, 4, 5];

$value = 4;

function findValue($arr, $val){
    foreach ($arr as $value) {
        if ($value == $val) {
            return true;
        }
        else {
            continue; //по факту не нужен, но урок про continue и break
        }
    }
    return false;
}

function findCountValue($arr, $val){
    $count = 0;

    foreach ($arr as $value) {
        if ($value == $val) {
            $count++;
        }
        else {
            continue; //по факту не нужен, но урок про continue и break
        }
    }
    return $count;
}

echo "<h1>Задание 1</h1>";
echo findValue($array, $value);

echo "<h1>Задание 2</h1>";
echo findCountValue($array, $value);



