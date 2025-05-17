<?php
session_start();

$now = date('Y-m-d H:i:s');

if (!isset($_SESSION['first_visit_time'])) {
    $_SESSION['first_visit_time'] = $now;
}

$_SESSION['last_visit_time'] = $now;
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Время визита</title>
</head>
<body>
    <h2>Информация о посещении</h2>
    <p>Первый визит: <?= $_SESSION['first_visit_time'] ?></p>
    <p>Последний визит: <?= $_SESSION['last_visit_time'] ?></p>
</body>
</html>
