<?php
include 'database.php';

$sql = "SELECT ci.id, p.name, p.description, p.price, p.image, ci.quantity, (p.price * ci.quantity) as subtotal 
        FROM cart_items ci 
        JOIN product_db p ON ci.product_id = p.id";
$result = $conn->query($sql);

$items = [];
$subtotal = 0;

while ($row = $result->fetch_assoc()) {
    $items[] = $row;
    $subtotal += $row['subtotal'];
}

$total = $subtotal + 2000; // Assuming shipping cost is Rs.2000

echo json_encode([
    "items" => $items,
    "subtotal" => $subtotal,
    "total" => $total
]);

$conn->close();
?>
