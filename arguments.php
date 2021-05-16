<! DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Начинаем работу с PHP</title>
</head>
<body>
<?php

$a = $b = 5;

function modify(int $val, int &$ref)
{
    echo "Переданные значения: $val, $ref<br>";
    $val++;
    $ref++;
    echo "Инкременированные значения: $val, $ref<hr>";
    modify($a, $b);
    echo "Сохраненные значения: $a, $b";
}

?>
</body>
</html>