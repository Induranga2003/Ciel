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
    
    <header class="header">
      <div class="header__top">
        <div class="header__container container">
          <div class="header__contact">
            <span>(+94) - 77 - 1234 - 5678</span>

            <span> Contact Us</span>
          </div>

          <p class="header__alert-news">
            Flash Sale - Enter using oupons
          </p>

          <a href="loginN.php" class="header__top-action">
            Sign In / Sign Up
          </a>
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
              <a href="accounts.php" class="nav__link">My Account</a>
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

   
    <main class="main">
      
      <section class="breadcrumb">
        <ul class="breadcrumb__list flex container">
          <li><a href="index.html" class="breadcrumb__link">Home</a></li>
          <li><span class="breadcrumb__link">></span></li>
          <li><span class="breadcrumb__link">Shop</span></li>
          <li><span class="breadcrumb__link">></span></li>
          <li><span class="breadcrumb__link">Wishlist</span></li>
        </ul>
      </section>

      
      <section class="wishlist section--lg container">
        <div class="table__container">
          <table class="table">
            <tr>
              <th>Image</th>
              <th>Name</th>
              <th>Price</th>
              <th>Stock Status</th>
              <th>Action</th>
              <th>Remove</th>
            </tr>
<?php 

include 'database.php'; // Include your database connection file

$sql = "SELECT * FROM wishlist_items"; // Adjust table name as needed
$result = mysqli_query($conn, $sql);
$num1 = $result->num_rows;
for($x=0; $x <$num1; $x++){
$d = $result->fetch_assoc();
$pid = $d["product_id"];

$rs = "SELECT * FROM product_db WHERE id = '".$pid."' " ;
$result2 = mysqli_query($conn, $rs);
$num = $result2->num_rows;

for($i=0; $i < $num; $i++){
  $items = $result2->fetch_assoc();



?>
            <tr>
              <td>
                <img
                  src="<?php echo($items['image']) ?>"
                  alt=""
                  class="table__img"
                />
              </td>

              <td>
                <h3 class="table__title">
                <?php echo($items['product_name']) ?>
                </h3>
                <p class="table__description">
                <?php echo($items['description']) ?>                </p>
              </td>

              <td><span class="table__price"><?php echo($items['price']) ?></span></td>

              <td><span class="table__stock"><?php echo($items['availability']) ?></span></td>

              <td><a href="" class="btn btn btn--sm">Add to Cart</a></td>

              <td><a href="deleteWishlist.php?id=<?php echo($items['id']) ?>"><i class="fi fi-rs-trash table__trash"></i></a></td>
            </tr>
            <?php
}}
            ?>

            <!-- <tr>
              <td>
                <img
                  src="assets/img/product-7-1.jpg"
                  alt=""
                  class="table__img"
                />
              </td>

              <td>
                <h3 class="table__title">Amazon Essentials Women's Tank</h3>
                <p class="table__description">
                  Maboriosam in a tonto nesciung eget distingy magndapibus.
                </p>
              </td>

              <td><span class="table__price">Rs.3490</span></td>

              <td><span class="table__stock">In Stock</span></td>

              <td><a href="" class="btn btn btn--sm">Add to Cart</a></td>

              <td><i class="fi fi-rs-trash table__trash"></i></td>
            </tr>

            <tr>
              <td>
                <img
                  src="assets/img/product-2-1.jpg"
                  alt=""
                  class="table__img"
                />
              </td>

              <td>
                <h3 class="table__title">
                  Amazon Brand - Daily Ritual Women's Jersey
                </h3>
                <p class="table__description">
                  Maboriosam in a tonto nesciung eget distingy magndapibus.
                </p>
              </td>

              <td><span class="table__price">Rs.3490</span></td>

              <td><span class="table__stock">In Stock</span></td>

              <td><a href="" class="btn btn btn--sm">Add to Cart</a></td>

              <td><i class="fi fi-rs-trash table__trash"></i></td>
            </tr> -->
          </table>
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
            <span>Address:</span> 079-1081 Maradana Road, Colombo
          </p>

          <p class="footer__description">
            <span>Phone:</span> (+94) 112 345 678 /(+94) 01 2345 6789
          </p>

          <p class="footer__description">
            <span>Hours:</span> 08:00 - 19:00, Mon - Sat
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
            <li><a href="login.php" class="footer__link">Sign In</a></li>
            <li><a href="cart.php" class="footer__link">View Cart</a></li>
            <li><a href="wishlist.php" class="footer__link">My Wishlist</a></li>
            <li><a href="accounts.html" class="footer__link">Track My Order</a></li>
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
    <script src="assets/js/search.js"></script>
  </body>
</html>
