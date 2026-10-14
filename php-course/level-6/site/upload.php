<?php
require __DIR__ . '/auth.php';
$login = getUserLogin();

if ($login !== null && !empty($_FILES['attachment'])){ //проверка наличия файла
    $file = $_FILES['attachment'];

    $srcFileName = $file['name']; //имя файла
    $newFilePath = __DIR__ . '/uploads/' . $srcFileName; //загрузка нового пути файла

    $allowedExtensions = ['jpg', 'png', 'gif', 'jpeg']; //ограничения расширений
    $extension = pathinfo($srcFileName, PATHINFO_EXTENSION);

    if (!in_array($extension, $allowedExtensions)) { //обработки ошибки загрузки недопустимого расширения
        $error = 'Загрузка файлов с таким расширением запрещена!';
    }
    elseif ($file['error'] !== UPLOAD_ERR_OK) { //обработка ошибки при загрузки
        $error = 'Ошибка при загрузке файла.';
    }
    elseif (!($sizeImage = getimagesize($file['tmp_name']))) {
        $error = 'Файл битый или не является картинкой';
    }
    elseif (file_exists($newFilePath)) { //обрвботка ошибки при загрузке фвйла с таким же именнем
        $error = 'Файл с таким именем уже существует';
    }
    elseif ($file['size'] > 8 * 1024 * 1024) { // 8 * 1024 * 1024 - универсальная запись размера 8MB
        $error = 'Файл слишком большой. Максимум 8 МБ.';
    }
    elseif ($sizeImage[0] > 1280 || $sizeImage[1] > 720) {
        $error = 'Файл такого разрешения недопустим к загрузке';
    }
    elseif (!move_uploaded_file($file['tmp_name'], $newFilePath)) { //обработка ошибки загрузки файла на диск
        $error = 'Ошибка при загрузке файла';
    }
    else {
        $result = 'http://localhost:8080/level-6/upload-files/uploads/' . $srcFileName;
    }
}
?>
<html>
    <head>
        <title>Загрузка файла</title>
    </head>
<body>
<?php if ($login === null): ?>
    <a href="login.php">Авторизуйтесь</a>
<?php else: ?>
    Добро пожаловать, <?= $login ?> |
    <a href="logout.php">Выйти</a>
    <br>
    <?php if (!empty($error)): ?>
        <?= $error ?>
    <?php elseif (!empty($result)): ?>
        <?= $result ?>
    <?php endif; ?>
    <br>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="attachment">
        <input type="submit">
    </form>
<?php endif; ?>
</body>
</html>
