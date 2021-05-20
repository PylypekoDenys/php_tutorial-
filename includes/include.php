<?php
$page_title = 'PHP-включения';
include ('header.html');
echo '<form action="include.php" method="POST">
<p>Имя: <input type="text" name="name" ></p>
<p>Email: <input type="text" name="email"></p>
<p><input type="submit"></p></form>';
include ('footer.html');

