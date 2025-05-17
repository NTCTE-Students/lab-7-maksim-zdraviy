<?php

session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    setcookie('theme', $_POST['theme'], time() + (3600*24*30), '/');
    header('Location: '.$_SERVER['PHP_SELF']);
    exit();
}

?>
<!DOCTYPE html>
<html>
<body>
<form method="post">
    <label>Выберите тему:</label>
    <select name="theme">
        <option value="light">Светлая</option>
        <option value="dark">Тёмная</option>
    </select>
    <input type="submit" value="Сохранить">
</form>
<p>Текущая тема: <?php echo $_COOKIE['theme'] ?? 'не выбрана'; ?></p>
</body>
</html>