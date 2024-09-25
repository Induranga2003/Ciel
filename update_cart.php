<?php
include 'database.php';
$data = json_decode(file_get_contents('php://input'), true);

$id = $data['id'];
$quantity = $data['quantity'];

$sql = "UPDATE cart_items SET quantity = ? WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('ii', $quantity, $id);
$stmt->execute();

$stmt->close();
$conn->close();

echo json_encode(["success" => true]);
?>
