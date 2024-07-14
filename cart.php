<?php

$sessionId = isset($_GET['session']) ? (int)$_GET['session'] : 0;

$sessions = [
    1 => ['product1', 'product2', 'product3'],
    2 => ['product4', 'product5'],
    3 => ['product6', 'product7', 'product8', 'product9'],
];

$products = isset($sessions[$sessionId]) ? $sessions[$sessionId] : [];
?>

<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Кошик продуктів</title>
</head>
<body>
    <h1>Продукти в кошику для сесії <?= $sessionId ?></h1>
    <ul>
        <?php foreach ($products as $product): ?>
            <li><?= htmlspecialchars($product) ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
