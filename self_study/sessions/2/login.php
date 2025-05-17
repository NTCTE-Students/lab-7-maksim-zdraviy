<?php

session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $_SESSION['username'] = $username;
    $_SESSION['password'] = $password;

    header('Location: welcome.php');
    exit();
}

?>

<!DOCTYPE html>
<html>
	<body>
		<h2>Форма входа</h2>
		<form method="post" action="login.php">
			Имя пользователя: <input type="text" name="username" required><br><br>
            Пароль: <input type="password" name="password" required><br><br>
			<input type="submit" value="Войти">
		</form>
	</body>
</html>