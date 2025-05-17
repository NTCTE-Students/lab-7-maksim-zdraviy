<?php

session_start();

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = trim($_POST['name'] ?? '');
    $price = trim($_POST['price'] ?? '');
    $action = $_POST['action'] ?? '';

    if ($action === 'add' && $name !== '' && is_numeric($price)) {
        $_SESSION['cart'][] = ['name' => $name, 'price' => $price];
    } elseif ($action === 'remove' && $name !== '') {
        foreach ($_SESSION['cart'] as $key => $item) {
            if (isset($item['name']) && $item['name'] === $name) {
                unset($_SESSION['cart'][$key]);
                $_SESSION['cart'] = array_values($_SESSION['cart']);
                break;
            }
        }
    }
}

?>

<!DOCTYPE html>
<html>
	<body>
		<h2>Добавить товар</h2>
		<form method="post" action="cart.php">
			Название: <input type="text" name="name" required><br><br>
            Цена: <input type="number" name="price" required><br><br>
			<input type="hidden" name="action" value="add">
			<input type="submit" value="Добавить">
		</form>

		<h2>Удалить товар</h2>
		<form method="post" action="cart.php">
			Название: <input type="text" name="name" required><br><br>
			<input type="hidden" name="action" value="remove">
			<input type="submit" value="Удалить">
		</form>

		<a href="show_cart.php">Посмотреть корзину</a>
	</body>
</html>