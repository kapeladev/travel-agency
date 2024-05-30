<?php 
function dbconnect(){
    $conn = mysqli_connect('localhost', 'root', '','travelsite');
    if($conn->connect_error){
        die;
    }
    return $conn;
}
