<?php

session_start();

if (!isset($_SESSION['username']) && !isset($_SESSION['password'])) {
    header('Location: login.php');
    exit();
}

?>

<!DOCTYPE html>
<html>
	<body>
		<h2>Добро пожаловать!</h2>
		<p>Привет, <?php print($_SESSION['username'].'. Твой пароль: '.$_SESSION['password'])?></p>
	</body>
</html>