<?php 
include("..\includes/connection.php");
include("..\includes/head.php");

$result = mysqli_query($connection, "SELECT * FROM contacts ORDER BY id");
if ($result == false)
{
    echo "Сообщение ошибки:\n";
    echo mysqli_connect_error();
}
?>

<div>
    <?php
    while ($row = mysqli_fetch_assoc($result))
        {
    ?>
    <div class="aside_main">
        <div class="aside">
            <img src="<?= $row['picture'] ?>" alt="<?= $row['nickname'] ?>" class="photo">
            <h3><?= $row['nickname'] ?></h3>
            <div class="icons">
                <a href="<?= $row['Facebook'] ?>" class="icon">
                    <img src="..\images/facebook.svg" alt="Facebook">
                </a>
                <a href="<?= $row['Instagramm'] ?>" class="icon">
                    <img src="..\images/insta.svg" alt="Instagramm">
                </a>
                <a href="<?= $row['Twitter'] ?>" class="icon">
                    <img src="..\images/twitter.svg" alt="Twitter">
                </a>
            </div>
            
        </div>
        <div class="main">
            <div>
                <p><b>Дата рождения: </b><?= $row['birthday'] ?><br>
                <b>Место рождения: </b> <?= $row['birthplace'] ?></p>
            </div>
            <p><?= $row['info'] ?></p>
        </div>
    </div>
    <?php
        }
    ?>
<?php include("..\includes/footer.php");?>