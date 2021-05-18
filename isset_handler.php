<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP</title>
</head>
<body>
<?php
if (isset($_POST['definition']))
{
    $definition = $_POST['definition'];
}
else
{
    $definition = NULL;
}
if ($definition!= NULL)
{
    if ($definition!= 'Обьектно ориентированный')
    {echo "$definition - неправильно";}
    else
    {echo "$definition - правильно!";}
}
else
{echo 'Вы должны выбрать один из вариантов ответа';}
?>

</body>
</html>