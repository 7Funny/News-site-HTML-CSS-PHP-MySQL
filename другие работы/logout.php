<?php
session_start();
unset($_SESSION['user']);
header('Location: ..\main/index.php');