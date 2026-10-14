<?php

/*
 * Цикл Foreach в PHP
 */

//foreach ($array as $index => $value) { //Здесь $array – это массив, $index и $value – это индекс и значение элемента на текущем шаге соответственно
//    ...
//}

/*
$carsSpeeds = [
    95,
    140,
    78
];

foreach ($carsSpeeds as $index => $speed) {
    echo $index . ' ' . $speed . '<br>';
} //cоответсвенно видим в выводе индекс и скорость(значение массива под этим индексом)
*/

//count($carsSpeeds) - count узнаёт сколько элементов находится в массиве и передаёт это значение в переменную

$carsSpeeds = [
    95,
    140,
    78
];

echo "<h1>Задание 1</h1>";

$sumOfSpeeds = 0;
$countOfCars = 0;

foreach ($carsSpeeds as $speed) {
    $sumOfSpeeds += $speed;
    $countOfCars += 1;
}

$averageSpeed = $sumOfSpeeds / $countOfCars;

echo 'Средняя скорость движения по трассе: ' . $averageSpeed;
