<?php
require 'database.php'; 

$card_number = $_POST['card_number'] ?? '';
$cardholder_name = $_POST['cardholder_name'] ?? '';
$expiry_month = $_POST['expiry_month'] ?? '';
$expiry_year = $_POST['expiry_year'] ?? '';
$cvv = $_POST['cvv'] ?? '';
$save_details = isset($_POST['save_details']) ? 1 : 0;

$card_number = $conn->real_escape_string($card_number);
$cardholder_name = $conn->real_escape_string($cardholder_name);
$expiry_month = (int)$expiry_month;
$expiry_year = (int)$expiry_year;
$cvv = $conn->real_escape_string($cvv);

if ($save_details) {
    $sql = "INSERT INTO saved_cards (card_number, cardholder_name, expiry_month, expiry_year, cvv) VALUES ('$card_number', '$cardholder_name', '$expiry_month', '$expiry_year', '$cvv')";
    if ($conn->query($sql) === TRUE) {
        echo "<script>
                window.alert('Card details saved successfully. Thank you, your payment has been processed.');
               
              </script>";
    } else {
        die("Error saving card details: " . $conn->error);
    }
} else {
    echo "<script>
            window.alert('Thank you, your payment has been processed.');
           
          </script>";
}

$conn->close();
?>
