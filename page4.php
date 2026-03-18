<?php
session_start();
$count = $_SESSION['count'] ?? 0;
echo "Страница 3 была открыта $count раз.";