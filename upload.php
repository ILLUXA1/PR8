<?php

declare(strict_types=1);

?>

<!DOCTYPE html>
<html lang="uk">
<head>
    <title>Завантаження картинки</title>
    <meta charset="utf-8">
    <link rel="shortcut icon" type="image/x-icon" href="icon.ico">
    <link rel="icon" type="image/x-icon" href="icon.ico">
    <link rel="stylesheet" href="styleUpload.css">
</head>
<body>
    <form action="create.php" method="post" enctype="multipart/form-data">
        <label>Оберіть картинку</label>
        <small>Розширення повинно бути .JPG</small>
        <input type="file" name="image">
        <button name="btnUpload">Додати картинку</button>

        <a href="gallery.php">Повернутись на головне вікно.</a>
    </form>
</body>
</html>
