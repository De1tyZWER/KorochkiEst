<?php
require_once('app/boot.php');
?>

<h1>РЕГИСТРАЦИЯ</h1>

<?php if (isset($_SESSION['errors'])): ?>
    <div style="color: red; border: 1px solid red; padding: 10px;">
        <?php foreach ($_SESSION['errors'] as $error): ?>
            <p><?= $error ?></p>
        <?php endforeach; ?>
    </div>
    <?php unset($_SESSION['errors']); ?>
<?php endif; ?>

<form method="post" action="app/do_register.php">
    <p>Логин</p>
    <input type="text" name="username" minlength="6" required>
    <p>Пароль</p>
    <input type="password" name="password" minlength="8" required>
    <p>ФИО</p>
    <input type="text" name="fio" required>
    <p>email</p>
    <input type="text" name="email" required>
    <p>телефон</p>
    <input type="phone" name="phone" required>

    <button type="submit">Зарегистрироваться</button>
</form>

<p>Есть аккаунт? <a href="auth.php">Авторизация</a></p>