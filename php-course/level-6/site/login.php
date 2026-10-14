<?php
require __DIR__ . '/auth.php';

//Проверка кукисов функцией из auth
if (getUserLogin() !== null) {
    header('Location: /level-6/site/index.php');
    exit;
}

if (!empty($_POST)) {

    $login = $_POST['login'] ?? '';
    $password = $_POST['password'] ?? '';

    if (checkAuth($login, $password)) {
        setcookie('login', $login, 0, '/');
        setcookie('password', $password, 0, '/');
        header('Location: /level-6/site/index.php');
    } else {
        $error = 'Ошибка авторизации';
    }
}
?>
<html>
<head>
    <title>Форма авторизации</title>
</head>
<body>

<?php if (isset($error)): ?>
    <span style="color: red;">
    <?= $error ?>
</span>
<?php endif; ?>

<form action="/level-6/site/login.php" method="post">
    <label for="login">Имя пользователя: </label><input type="text" name="login" id="login">
    <br>
    <label for="password">Пароль: </label><input type="password" name="password" id="password">
    <br>
    <input type="submit" value="Войти">
</form>
</body>
</html>
