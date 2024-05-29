<?php 
session_start();
require('conn.php');
$conn = dbconnect();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $login = $_POST['login'];
    $email = $_POST['email'];
    $password =  sha1($_POST['password']);

    $res = $conn->query("SELECT login,password FROM users WHERE password = '$password' AND login = '$login' ");
    if($res->num_rows > 0){
        echo "zalogowano na ".$login;
        $_SESSION['login'] = $login;
    }
    else{
        header("Location ../login.php");
    }
    
    header("Location: ../index.php");
}