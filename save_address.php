<?php
require "database.php";

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


// Get form data
$country = $_POST['country'];
$city = $_POST['city'];
$state = $_POST['state'];
$zip = $_POST['zip'];

if(empty($country)){
    echo "Please enter a country";
}else if(empty($city)){
    echo "Please enter a city";
}else if(empty($state)){
    echo "Please enter a state";
}else if(empty($state)){
    echo "Please enter a zip code";
}else if(empty($zip)){
    echo "Please enter a zip code";
}else{
// Prepare and bind
$stmt = $conn->prepare("INSERT INTO addresses (country, city, state, zip) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $country, $city, $state, $zip);

// Execute the statement
if ($stmt->execute()) {
    echo "success";
} else {
    echo "Error: " . $stmt->error;
}

// Close connections
$stmt->close();
$conn->close();
}


?>
