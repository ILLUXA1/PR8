<?php

declare(strict_types=1);

$name = $_FILES['image']['name'];
$tmp_name = $_FILES['image']['tmp_name'];

move_uploaded_file($tmp_name, "images/". $name);

?>

<!DOCTYPE html>
<html lang="uk">
<head>
    <title>Завантажено</title>
    <meta charset="utf-8">
    <link rel="shortcut icon" type="image/x-icon" href="icon.ico">
    <link rel="icon" type="image/x-icon" href="icon.ico">
    <link rel="stylesheet" href="styleCreate.css">
</head>
<body>
    <form>
        <label>Картинку додано.</label>
        <small>Якщо формат картинки не був .JPG, то картинка відображатись не буде.</small>

        <a href="upload.php">Повернутись назад.</a>
    </form>
</body>
</html>
