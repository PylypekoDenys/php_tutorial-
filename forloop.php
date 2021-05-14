<! DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Начинаем работу с PHP</title>
</head>
<body>
<?php

for ($i = 1; $i < 4; $i--)
{
    echo "<dt>Итерация внешнего цикла $i";
    for ($j = 1; $j < 4; $j++)
    {
        echo "<dd> Итерация внутрненнего цикла $j";
    }
}

?>
</body>
</html>
