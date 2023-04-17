<!DOCTYPE html>
<html lang='ru'>

<head>
    <title>Главная</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="..\main/style.css">
</head>

<body>
    <div class='all'>
    <div class="head">
        <a href="..\main/index.php" class="banner">Главная</a>
        <div class="right_banner">
            <a href="..\main/contacts.php" class="banner">Контакты</a>
            <?php if (!empty($_SESSION['user']['login']) and !empty($_SESSION['user']['admin'])) { ?> 
                <a href="..\users/profile.php" class="banner"> Профиль </a>
                <a href="..\news/new_add.php" class="banner"> Добавить новость </a>
                <a href="..\users/logout.php" class="banner"> Выйти </a>
                
            <?php } if(!empty($_SESSION['user']['login']) and empty($_SESSION['user']['admin'])) { ?> 
                <a href="..\users/profile.php" class="banner"> Профиль </a>
                <a href="..\users/logout.php" class="banner"> Выйти </a>
            <?php } if(empty($_SESSION['user']['login'])) { ?> 
                <a href="..\users/register.php" class="banner"> Войти </a>
            <?php } ?>
        </div>
    </div>
