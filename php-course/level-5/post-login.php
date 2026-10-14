<?php
$login = !empty($_POST['login']) ? $_POST['login'] : '';
$password = !empty($_POST['password']) ? $_POST['password'] : '';

//Данные не передаются через URL, как в GET-запросах
?>

<html>
<head>
    <title>Обработка POST-запроса</title>
</head>
<body>
<p>
    Переданный login: <?= $login ?>
    <br>
    Переданный password: <?= $password ?>
</p>
</body>
</html>
