<?php
ob_start(); 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['fname'])) {

include "db_connN.php";
include 'login/User.php';
$user = getUserById($_SESSION['id'], $conn);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link
      rel="stylesheet"
      href="https://cdn-uicons.flaticon.com/uicons-regular-straight/css/uicons-regular-straight.css"
    />

    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"
    />

    <link rel="stylesheet" href="assets/css/styles.css" />

    <title>CIEL</title>
  </head>

    <body>
    <?php if ($user) { ?>      
      <header class="header">
        <div class="header__top">
          <div class="header__container container">
            <div class="header__contact">
              <span>(+94) - 77 - 1234 - 5678</span>

              <span>Contact Us</span>
            </div>

            <p class="header__alert-news">
              Flash Sale - Enter using oupons
            </p>

            <!-- <a href="login-register.html" class="header__top-action">
              Sign In / Sign Up
            </a> -->
            <a href="loginN.php" class="header__top-action">
              Sign In / Sign Up</a>
          </div>
        </div>

        <nav class="nav container">
          <a href="index.html" class="nav__logo">
            <img src="assets/img/ciel-removebg.png" alt="" class="nav__logo-img" />
          </a>

          <div class="nav__menu" id="nav-menu">
            <div class="nav__menu-top">
              <a href="index.html" class="nav__menu-logo">
                <img src="assets/img/ciel-removebg.png" alt="" />
              </a>

              <div class="nav__close" id="nav-close">
                <i class="fi fi-rs-cross-small"></i>
              </div>
            </div>
            
            <ul class="nav__list">
              <li class="nav__item">
                <a href="index.html" class="nav__link">Home</a>
              </li>

              <li class="nav__item">
                <a href="shop.html" class="nav__link">Shop</a>
              </li>

              <li class="nav__item">
                <a href="accounts.php" class="nav__link  active-link">My Account</a>
              </li>

              <li class="nav__item">
                <a href="compare.html" class="nav__link">Compare</a>
              </li>

              <li class="nav__item">
                <a href="loginN.php" class="nav__link">Login</a>
              </li>
            </ul>

            <div class="header__search">
            <form action="search.php" method="GET">
            <input
              type="text"
              name="query"
              placeholder="Search for items..."
              class="form__input"
              autocomplete="on"
            />

            <button class="search__btn">
              <img src="assets/img/search.png" alt="" />
            </button>
            </form>
          </div>
        </div>

          <div class="header__user-actions">
            <a href="wishlist.php" class="header__action-btn">
              <img src="assets/img/heart icon.png" alt="" />
              <span class="count">1</span>
            </a>

            <a href="cart.php" class="header__action-btn">
              <img src="assets/img/cart-icon.png" alt="" />
              <span class="count">2</span>
            </a>

            <div class="header__action-btn nav__toggle" id="nav-toggle">
              <img src="assets/img/menu-burger.svg" alt="" />
            </div>
          </div>
        </nav>
      </header>

      
        <section class="breadcrumb">
          <ul class="breadcrumb__list flex container">
            <li><a href="index.html" class="breadcrumb__link">Home</a></li>
            <li><span class="breadcrumb__link">></span></li>
            <li><span class="breadcrumb__link">Account</span></li>
          </ul>
        </section>

      
        <section class="accounts section--lg">
          <div class="accounts__container container grid">
            <div class="account__tabs">
              <p class="account__tab active-tab" data-target="#dashboard">
                <i class="fi fi-rs-settings-sliders"></i> Dashboard
              </p>

              <p class="account__tab" data-target="#orders">
                <i class="fi fi-rs-shopping-bag"></i> Orders
              </p>

              <p class="account__tab" data-target="#update-profile">
                <i class="fi fi-rs-user"></i> Update Profile
              </p>

              <p class="account__tab" data-target="#address">
                <i class="fi fi-rs-marker"></i> My Address
              </p>

              <p class="account__tab" data-target="#change-password">
                <i class="fi fi-rs-user"></i> Change Password
              </p>

              <p class="account__tab"><i class="fi fi-rs-exit"></i><a href="logoutN.php" class="nav__link active-link">
              Logout</a></p>
            
            </div>

            <div class="tabs__content">
              <div class="tab__content active-tab" content id="dashboard">
                <h3 class="tab__header">Hello <?=$user['fname']?>:)</h3>

                <div class="tab__body">
                  
                <!-- pp upload -->

                <img src="upload/Nv6691269e3a8fe1.82786567.jpg" alt="img_dash"
                id="img_dash">

    		     <!-- class="img-fluid rounded-circle"
                 id="upload-form" -->

                 <!-- <img src="upload/<?=$user['pp']?>"
    		     class="img-fluid rounded-circle"
                 id="upload-form"> -->

                  <p class="tab__description">
                    
                    From your account dashboard. you can easily check & view your
                    recent orders, manage your shipping and billing addresses and
                    edit your password and account details.
                  </p>
  
                </div>
              </div>
              <!-- <div class="div_dash"> 
                
                // include "../login-signup-editprofile-updateNV-33038/login-signup-edit-logout-NV/home.php";
                ?> 
              </div> -->

              <div class="tab__content" content id="orders">
                <h3 class="tab__header">Your Orders</h3>

                <div class="tab__body">
                  <table class="placed__order-table">
                    <tr>
                      <th>Orders</th>
                      <th>Date</th>
                      <th>Status</th>
                      <th>Total</th>
                      <th>Actions</th>
                    </tr>

                    <tr>
                      <td>#1357</td>
                      <td>March 45, 2020</td>
                      <td>Processing</td>
                      <td>Rs.1550.00</td>
                      <td><a href="#" class="view__order">View</a></td>
                    </tr>

                    <tr>
                      <td>#12468</td>
                      <td>June 29, 2020</td>
                      <td>Completed</td>
                      <td>Rs.3640.00</td>
                      <td><a href="#" class="view__order">View</a></td>
                    </tr>

                    <tr>
                      <td>#1357</td>
                      <td>August 02, 2020</td>
                      <td>Completed</td>
                      <td>Rs.2800.00</td>
                      <td><a href="#" class="view__order">View</a></td>
                    </tr>
                  </table>
                </div>
              </div>

              <div class="tab__content" content id="update-profile">
                <h3 class="tab__header">Update Profile</h3>

                <!-- <div class="tab__body">
                  <form action="" class="form grid">
                    <input
                      type="text"
                      placeholder="Username"
                      class="form__input"
                    />

                    <div class="form__btn">
                      <button class="btn btn--md">Save</button>
                    </div>
                  </form>
                </div> -->




                <div class="d1" style="background: #fff; width: 450px; padding: 1.5rem; margin: 50px auto; border-radius: 10px; margin-top: 50px; box-shadow: 0 20px 35px rgba(0,0,1,0.9);">
    <form class="f1" action="login/edit.php" method="post" enctype="multipart/form-data" style="margin: 0 2rem;">
        <h1 class="form-title" style="font-size: 1.5rem; font-weight: bold; text-align: center; padding: 0.5rem; margin-bottom: 0.4rem;">Edit Profile</h1><br>
        
        <?php if(isset($_GET['error'])){ ?>
        <div class="alert alert-danger" role="alert" style="background-color: #f8d7da; color: #721c24; border-color: #f5c6cb; padding: .75rem 1.25rem; margin-bottom: 1rem; border: 1px solid transparent; border-radius: .25rem;">
            <?php echo $_GET['error']; ?>
        </div>
        <?php } ?>
        
        <?php if(isset($_GET['success'])){ ?>
        <div class="alert alert-success" role="alert" style="background-color: #d4edda; color: #155724; border-color: #c3e6cb; padding: .75rem 1.25rem; margin-bottom: 1rem; border: 1px solid transparent; border-radius: .25rem;">
            <?php echo $_GET['success']; ?>
        </div>
        <?php } ?>
        
        <div class="d2" style="padding: 1% 0; position: relative;">
            <label class="form-label" style="color: #757575; left: 1.2em; top: -1.3em; cursor: auto; transition: 0.3s ease all;">Full Name</label>
            <input type="text" class="form-control" name="fname" id="input" value="<?php echo $user['fname']?>" style="color: inherit; width: 100%; background-color: transparent; border: none; border-bottom: 1px solid #757575; padding-left: 1.5rem; font-size: 15px;" required>
        </div>

        <div class="d2" style="padding: 1% 0; position: relative;">
            <label class="form-label" style="color: #757575; left: 1.2em; top: -1.3em; cursor: auto; transition: 0.3s ease all;">User name</label>
            <input type="text" class="form-control" name="uname" id="input" value="<?php echo $user['username']?>" style="color: inherit; width: 100%; background-color: transparent; border: none; border-bottom: 1px solid #757575; padding-left: 1.5rem; font-size: 15px;" required>
        </div>

        <div class="d2" style="padding: 1% 0; position: relative;">
            <label class="form-label" style="color: #757575; left: 1.2em; top: -1.3em; cursor: auto; transition: 0.3s ease all;">Profile Picture</label>
            <input type="file" class="form-control" name="pp" style="color: inherit; width: 100%; background-color: transparent; border: none; margin-top: 5px;" accept="image/*">
            <img src="/upload<?=$user['pp']?>" class="rounded-circle" style="width: 70px; margin-top: 10px; margin-bottom: 10px; margin-left: 130px;">
            <input type="text" hidden="hidden" name="old_pp" value="<?=$user['pp']?>">
        </div>
          
        <button type="submit" class="btn3" style="font-size: 1.1rem; padding: 8px 0; border-radius: 5px; outline: none; border: none; width: 100%; background: hsla(204, 73%, 61%, 0.896); color: white; cursor: pointer; transition: 0.9s;">Update</button>
    </form>
</div>










              </div>

              <div class="tab__content" content id="address">
                <h3 class="tab__header">Shipping Address</h3>

                <div class="tab__body">
                  <address class="address">
                    1079-1081 <br />
                    Maradana Road, <br />
                    Colombo <br />
                  </address>
                  <p class="city">Colombo</p>
                  <a href="" class="edit">Edit</a>
                </div>
              </div>

              <div class="tab__content" content id="change-password">
                <h3 class="tab__header">Change Password</h3>

                <div class="tab__body">
                  <form action="" class="form grid">
                    <input
                      type="password"
                      placeholder="Current Password"
                      class="form__input"
                    />

                    <input
                      type="password"
                      placeholder="New Password"
                      class="form__input"
                    />

                    <input
                      type="password"
                      placeholder="Confirm Password"
                      class="form__input"
                    />

                    <div class="form__btn">
                      <button class="btn btn--md">Save</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </section>

        <section class="newsletter section">
          <div class="newsletter__container container grid">
            <h3 class="newsletter__title flex">
              <img
                src="assets/img/icon-email.svg"
                alt=""
                class="newsletter__icon"
              />
              Sign up to Newsletter
            </h3>

            <p class="newsletter__description">
              ...and receive Rs.1000 coupon for first shopping.
            </p>

            <form action="" class="newsletter__form">
              <input
                type="text"
                placeholder="Enter your email"
                class="newsletter__input"
              />
              <button type="submit" class="newsletter__btn">Subscribe</button>
            </form>
          </div>
        </section>
      </main>

      
      <footer class="footer container">
        <div class="footer__container grid">
          <div class="footer__content">
            <a href="index.html" class="footer__logo">
              <img src="assets/img/ciel-removebg.png" alt="" class="footer__logo-img" />
            </a>

            <h4 class="footer__subtitle">Contact</h4>

            <p class="footer__description">
              <span>Address:</span> 1079-1081 Maradana Road, Colombo
            </p>

            <p class="footer__description">
              <span>Phone:</span> +94 112 345 678 / 0115 875 961
            </p>

            <p class="footer__description">
              <span>Hours:</span> 09:00 - 19:00, Mon - Sat
            </p>

            <div class="footer__social">
              <h4 class="footer__subtitle">Follow Me</h4>

              <div class="footer__social-links flex">
                <a href="">
                  <img
                    src="assets/img/icon-facebook.svg"
                    alt=""
                    class="footer__social-icon"
                  />
                </a>

                <a href="">
                  <img
                    src="assets/img/icon-twitter.svg"
                    alt=""
                    class="footer__social-icon"
                  />
                </a>

                <a href="">
                  <img
                    src="assets/img/icon-instagram.svg"
                    alt=""
                    class="footer__social-icon"
                  />
                </a>

                <a href="">
                  <img
                    src="assets/img/icon-pinterest.svg"
                    alt=""
                    class="footer__social-icon"
                  />
                </a>

                <a href="">
                  <img
                    src="assets/img/icon-youtube.svg"
                    alt=""
                    class="footer__social-icon"
                  />
                </a>
              </div>
            </div>
          </div>

          <div class="footer__content">
            <h3 class="footer__title">Address</h3>

            <ul class="footer__links">
              <li><a href="aboutus.html" class="footer__link">About Us</a></li>
              <li><a href="delInfo.html" class="footer__link">Delivery Information</a></li>
              <li><a href="privacypolicy.html" class="footer__link">Privacy Policy</a></li>
              <li><a href="terms.html" class="footer__link">Terms & Conditions</a></li>
              <li><a href="contact.html" class="footer__link">Contact Us</a></li>
              
            </ul>
          </div>

          <div class="footer__content">
            <h3 class="footer__title">My Account</h3>

            <ul class="footer__links">
              <li><a href="loginN.php" class="footer__link">Sign In</a></li>
              <li><a href="cart.php" class="footer__link">View Cart</a></li>
              <li><a href="wishlist.php" class="footer__link">My Wishlist</a></li>
              <li><a href="accounts.php" class="footer__link">Track My Order</a></li>
              <li><a href="helpcenter.html" class="footer__link">Help</a></li>
              
            </ul>
          </div>

          <div class="footer__content">
            <h3 class="footer__title">Secured Payment Gateways</h3>

            <img
              src="assets/img/payment-method.png"
              alt=""
              class="payment__img"
            />
          </div>
        </div>

        <div class="footer__bottom">
          <p class="copyright">&copy; 2024 CIEL. All rights reserved</p>
          <span class="designer">Designed by Group 30</span>
        </div>
      </footer>

    
      <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

      <script src="assets/js/script.js"></script>
      <?php }else { 
     header("Location: loginN.php");
     exit;
    } ?>

    </body>
</html>


<?php }else {
	header("Location: loginN.php");
	exit;
} 
ob_end_flush(); // Flush output buffer
?>

