<?php
include 'database.php';
$data = json_decode(file_get_contents('php://input'), true);

$id = $data['id'];

$sql = "DELETE FROM cart_items WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('i', $id);
$stmt->execute();

$stmt->close();
$conn->close();

echo json_encode(["success" => true]);
?>
