<?php include("..\includes/connection.php");?>
<?php
unset($_SESSION['user']);
header('Location: ..\main/index.php');
?>