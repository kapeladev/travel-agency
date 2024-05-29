<?php 
require('conn.php');
$conn = dbconnect();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $login = $_POST['login'];
    $email = $_POST['email'];
    $password =  sha1($_POST['password']);

    $conn->query("INSERT INTO users (login, email, password) VALUES ('$login','$email', '$password' )");
    header("Location: ../index.php");
}