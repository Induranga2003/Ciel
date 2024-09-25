<?php
include 'database.php';

if ($conn->connect_error) {
    die('<script>alert("Connection failed: ' . addslashes($conn->connect_error) . '"); window.location.assign("shop.html");</script>');
}

// Check if the GET request has 'id'
if (isset($_GET['id'])) {
    $product_id = intval($_GET['id']);

    // Input validation
    if (empty($product_id)) {
        echo '<script>alert("Invalid product ID"); window.location.assign("shop.html");</script>';
        exit();
    }

    // Use prepared statements to prevent SQL injection
    $stmt = $conn->prepare("INSERT INTO wishlist_items (product_id) VALUES (?)");
    if ($stmt === false) {
        echo '<script>alert("Prepare failed: ' . addslashes($conn->error) . '"); window.location.assign("shop.html");</script>';
        exit();
    }
    
    $stmt->bind_param("i", $product_id);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        echo '<script>alert("Item added to wishlist"); window.location.assign("shop.html");</script>';
    } else {
        echo '<script>alert("Insert failed: ' . addslashes($stmt->error) . '"); window.location.assign("shop.html");</script>';
    }

    $stmt->close();
} else {
    echo '<script>alert("No product ID received"); window.location.assign("shop.html");</script>';
}

$conn->close();
?>
