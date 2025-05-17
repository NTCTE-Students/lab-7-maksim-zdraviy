<?php

$cookie_name = 'font_size';
$cookie_value = '18';

setcookie($cookie_name, $cookie_value, time() + (3600*24*30), '/');
setcookie('layout', 'grid', time() + (3600*24*30), '/');

?>
<!DOCTYPE html>
<html>
	<body>
		<?php
			if (!isset($_COOKIE[$cookie_name])) {
			    print("Куки '{$cookie_name}' не установлены!");
			} else {
			    print("{$cookie_name}: $_COOKIE[$cookie_name]<br>");
				print('layout: ' . $_COOKIE['layout']);
			}
		?>
	</body>
</html>