<?php

?>

<html>
<head>
    <title>Калькулятор</title>
</head>
<body>
<form action="/level-5/calculate/result.php">
    <input type="text" name="x1">
    <select name="operation">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option valur="/">/</option>
    </select>
    <input type="text" name="x2">
    <input type="submit" value="Посчитать">
</form>
</body>
</html>
