<!DOCTYPE html>
<html>
    <head>
        <title>Sign up|CIEL</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>

    <div class="back-button-container">
        <button class="back-button" onclick="goBack()">←</button>
    </div>
    
           <div class="d1">
            <form class="f1"
              action="login/signup.php" 
              method="post"
              enctype="multipart/form-data">

                <h1 class="form-title">Create Account</h1><br>
                <?php if(isset($_GET['error'])){ ?>
                <div class="alert alert-danger" role="alert">
                  <?php echo $_GET['error']; ?>
                </div>
                <?php } ?>

                <?php if(isset($_GET['success'])){ ?>
                  <div class="alert alert-success" role="alert">
                    <?php echo $_GET['success']; ?>
                  </div>
                  <?php } ?>
              
                  <div class="d2">
                      <i class="fas fa-user"></i>
                      <label class="form-label">Full Name</label>
                      <input type="text" 
                            class="form-control"
                            name="fname"
                            id="input"
                            placeholder="Full Name" 
                            value="<?php echo (isset($_GET['fname']))?$_GET['fname']:"" ?>">
                    </div>
                    <div class="d2">
                      <i class="fas fa-user"></i>
                      <label class="form-label">User name</label>
                      <input type="text" 
                            class="form-control"
                            name="uname"
                            id="input"
                            value="<?php echo (isset($_GET['uname']))?$_GET['uname']:"" ?>">
                    </div>
          
                    <div class="d2">
                        <i class="fas fa-envelope"></i>
                        <label class="form-label">E-mail</label>
                        <input type="text" 
                              class="form-control"
                              name="email"
                              id="input"
                              value="<?php echo (isset($_GET['email'])) ? $_GET['email'] : "" ?>">
                    </div>

          
                    <div class="d2">
                      <i class="fas fa-lock"></i>
                      <label class="form-label">Password</label>
                      <input type="password" 
                            class="form-control"
                            name="pass"
                            id="input">
                    </div>
          
                    <div class="d2">
                      <label class="form-label">Profile Picture</label>
                      <input type="file" 
                            class="form-control"
                            name="pp"
                            id="inputpp">
                    </div>

                    <!-- <div class="d2"> -->
                    <p class="recover">
                      <a href="accounts.php">Recover Password</a>
                    </p>
                    <!-- </div> -->

              <p class="or">
                  ----------or--------
                </p>
                <div class="icons">
                  <a href="https://accounts.google.com/v3/signin/identifier?opparams=%253Flocale%253Den_US&dsh=S973348582%3A1720947029645603&client_id=510718330363-s8203tpcr3unvq2n580hoke0590m6rd8.apps.googleusercontent.com&ddm=0&o2v=2&redirect_uri=https%3A%2F%2Fsignin.ebay.com%2Fsignin%2Fggl%2Fcb&response_type=code&scope=openid+email+profile&service=lso&state=dl4xLjEjaV4xI2ZeMCNwXjEjSV4zI3JeMSN0XlVsNDFYemc2TWtaRVJqSXhSVVExTlRjelJFRTFRVUkwUTBKRlJEbEVNVFV3TURneU1qbGZNVjh4STBWZU1qWXc%3D%7C%7CAQAJAAAAUKXnAXFO_1KI4a1RqK2_eVTLroviDJxDQ8bPtE7iGgKC1LuHkiQM457eNqdvob187R7lCDH3zTnPQneGfUXDYTuoHR8aZ6bXgP9hUiRngPYM&flowName=GeneralOAuthFlow&continue=https%3A%2F%2Faccounts.google.com%2Fsignin%2Foauth%2Fconsent%3Fauthuser%3Dunknown%26part%3DAJi8hAM3ctoM_TIjBoIma-RYOAEn9IQLFWf4AprI7bLneMiYFJ0S6GOvHmtzYz6f7MprSg8ymfKV21jDStMqw9WXrZzdl6_OBer6rOfUTuFHj3ZPjP-iBjBoY_Q_5pcJEd37l5pg9ql0kL-aVq5lmNZorw7yLfBuYi9_ZzHoWUHehv8df5wDaDd-DjLSaSjE8lU4VQOZqGz9cQPQGGZE5KavWSEAoDFiPD6Z96yUfYL5UiQbb6c_euOxAv8nuDbgYGHD7oHoh8cUPy7ztd5VfEddOo8cO8_9Ut5C6cljYsIOyxemQk3o1TB3Itc4RZNhUFrcBa2FFKpntHARqJdPMcr6hxBgXX2gT_hRENUiCBQxH49QwqTtN4ADdclkcN1xwWkIxJtKEcyNYFKhVvpD7Eu0TKkwfyioVwKKd13O3zFj7GR4fWMPl4g927JfPPKvFEhSDTfgS4fYbLiipX0DqORQhG25a66YIA%26flowName%3DGeneralOAuthFlow%26as%3DS973348582%253A1720947029645603%26client_id%3D510718330363-s8203tpcr3unvq2n580hoke0590m6rd8.apps.googleusercontent.com%23&app_domain=https%3A%2F%2Fsignin.ebay.com&rart=ANgoxcc5XZ37BkaRY9fGm5EDRaJrS7JEj72W1PgMICar2uxRWaOUcSZbo7ExjkjS6cqzqFY9ADOKaXqU3lt52Wwltlt_svBA13cgDo7GrQFxbbnhEK350Mk">
                  <i class="fab fa-google"></i></a>
                  <a href="https://web.facebook.com/login.php?skip_api_login=1&api_key=159693524730858&kid_directed_site=0&app_id=159693524730858&signed_next=1&next=https%3A%2F%2Fweb.facebook.com%2Fdialog%2Foauth%3Flocale%3Den_US%26client_id%3D159693524730858%26scope%3Demail%26redirect_uri%3Dhttps%253A%252F%252Fsignin.ebay.com%252Fsignin%252Ffb%252Fcb%26state%3Ddl4xLjEjaV4xI3BeMSNmXjAjSV4zI3JeMSN0XlVsNDFYekV4T2pNNU1USTJRelZGUmpjd1JVRTRPVFJHTVVJelJqUTBOVEZHT0RjNE1ERXlYekZmTVNORlhqSTJNQT09%257C%257CAQAJAAAAUKXnAXFO_1KI4a1RqK2_eVTLroviDJxDQ8bPtE7iGgKC5WZ0X9gaHzI-Lo66Q27Lh2HgdqBuIHBnPfHJ_nCGdI4wKDioflqEQNFKYlrEA-lT%26ret%3Dlogin%26fbapp_pres%3D0%26logger_id%3D2972e814-0285-41f9-9a55-1cda2fe146c0%26tp%3Dunspecified&cancel_url=https%3A%2F%2Fsignin.ebay.com%2Fsignin%2Ffb%2Fcb%3Ferror%3Daccess_denied%26error_code%3D200%26error_description%3DPermissions%2Berror%26error_reason%3Duser_denied%26state%3Ddl4xLjEjaV4xI3BeMSNmXjAjSV4zI3JeMSN0XlVsNDFYekV4T2pNNU1USTJRelZGUmpjd1JVRTRPVFJHTVVJelJqUTBOVEZHT0RjNE1ERXlYekZmTVNORlhqSTJNQT09%257C%257CAQAJAAAAUKXnAXFO_1KI4a1RqK2_eVTLroviDJxDQ8bPtE7iGgKC5WZ0X9gaHzI-Lo66Q27Lh2HgdqBuIHBnPfHJ_nCGdI4wKDioflqEQNFKYlrEA-lT%23_%3D_&display=page&locale=en_GB&pl_dbl=00">
                  <i class="fab fa-facebook"></i></a>
                </div>
                <div class="links">
                  <!-- <p>Don't have account yet?</p> -->
                  <!-- <ol class="ol1"> -->
                    <!-- <li class="li1"> -->
                      <button type="submit" class="btn1">Sign Up</button>
                    <!-- </li> -->
                    <!-- <li class="li1"> -->

                    <!-- </li> -->
                  <!-- </ol> -->
           </form>
           <button class="btn2"><a href="loginN.php" class="link-secondary">
           Login</a></button>
    </div>
    
    <script src="script.js"></script>
    </body>
</html>