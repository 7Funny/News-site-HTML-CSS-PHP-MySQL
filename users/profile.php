<?php include("..\includes/connection.php");?>
<?php include("..\includes/head.php");?>

<div class="aside_main">
    <div class="aside">
        <img src="<?=$_SESSION['user']['avatar']?>" alt="<?= $_SESSION['user']['full_name'] ?>" class="photo">
        <?= $_SESSION['user']['full_name'] ?>
    </form>
    </div>
    <div class="main">
        <p>Логин: <?= $_SESSION['user']['login'] ?></p>
        <p>Пароль: <?= $_SESSION['user']['password'] ?></p>
    </div>
</div>

<?php include("..\includes/footer.php");?>
