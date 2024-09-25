<?php
session_start();
$servername = "localhost:3315";
$username = "root"; 
$password = ""; 
$dbname = "ciel_ecommerce"; 


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$product_id = isset($_GET['id']) ? intval($_GET['id']) : 1;


$sql = "SELECT id, product_name, brand, price,old_price,percentage, description, image,hover, tags, availability FROM product_db WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $product_id);
$stmt->execute();
$result = $stmt->get_result();


if ($result->num_rows > 0) {
    $product_data = $result->fetch_assoc();
} else {
    echo "No product found";
    $product_data = null;
}

$stmt->close();
$conn->close();
?>