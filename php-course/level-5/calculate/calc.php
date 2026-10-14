<?php
if (empty($_GET)) {
    return 'Ничего не передано!';
}

if (empty($_GET['operation'])) {
    return 'Не передана операция';
}

//проверка пустоты поля
if (!isset($_GET['x1']) || !isset($_GET['x2'])) { //была ловушка с empty - проверяет пустоту значения - ноль является пустым значением и возвращает empty(true), isset - проверяет пустоту поля, то есть обрабатывает поле независимо от того какие дынные в нём находятся
    return 'Не переданы аргументы';
}

//проверка значений на числовой тип
if (!is_numeric($_GET['x1'] ?? '') || !is_numeric($_GET['x2'] ?? '')) {
    return 'Аргументы должны быть числами';
}

$x1 = $_GET['x1'];
$x2 = $_GET['x2'];

switch ($_GET['operation']) {
    case '+':
        $result = $x1 + $x2;
        break;
    case '-':
        $result = $x1 - $x2;
        break;
    case '*':
        $result = $x1 * $x2;
        break;
    case '/':
        if ($x2 == 0) { //Обработка деления на ноль
            return 'Деление на ноль невозможно';
        }
        $result = $x1 / $x2;
        break;
    default:
        return 'Операция не поддерживается';
}

$result = round($result, 2); //round - влияет на возврат и возвращает в данном случае только два знака после запятой, если действия предполагают результат дробного типа

$expression = $x1 . ' ' . $_GET['operation'] . ' ' . $x2 . ' = ' . $result;
return $expression;
