<?php
$servername = "localhost:3315";
$username = "root";
$password = "";
$dbname = "auth_db";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // Set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connected successfully";
} catch(PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>
