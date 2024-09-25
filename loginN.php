<!DOCTYPE html>
<html>
<head> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login | CIEL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="style.css">

    <script src="https://apis.google.com/js/platform.js" async defer></script>
</head>
<body>
  
<div class="back-button-container">
        <button class="back-button" onclick="goBack()">←</button>
    </div>

    <div class="d1">
        
        <form class="f1" 
              action="login/login.php" 
              method="post">

            <h1 class="form-title">LOGIN</h1><br>
            <?php if(isset($_GET['error'])){ ?>
            <div class="alert alert-danger" role="alert">
                <?php echo $_GET['error']; ?>
            </div>
            <?php } ?>
            
          <div class="d2">
            <i class="fas fa-user"></i>
            <label class="form-label">User name or e-mail</label>
            <input type="text" 
                   class="form-control" 
                   name="uname"
                   id="input"
                   value="<?php echo (isset($_GET['uname']))?$_GET['uname']:"" ?>">
                   

          </div>

          <div class="d2">
            <i class="fas fa-lock"></i>
            <label class="form-label">Password</label>
            <input type="password" 
                   class="form-control"
                   name="pass"
                   id="input">
          </div>
          
          <button type="submit" class="btn3">Login</button>
          
        </form>
		<div style="text-align: center;">
			<button class="btn4" style="width: 340px;">
				<a href="indexN.php" class="link-secondary">Sign Up</a>
			</button>
		</div>
    </div>
    <script src="script.js"></script>
</body>
</html>
