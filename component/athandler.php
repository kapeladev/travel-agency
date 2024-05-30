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
    
    $conn->query("INSERT INTO trips (id, name, countryid, townid, price, photo, duration, opis) VALUES ('$id','$name','$country','$town','$price','$photo','$duration','$about')");
    header('Location: ../index.php');
    
}

?>