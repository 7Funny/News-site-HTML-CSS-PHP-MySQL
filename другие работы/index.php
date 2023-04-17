<?require("header.php");
$res=show_news($link);
while($row = $res->fetch_assoc()) {?>
<div class="onenew">
    <div class ="date"><?=$row['d']?></div>

    <div class="title">
        <?=$row['title']?> 
    </div>

        <div class="onenewcontent">
                <div class="imageblock"><img class="image" src=<?=$row['img']?> title= <?=$row['title']?> ></div>
                    <div class="textcontent">
                    <p><?=$row['stext']?></p>
                </div>
        </div>

    <div>
        <a href="new.php?id=<?=$row['id'] ?>" class="more">Подробнее</a>
        <? if (!empty($_SESSION['login']) and !empty($_SESSION['id']) and $_SESSION['admin']==1)
        {?>
        <a href="update.php?id=<?=$row['id'] ?>" class="more">Изменить новость</a>
        <a href="delete.php?id=<?=$row['id'] ?>" class="more">Удалить новость</a>
        <?;}?>
    </div>
</div>
<?}?>
</div>
</div>

<div class="footer">
    <h2>© Дьячкова М., Камынин А.</h2>
</div>

</body>
</html>