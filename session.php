
<?php
require 'User.php';

$users = [
    new User("Іван Іванов", "ivan@example.com"),
    new User("Петро Петренко", "petro@example.com"),
    new User("Марія Марієнко", "maria@example.com"),
    new User("Олег Олегович", "oleg@example.com"),
    new User("Анна Анненко", "anna@example.com"),
];

$userIndex = isset($_GET['user']) ? (int)$_GET['user'] : 0;
$user = $users[$userIndex];

$purchaseHistory = [
    ['date' => '2024-01-01', 'sessionId' => 1],
    ['date' => '2024-02-15', 'sessionId' => 2],
    ['date' => '2024-03-10', 'sessionId' => 3],
];
?>

<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Історія покупок</title>
</head>
<body>
    <h1>Історія покупок для <?= $user->getUser() ?></h1>
    <ul>
        <?php foreach ($purchaseHistory as $session): ?>
            <li><?= $session['date'] ?> — <a href="cart.php?session=<?= $session['sessionId'] ?>"><?= $session['sessionId'] ?></a></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
