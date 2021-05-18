<?php
$filesteam = fopen('manifesto.txt','r') or die('Невозможно открыть файл!');
echo fread($filesteam, filesize('manifesto.txt'));
fclose($filesteam);
