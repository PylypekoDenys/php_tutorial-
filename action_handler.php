<?php
$name = $_POST['name'];
$mail = $_POST['mail'];
$comment = $_POST['comment'];
echo "<p>Благодорим за примечание, $name ...</p>";
echo "<p><i>$comment</i></p>";
echo "<p>Ответ будет отправлен на адрес $mail</p>";