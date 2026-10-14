<?php

require __DIR__ . '/auth.php';
$login = getUserLogin();

?>
<html>
<head>
    <title>Главная страница</title>
</head>
<body>
<?php if ($login === null): ?>
    <a href="/level-5/site/login.php">Авторизуйтесь</a>
<?php else: ?>
    Добро пожаловать, <?= $login ?>
    <br>
    <a href="/level-5/site/logout.php">Выйти</a>
<?php endif; ?>
</body>
</html>
