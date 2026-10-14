<?php
echo "<h1>Вывод собственного кода</h1>";
echo '<pre>' . htmlspecialchars(file_get_contents(__FILE__)) . "</pre>\n";
//htmlspecialchars - нужен чтобы html не считывал теги внутри echo

echo "<h1>Все файлы и папки:</h1>";

$items = scandir(__DIR__); //функция сканирования текущей директории

foreach ($items as $item) {
    if ($item === '.' || $item == '..' || $item == 'homeworks.php') {
        continue;
    }
    echo htmlspecialchars($item) . "<br>";
}

echo "<h1>Все папки</h1>";

foreach ($items as $item) {
    if ($item === '.' || $item === '..') {
        continue;
    }
    if (is_dir(__DIR__ . '/' . $item)) { //is_dir() - функция проверяет идёт путь к папке или нет
        echo htmlspecialchars($item) . "<br>";
    }
}