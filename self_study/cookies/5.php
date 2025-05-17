<?php

$cookie_name = 'visited';
$cookie_value = 1;

if (isset($_COOKIE[$cookie_name])) {
    $cookie_value = $_COOKIE[$cookie_name] + 1;
}

setcookie($cookie_name, $cookie_value, time() + (3600*24*30), '/');

?>
<!DOCTYPE html>
<html>
	<body>
		<?php
			if (!isset($_COOKIE[$cookie_name])) {
			    print("Куки '{$cookie_name}' не установлены!");
			} else {
			    print("Куки '{$cookie_name}' установлены!<br>");
				print('Кол-во посещений: ' . $_COOKIE[$cookie_name]);
			}
		?>
	</body>
</html>