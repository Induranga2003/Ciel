<?php
include "database.php";

$delId = $_GET["id"];

if ($stmt = $conn->prepare("DELETE FROM wishlist_items WHERE product_id = ?")) {
    $stmt->bind_param("i", $delId); // Bind the parameter as an integer
    $stmt->execute();
    $stmt->close();
}

echo '<script>alert("Item deleted from wishlist"); window.location.assign("wishlist.php");</script>';
?>
