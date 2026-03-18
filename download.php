<?php
$text = $_GET['text'] ?? 'Нет текста';

header('Content-Type: text/plain');
header('Content-Disposition: attachment; filename="file.txt"');

echo $text;