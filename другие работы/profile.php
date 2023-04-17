<?php include("..\includes/connection.php");?>

<?php
session_start();
if (!$_SESSION['user']) {
    header('Location: /');
}
?>

<!doctype html>
<html lang="ru">
<head>
    <title>Главная</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="..\main/style.css">
</head>
<body>

    <!-- Профиль -->
    <div class="head">
        <a href="..\main/index.php" class="banner">Главная</a>
        <div class="right_banner">
            <a href="..\main/contacts.php" class="banner">Контакты</a>
            <a href="..\users/login.php" class="banner"> Выйти </a>
        </div>
    </div>

    <form>
        <img src="<?= $_SESSION['user']['avatar'] ?>" width="200" alt="">
        <h2 style="margin: 10px 0;"><?= $_SESSION['user']['full_name'] ?></h2>
        <a href="#"><?= $_SESSION['user']['email'] ?></a>
        <a href="..\users/logout.php" class="logout">Выход</a>
    </form>

</body>
</html>
