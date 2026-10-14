<?php
$login = !empty($_GET['login']) ? $_GET['login'] : '';
$password = !empty($_GET['password']) ? $_GET['password'] : '';

if ($login === 'admin') {
    if ($password === 'QWEasd123') {
        $isAuthorized = 'Логин и пароль верный';
    } else {
        $isAuthorized = 'Пароль неверный';
    }
} else {
    $isAuthorized = 'Пользователь не найден';
}

?>

<html>
<head>
    <title>Результат авторизации</title>
</head>
<body>
<p>
    <?= $isAuthorized ?>
</p>
</body>
</html>
