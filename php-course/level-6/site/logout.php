<?php
setcookie('login', '', time() - 3600, '/');
setcookie('password', '', time() - 3600, '/');

header('Location: /level-6/site/index.php');
exit;