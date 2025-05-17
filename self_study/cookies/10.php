<?php

$cookie_name = 'session_id';
$cookie_value = '';

setcookie($cookie_name, $cookie_value, time(), '/');

?>
<!DOCTYPE html>
<html>
	<body>
		<?php
			if (isset($_COOKIE[$cookie_name])) {
			    print("Куки '{$cookie_name}' установлены!");
			} else {
			    print("Куки '{$cookie_name}' установлены!<br>");
				print("Куки '{$cookie_name}' успешно удалены!");
			}
		?>
	</body>
</html>