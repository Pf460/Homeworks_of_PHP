<?php
setcookie('login', '', time() - 3600, '/');
setcookie('password', '', time() - 3600, '/');

header('Location: /level-5/site/index.php');
exit;