<?php
session_start();
if(!isset($_SESSION['id'])){
    header('Location:login.php');
}
//print_r($_SESSION);
?>
<a href="logout.php">logout</a>