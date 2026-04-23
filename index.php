<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Главная</title>
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<header>
    <nav>
        <ul>
            <li><a href="/index.php">Главная</a></li>
            <li><a href="/pages/about.php">О нас</a></li>
            <li><a href="/pages/contact.php">Контакты</a></li>
        </ul>
    </nav>
</header>

<body>
    <?php include 'includes/header.php'; ?>
    <main>
        <h1>Добро пожаловать!</h1>
    </main>
    <?php include 'includes/footer.php'; ?>
</body>
<footer>
    <p>&copy; <?= date('Y') ?> Мой сайт</p>
</footer>

</html>
