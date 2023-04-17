<?php include("..\includes/connection.php");?>
<?php include("..\includes/head.php");

$id=(int)$_GET["id"];

$result = mysqli_query($connection, "SELECT * FROM news WHERE id = '$id'");

if ($result == false)
{
    echo "Сообщение ошибки:\n";
    echo mysqli_connect_error();
}

$row = mysqli_fetch_assoc($result)
?>
<div>
    <div class="aside_main">
        <div class="aside">
            <img src="<?= $row['picture'] ?>" alt="<?= $row['preview'] ?>" class="photo">
            <h3><?= $row['title'] ?></h3>
        </div>
        <div class="full_text">
            <?= $row['d'] ?><br>
            <?= $row['full text'] ?>
        </div>
    </div>
<?php
include("../includes/footer.php");
?>