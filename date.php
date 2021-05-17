<?php
echo 'Дата: '.date('jS F Y').'<br>';
echo 'День недели: '.date('1').'<br>';
echo 'Время: '.date('h: i: s a').'<br>';
echo 'Часовой пояс: '.date_default_timezone_get().'<hr>';

date_default_timezone_set('Europe/Kiev');
echo 'Текущий часовой пояс: '.date_default_timezone_get();
echo '<br>Текущее время: '.date('h: i: s').'<hr>';

$d = strtotime('tomorrow');
echo 'Завтра: '.date('1,jS F Y', $d).'<br>';

$d = strtotime('August 18, 1979');
echo 'День рождение Михаила: '.date('jS F', $d);
