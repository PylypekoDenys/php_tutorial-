<?php
$html = '<script>window.location="index.html"</script>';
// Сюда помещаются инструкции.
$html = htmlspecialchars($html);
echo $html;