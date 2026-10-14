<?php

/*
 * COOKIE В PHP
 */

//$_COOKIE - суперглобальная переменная означает файлы браузера
//кукисы удобно использовать для запоминания каких-то данных, которые поступают на сервер от пользователя, при этом эти данные запоминаются самим браузером по просьбе сервера
//При этом у cookie есть TTL (Time To Live – время жизни).

//для наполнение кукисов мы пользуемся встроенной функцией setcookie($name, $value, $ttl, $path)

//здесь:
/*
     * setcookie(
        name:     'user_name',           // string  — имя cookie
        value:    'Pavel',               // string  — значение
        expires_or_options: time() + 3600, // int   — когда истекает (через час)
        path:     '/',                   // string  — доступна на всём сайте
        domain:   'myproject.loc',       // string  — только для этого домена
        secure:   true,                  // bool    — только через HTTPS
        httponly: true                   // bool    — только по HTTP, недоступна из JS
    );
 */

//setcookie('login', 'admin', 0, '/'); //пример

//var_dump($_COOKIE);

//setcookie('login', 'admin', 0, '/'); //удаление кукисов

setcookie('login', 'admin', time() + 20, '/'); //Изменение времени жизни в режиме разработчика разработчика
echo "<h1>Cookie-файлы</h1>";
var_dump($_COOKIE);