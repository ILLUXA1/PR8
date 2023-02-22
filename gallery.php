<?php

declare(strict_types=1);

$file = fopen("log/".date('d-m-Y').".log", "a+t");
fwrite($file, date('H:i:s')."\n");
fclose($file);

?>

<!DOCTYPE html>
<html lang="uk">
<head>
    <title>Галерея WoT</title>
    <meta charset="utf-8">
    <link rel="shortcut icon" type="image/x-icon" href="icon.ico">
    <link rel="icon" type="image/x-icon" href="icon.ico">
    <link rel="stylesheet" href="styleGall.css">
</head>
<body>
    <form>
        <p>
            Галерея скріншотів з гри «World of Tanks»
        </p>
        <?php
            function search_img($path){
            $html='';
            foreach (glob($path."*.jpg") as $filename)
            {
            $html .= '<img class="pimg" src="'.$filename.'" alt="" />';
            }
            return $html;
            }

            echo search_img("images/");
        ?>

        <a href="upload.php">Якщо ви бажаєте додати власні картинки, натисніть на текст.</a>
    </form>
</body>
</html>
