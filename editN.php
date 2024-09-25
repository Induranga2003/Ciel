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
	<title>Edit Profile</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <link rel="stylesheet" href="style.css">
</head>
<body>
<button class="back_btn"><</button>
    <?php if ($user) { ?>

    <div class="d1">
        
        <form class="f1" 
              action="login/edit.php" 
              method="post"
              enctype="multipart/form-data">

            <h1 class="form-title">Edit Profile</h1><br>
            <!-- error -->
            <?php if(isset($_GET['error'])){ ?>
            <div class="alert alert-danger" role="alert">
              <?php echo $_GET['error']; ?>
            </div>
            <?php } ?>
            
            <!-- success -->
            <?php if(isset($_GET['success'])){ ?>
            <div class="alert alert-success" role="alert">
              <?php echo $_GET['success']; ?>
            </div>
            <?php } ?>
          <div class="d2">
            <label class="form-label">Full Name</label>
            <input type="text" 
                   class="form-control"
                   name="fname"
                   id="input"
                   value="<?php echo $user['fname']?>">
          </div>

          <div class="d2">
            <label class="form-label">User name</label>
            <input type="text" 
                   class="form-control"
                   name="uname"
                   id="input"
                   value="<?php echo $user['username']?>">
          </div>

          <div class="d2">
            <label class="form-label">Profile Picture</label>
            <input type="file" 
                   class="form-control"
                   name="pp">
            <img src="upload/<?=$user['pp']?>"
                 class="rounded-circle"
                 style="width: 70px"
                 id="img2">
            <input type="text"
                   hidden="hidden" 
                   name="old_pp"
                   value="<?=$user['pp']?>">
          </div>
          
          <button type="submit" class="btn3">Update</button>
          <button type="submit" class="btn4"><a href="" class="link-secondary">
            Home</a></button>
        </form>
    </div>
    <?php }else{ 
        header("Location: homeN.php");
        exit;

    } ?>
</body>
</html>

<?php }else {
	header("Location: loginN.php");
	exit;
} ?>