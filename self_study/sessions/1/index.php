<?php

$s_name = 'username';
$s_value = 'student';

session_start();

$_SESSION[$s_name] = $s_value;

?>

<!DOCTYPE html>
<html>
	<body>
		<?php
			if (!isset($_SESSION['username'])) {
			    print("Переменные сессии '{$s_name}' не установлены!");
			} else {
			    print("Переменные сессии '{$s_name}' установлены!<br>");
				print('Значение: ' . $_SESSION[$s_name]);
			}
		?>
	</body>
</html>