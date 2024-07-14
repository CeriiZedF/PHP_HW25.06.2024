<?php
require 'User.php';

$users = [
    new User("Іван Іванов", "ivan@example.com"),
    new User("Петро Петренко", "petro@example.com"),
    new User("Марія Марієнко", "maria@example.com"),
    new User("Олег Олегович", "oleg@example.com"),
    new User("Анна Анненко", "anna@example.com"),
];
?>

<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Список користувачів</title>
</head>
<body>
    <h1>Список користувачів</h1>
    <ul>
        <?php foreach ($users as $index => $user): ?>
            <li><a href="session.php?user=<?= $index ?>"><?= $user->getUser() ?></a></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
