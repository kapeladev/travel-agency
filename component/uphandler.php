<?php 
include('conn.php');
$conn = dbconnect();
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $country = $_POST['country'];
    $town = $_POST['town'];
    $price = $_POST['price'];
    $photo = $_POST['photo'];
    $duration = $_POST['duration'];
    $about = $_POST['about'];
    
    $conn->query("UPDATE trips SET name='$name', countryid='$country', townid='$town', price='$price', photo='$photo', duration='$duration', opis='$about' WHERE id='$id'");
    header('Location: ../index.php');
    
}

?>