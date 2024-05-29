<?php 
function dbconnect(){
    $conn = mysqli_connect('localhost', 'root', 'P@$$w0rd','travelsite');
    if($conn->connect_error){
        die;
    }
    return $conn;
}
