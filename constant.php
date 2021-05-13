<! DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Начинаем работу с PHP</title>
</head>
<body>
<?php

define('USER', 'Михаил');
define('PETS', ['котенок', 'щенок', '[хомячок']);
echo '<p>Привет, '. USER. '. Как поживает твой '. PETS[0]. '?</p>';
echo '<p>Ты используешь PHP-движок версии '. PHP_VERSION;
echo ', запущенный в '. PHP_OS.'</p>';


?>
</body>
</html>