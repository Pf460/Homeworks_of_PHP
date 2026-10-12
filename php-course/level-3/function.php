<?php

/*
 * Функции в PHP
 */

//Есть встроенные фнкции
//cos() - вычисление косинуса
//str_replace('какой символ меняем', 'на какой символ меняем', где меняем) - функция замены символов в строке


//Пользовательские функции
/*
    function nameFunction(arg1, arg2, ... ,argN)
    {
     Тело функции;
     return результат; //возврат результата
    }
*/


//Передача параметров по ссылке осуществляется так: function nameFunction(&$x) - & знак является ключевым для ссылке. Нужна для изменения глобальный использованных переменных

//declare(strict_types=1); - дирректива, кт указывает на строгую типизацию данных
//rand() - функция без аргументов, которая передаёт псевдорандомное число
//рекурсивные функции похожи на цикл: мы вызываем функции внутри себя самой: nameFunction($x, $n) = $x + nameFunction($x, $n - 1)

declare(strict_types=1);

echo "<h1>Функции</h1>";
echo "<h2>Задание 1</h2>";

function minOfFloat(float $x, float $y, float $z) {
    $min = min($x, $y, $z);
    return $min;
}

$a = 5;
$b = 19.25;
$c = 14.89;

echo 'Минимальное число из трёх аргументов: ' . minOfFloat((float)$a, (float)$b, (float)$c) . '<br>';

echo "<h2>Задание 2</h2>";

function multiLink(int &$x, int &$y) {
    $x *= 2;
    $y *= 2;
    return [$x, $y];
}

$f = 5;
$g = 6;

echo "Значения до изменения: $f, $g<br>";
$resultFunction = multiLink($f, $g);

echo "Значения после изменения: $resultFunction[0], $resultFunction[1]<br>";

echo "<h2>Задание 3</h2>";
function factorialNum(int $x) {
    if ($x < 1) {
        return 1;
    }
    return $x * factorialNum($x - 1);
}

echo factorialNum(5);

echo "<h2>Задание 4</h2>";

function showNum(int $x) {
    if ($x < 0) {
        return 0;
    }
    showNum($x - 1);
    echo $x . "<br>";
}

echo showNum(5);


