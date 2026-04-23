<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Главная</title>
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<?php
$menuItems = [
    'Главная' => '/index.php',
    'О нас' => '/pages/about.php',
    'Контакты' => '/pages/contact.php'
];
?>

<header>
    <nav>
        <ul>
            <?php foreach ($menuItems as $title => $url): ?>
                <li>
                    <a href="<?= $url ?>" <?= $_SERVER['REQUEST_URI'] == $url ? 'class="active"' : '' ?>>
                        <?= $title ?>
                    </a>
                </li>
            <?php endforeach; ?>
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
