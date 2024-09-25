<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['fname'])) {

include "db_connN.php";
include 'login/User.php';
$user = getUserById($_SESSION['id'], $conn);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home | CIEL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<!-- <button class="back_btn"><a href="../website/login-register.html"><</a></button> -->
    <?php if ($user) { ?>
    <div class="d1">
    	
    	<div class="d2">
    		<img src="upload/<?=$user['pp']?>"
    		     class="img-fluid rounded-circle"
                 id="img1">
            <h3 class="h1"><?=$user['fname']?></h3>
            <button type="submit" class="btn5">
                <a href="editN.php" class="btn btn-primary">
            	Edit Profile
            </a>
        </button>
            <button type="submit" class="btn6">
                <a href="logoutN.php" class="btn btn-warning">
                Logout
            </a>
        </button>
		</div>
    </div>
    <?php }else { 
     header("Location: loginN.php");
     exit;
    } ?>
</body>
</html>

<?php }else {
	header("Location: loginN.php");
	exit;
} ?>