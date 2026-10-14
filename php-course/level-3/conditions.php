<?php

/*
 * Условия в PHP
 */

// if elseif else - Типичные условные конструкции

//switch-case конструкция

/*
    $x = 1;

    switch ($x) {
        case 1:
            echo 'Число равно 1';
            break;
        case 2:
            echo 'Число равно 2';
            break;
        default:
            echo 'Число не равно ни 1, ни 2';
    }
*/

//Тернарный оператор
//условие ? рузьтат если true : результат если false

echo "<h1>Условия</h1>";

if ('string') {
    echo 'Условие выполнено<br>';
} else {
    echo "0<br>";
}

if (0) { //0-означает false
    echo 'Условие выполнено<br>';
} else {
    echo "0<br>";
}

if (null) { //аналог нуля
    echo 'Условие выполнено<br>';
} else {
    echo "0<br>";
}

if (5) {
    echo 'Условие выполнено<br><br>';
} else {
    echo "0<br><br>";
}

$a = 20;

$checkParity = $a % 2 == 0 ? 0 : 1;

if ($checkParity == 0) {
    echo "Число $a - чётное<br>";
} else {
    echo "Число $a - нечётное<br>";
}
