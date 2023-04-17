<?php include("..\includes/connection.php");?>
<?php include("..\includes/head.php");

$result = mysqli_query($connection, "SELECT * FROM news ORDER BY d");
if ($result == false)
{
    echo "Сообщение ошибки:\n";
    echo mysqli_connect_error();
}
/*
$count=mysqli_num_rows(result);
$counOnPage=3;
$countPages = floor($count/$counOnPage);
if(isset($_GET['str'])){
    $page=$_GET['str'];
}else{
    $page='';
}
for($i=1; $i<=$countPages; $i++){
    if($page!=''){
        echo i;
    }else{

    }
}
*/
?>
<div>
    <p class="title">Новое</p><br>
    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
    <div>
        <div class="listIndexNews">
            <div class="photoNew">
                <img class ="img" src="<?= $row['picture'] ?>" alt="<?= $row['preview'] ?>">
                <p><?= $row['title'] ?></p>
            </div>
            <div class="infoNew">
                <?= $row['d'] ?><br>
                <p><?= $row['preview'] ?></p>
                <a href="..\news/new.php?id=<?= $row['id'] ?>"> Подробнее</a><br>
                <?php if (!empty($_SESSION['user']['login']) and $_SESSION['user']['admin'] == 1){ ?>
                <a href="..\news/new_edit.php?id=<?=$row['id'] ?>">Изменить новость</a><br>
                <a href="..\news/new_delete.php?id=<?=$row['id'] ?>">Удалить новость</a>
                <?php } ?> 
            </div>
        </div>
    </div>
</div>
<?php } 
include("..\includes/footer.php");?>