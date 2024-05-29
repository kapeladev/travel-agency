<?php 
session_start();
if(isset($_SESSION['login'])){
    header('Location: ./pages/mainpage.php');
}
else{
include('./component/conn.php');
include('./pages/lockpage.php');
}
?>