<! DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Начинаем работу с PHP</title>
</head>
<body>
<?php

$filestream = fopen('index.html', 'r');
$data = array('PHP', 1, 2.3, TRUE, NUll, array(), new Directory, $filestream);

foreach($data as $type)
{
    var_dump($type);
    echo '<br> ';
}

fclose($filestream);
echo gettype($filestream);
?>
</body>
</html>
