<?php
ob_start(); // Start output buffering

if (isset($_POST['fname']) && isset($_POST['uname']) && isset($_POST['pass']) && isset($_POST['email'])) {

    include "../db_connN.php";  // Include your database connection script

    $fname = $_POST['fname'];
    $uname = $_POST['uname'];
    $pass = $_POST['pass'];
    $email = $_POST['email'];  // Assuming this matches the name attribute in your HTML form

    // Validate input
    if (empty($fname) || empty($uname) || empty($pass) || empty($email)) {
        $em = "All fields are required";
        header("Location: ../indexN.php?error=$em");
        exit;
    }

    // Hash the password
    $pass = password_hash($pass, PASSWORD_DEFAULT);

    // Handle file upload if a profile picture is uploaded
    if (isset($_FILES['pp']['name']) && !empty($_FILES['pp']['name'])) {
        $img_name = $_FILES['pp']['name'];
        $tmp_name = $_FILES['pp']['tmp_name'];
        $error = $_FILES['pp']['error'];

        if ($error === 0) {
            $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
            $img_ex_to_lc = strtolower($img_ex);

            $allowed_exs = array('jpg', 'jpeg', 'png');
            if (in_array($img_ex_to_lc, $allowed_exs)) {
                $new_img_name = uniqid($uname, true) . '.' . $img_ex_to_lc;
                $img_upload_path = '../upload/' . $new_img_name;

                if (move_uploaded_file($tmp_name, $img_upload_path)) {
                    try {
                        // Insert into Database using PDO
                        $sql = "INSERT INTO users (fname, username, password, email, pp) VALUES (?, ?, ?, ?, ?)";
                        $stmt = $conn->prepare($sql);
                        $stmt->execute([$fname, $uname, $pass, $email, $new_img_name]);

                        header("Location: ../indexN.php?success=Your account has been created successfully");
                        exit;
                    } catch (PDOException $e) {
                        $em = "PDO Error: " . $e->getMessage();
                        header("Location: ../indexN.php?error=$em");
                        exit;
                    }
                } else {
                    $em = "Failed to upload image";
                    header("Location: ../indexN.php?error=$em");
                    exit;
                }
            } else {
                $em = "You can't upload files of this type";
                header("Location: ../indexN.php?error=$em");
                exit;
            }
        } else {
            $em = "Unknown error occurred!";
            header("Location: ../indexN.php?error=$em");
            exit;
        }
    } else {
        // If no profile picture is uploaded
        try {
            // Insert into Database using PDO
            $sql = "INSERT INTO users (fname, username, password, email) VALUES (?, ?, ?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->execute([$fname, $uname, $pass, $email]);

            header("Location: ../indexN.php?success=Your account has been created successfully");
            exit;
        } catch (PDOException $e) {
            $em = "PDO Error: " . $e->getMessage();
            header("Location: ../indexN.php?error=$em");
            exit;
        }
    }

} else {
    header("Location: ../indexN.php?error=Error");
    exit;
}

ob_end_flush(); // Flush output buffer and send output to browser
?>
