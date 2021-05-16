<! DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Начинаем работу с PHP</title>
</head>
<body>
<?php function greet()
{
    echo 'Привет, пользователь<br>';
}
greet();
function outer()
{
    function inner()
    {
        echo 'Вложенная функция вызвана.<br>';
    }
    echo 'Вложенная функция создана.<br>';
}
outer();
inner();
?>
</body>
</html>