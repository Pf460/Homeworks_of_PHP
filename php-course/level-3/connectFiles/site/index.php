<?php
$content = '<h1>Заголовок статьи</h1><p>Текст какой-то статьи</p>';
$footer = '<h1>Подвал</h1>';
$header = '<h1>Шапка с логотипом</h1>';
$sidebar = '<ul><li>Пункт 1</li><li>Пункт 2</li><li>Пункт 3</li></ul>';

require __DIR__ . '/header.php';
require __DIR__ . '/sidebar.php';
require __DIR__ . '/content.php';
require __DIR__ . '/footer.php';