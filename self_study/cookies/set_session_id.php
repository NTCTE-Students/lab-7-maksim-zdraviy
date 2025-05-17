<?php

$cookie_name = 'session_id';
$cookie_value = 'ssd';

setcookie($cookie_name, $cookie_value, time() + (6823), '/');

?>
<!DOCTYPE html>
<html>
	<body>
		<?php
			if (!isset($_COOKIE[$cookie_name])) {
			    print("not set");
			} else {
				print("set");
			}
		?>
	</body>
</html>