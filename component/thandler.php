<?php
require('conn.php');
$conn = dbconnect();

$res = $conn->query('SELECT * FROM trips');
if ($res->num_rows > 0) {
    $trips = array();
    $count = 0;
    while ($row = $res->fetch_assoc()) {
        $trips[$count] = array(
            'countryid' => $row['countryid'],
            'name' => $row['name'],
            'townid' => $row['townid'],
            'price' => $row['price'],
            'photo' => base64_encode($row['photo']),
            'duration' => $row['duration'],
            'opis' => $row['opis']
        );
        $count++;
    }
        
    // Display the trips
    foreach ($trips as $trip) {
        if($trip['countryid'] == "1"){
            $trip['countryid'] = "Poland";
        }
        elseif($trip['countryid'] == "2"){
            $trip['countryid'] = "Germany";
        }
        elseif($trip['countryid'] == "3"){
            $trip['countryid'] = "Usa";
        }
        elseif($trip['countryid'] == "4"){
            $trip['countryid'] = "Mexico";
        }
        elseif($trip['countryid'] == "5"){
            $trip['countryid'] = "Cuba";
        }
        if($trip['townid'] == '1'){
            $trip['townid'] = "Warsaw";
        }
        elseif($trip['townid'] == '2'){
            $trip['townid'] = "Berlin";
        }
       
        elseif($trip['townid'] == '3'){
            $trip['townid'] = "Los Angeles";
        }
       
        elseif($trip['townid'] == '4'){
            $trip['townid'] = "Puebla";
        }
        elseif($trip['townid'] == '5'){
            $trip['townid'] = "Hawana";
        }
       
        echo "<div class='trip-container style='a'>";
        echo "<div class='trip-card'>";
        echo "<h2>{$trip['name']}</h2>";
        echo "<p>{$trip['price']}zł</p>";
        echo "<p>{$trip['countryid']}, {$trip['townid']}</p>";
        echo "<p>Duration: {$trip['duration']} Days</p>";
        echo "<img class='trip-img' src='data:image/jpg;base64,{$trip['photo']}' alt='Trip Photo' style=''>";
        echo "<p class='des'>Description: {$trip['opis']}</p>";
        echo "</div>"."</div>";
    
    }
} else {
    echo "No trips found.";
}
