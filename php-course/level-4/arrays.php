<?php
/*
 * Массивы в PHP
 */

//массив - 'мусорная корзина', в которой можно хранить всё, что угодно

$fruits = ['apple', 'orange', 'grape']; //Типичная инициализация массива

var_dump($fruits);
echo "<br>$fruits[0]";

$fruits[] = 'mango'; //добавление элементов в конец массива

echo "<br><br>";
var_dump($fruits);

unset($fruits[0]); //unset - конструкция для удаления элемента массива с определённым индексом

echo "<br><br>";
var_dump($fruits);

$numbers = [4 => 'Один с индеком 4', 7 => 'Два с индексом 7', 3 => 'Три с индексом три']; //ключ => значение

echo "<br><br>";
var_dump($numbers);

$numbers[20] = "Четыре с индексом двадцать"; //Добавление в массив элементов уже с заданным индекслм
echo "<br><br>";
var_dump($numbers);

/*
 * Ассоциативный массив в PHP
 */

$article = ['title' => 'Название статьи', 'text' => 'Текст статьи'];
$article['author'] = 'Имя автора';

echo "<br><br>";
var_dump($article);

/*
 * Многомерные массивы
 */

$article1 = [
    'title' => 'Название статьи',
    'text' => 'Текст статьи',
    'author' => [
        'first_name' => 'Иван',
        'last_name' => 'Иванов'
    ]
];

echo "<br><br>";
var_dump($article1);

echo "<br><br>";
echo $article1['author']['first_name'];

echo "<br><br>";
echo "<h2>Задание 1</h2>";

$massEnclosure = [
    'header' => [
        'logo' => [
                'img' => 'Эмблема компании',
                'title' => 'Название компании',
        ],
        'menu' => [
                'contact' => 'Номер телефона',
                'about' => 'О нас',
        ]
    ],
];

$massEnclosure['header']['logo']['new'] = 'Новое значение на третьем уровке вложенности';

var_dump($massEnclosure);

?>

<html>
<head>
    <title><?= $article['title'] ?></title>
</head>
<body>
    <h1><?= $article['title'] ?></h1>
    <p><?= $article['text'] ?></p>
    <p><?= $article1['author']['first_name'] . ' ' . $article1['author']['last_name'] ?></p>
</body>
</html>




