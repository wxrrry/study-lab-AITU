<?php include '../includes/header.php'; ?>

<?php
$success = '';
$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name    = trim($_POST['name'] ?? '');
    $email   = trim($_POST['email'] ?? '');
    $message = trim($_POST['message'] ?? '');

    if (empty($name) || empty($email) || empty($message)) {
        $error = 'Пожалуйста, заполните все поля.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = 'Некорректный формат email.';
    } else {
        // Здесь можно добавить mail() или запись в БД
        $success = 'Спасибо, ' . htmlspecialchars($name) . '! Ваше сообщение успешно отправлено.';
        // Очистка формы после успешной отправки
        $name = $email = $message = '';
    }
}
?>

<main>
    <h1>Контакты</h1>

    <?php if ($error): ?>
        <p style="color: #d32f2f; margin-bottom: 15px;"><?= htmlspecialchars($error) ?></p>
    <?php endif; ?>

    <?php if ($success): ?>
        <p style="color: #388e3c; margin-bottom: 15px;"><?= htmlspecialchars($success) ?></p>
    <?php endif; ?>

    <form method="post" action="">
        <input type="text" name="name" placeholder="Имя" value="<?= isset($_POST['name']) ? htmlspecialchars($_POST['name']) : '' ?>" required>
        <input type="email" name="email" placeholder="Email" value="<?= isset($_POST['email']) ? htmlspecialchars($_POST['email']) : '' ?>" required>
        <textarea name="message" placeholder="Ваше сообщение" rows="5" required></textarea>
        <button type="submit">Отправить</button>
    </form>
</main>

<?php include '../includes/footer.php'; ?>