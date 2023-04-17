<?php 
    session_start();
    $connection = mysqli_connect("localhost", "root","", "mysite");
    if ($connection == false)
    {
        echo "Не удалось подключиться к базе данных! <br>"; 
        echo mysqli_connect_error();
        exit();
    }
?>