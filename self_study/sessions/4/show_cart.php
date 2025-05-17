<?php
session_start();

// Инициализация корзины, если пуста
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Содержимое корзины</title>
</head>
<body>
    <h2>Ваша корзина</h2>

    <?php if (empty($_SESSION['cart'])): ?>
        <p>Корзина пуста.</p>
    <?php else: ?>
        <ul>
            <?php foreach ($_SESSION['cart'] as $item): ?>
                <?php
                    if (is_array($item)) {
                        $name = htmlspecialchars($item['name']);
                        $price = number_format((float)$item['price'], 2);
                        echo "<li>$name — $price ₽</li>";
                    }
                ?>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>

    <br>
    <a href="cart.php">Вернуться к управлению корзиной</a>
</body>
</html>
