<?php session_start();

unset($_SESSION['loggedin_status']);

header('Location:index.php');


?>