<?php
ob_start(); // Start output buffering
session_start();

if(isset($_POST['uname'], $_POST['pass'])){
    include "../db_connN.php";

    $uname = htmlspecialchars($_POST['uname']);
    $pass = htmlspecialchars($_POST['pass']);

    // Validate input
    if(empty($uname) || empty($pass)){
        $em = "User name and password are required";
        header("Location: ../loginN.php?error=$em");
        exit;
    }

    try {
        $sql = "SELECT * FROM users WHERE username = ?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$uname]);

        if($stmt->rowCount() == 1){
            $user = $stmt->fetch();

            $username =  $user['username'];
            $password =  $user['password'];
            $fname =  $user['fname'];
            $id =  $user['id'];
            $pp =  $user['pp'];

            if($username === $uname && password_verify($pass, $password)){
                $_SESSION['id'] = $id;
                $_SESSION['fname'] = $fname;
                $_SESSION['pp'] = $pp;

                header("Location: ../accounts.php");
                exit;
            } else {
                $em = "Incorrect User name or password";
                header("Location: ../loginN.php?error=$em");
                exit;
            }
        } else {
            $em = "Incorrect User name or password";
            header("Location: ../loginN.php?error=$em");
            exit;
        }
    } catch (PDOException $e) {
        $em = "PDO Error: " . $e->getMessage();
        header("Location: ../loginN.php?error=$em");
        exit;
    }
} else {
    header("Location: ../loginN.php?error=error");
    exit;
}

ob_end_flush(); // Flush output buffer
?>
