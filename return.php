<?php
function suply(): array
{
    //here instructions
    return array(75, 3.142, 'Супер PHP', True);
}
$array = suply();
foreach ($array as $data)
{
    echo "Значение элемента: $data<br>";
}