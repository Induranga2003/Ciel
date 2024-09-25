<?php
include 'database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $product_id = $_POST['product_id'];
    $quantity = isset($_POST['quantity']) ? $_POST['quantity'] : 1;

    // Check if the item is already in the cart
    $sql = "SELECT id, quantity FROM cart_items WHERE product_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $product_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Item is already in the cart, update quantity
        $row = $result->fetch_assoc();
        $new_quantity = $row['quantity'] + $quantity;

        $update_sql = "UPDATE cart_items SET quantity = ? WHERE id = ?";
        $update_stmt = $conn->prepare($update_sql);
        $update_stmt->bind_param('ii', $new_quantity, $row['id']);
        $update_stmt->execute();
        $update_stmt->close();
    } else {
        // Item is not in the cart, insert new item
        $insert_sql = "INSERT INTO cart_items (product_id, quantity) VALUES (?, ?)";
        $insert_stmt = $conn->prepare($insert_sql);
        $insert_stmt->bind_param('ii', $product_id, $quantity);
        $insert_stmt->execute();
        $insert_stmt->close();
    }

    $stmt->close();
    $conn->close();

    // Redirect back to the shop page or cart page
    header("Location: cart.php");
}
?>
