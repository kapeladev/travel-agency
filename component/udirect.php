<?php 
session_start();
echo $_SESSION['login'];
if($_SESSION['login'] == 'admin'){
    header("Location: ../pages/adminpage.php");
}
elseif (isset($_SESSION['login'])) {
    header("Location: ../pages/userpage.php");
}
else{
    header("Location: ../index.php");
}