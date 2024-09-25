<?php
include 'database.php';

// Function to fetch cart items from database
function fetchCartItems($conn) {
    $sql = "SELECT cart_items.id, product_db.product_name, product_db.description, product_db.price, product_db.image, cart_items.quantity, (product_db.price * cart_items.quantity) AS subtotal 
            FROM cart_items 
            INNER JOIN product_db ON cart_items.product_id = product_db.id;";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        return $result->fetch_all(MYSQLI_ASSOC);
    } else {
        return [];
    }
}

// Function to calculate cart totals
function calculateCartTotals($items) {
    $subtotal = 0;

    foreach ($items as $item) {
        $subtotal += $item['subtotal'];
    }

    return [
        'subtotal' => $subtotal,
        'total' => $subtotal, // Placeholder for shipping and other fees
    ];
}

// Handle form submissions (add to cart, update quantity, remove item)
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['action'])) {
        switch ($_POST['action']) {
            case 'add':
                $product_id = $_POST['product_id'];
                $quantity = isset($_POST['quantity']) ? $_POST['quantity'] : 1;

                // Check if the item is already in the cart
                $sql_check = "SELECT id, quantity FROM cart_items WHERE product_id = ?";
                $stmt_check = $conn->prepare($sql_check);
                $stmt_check->bind_param('i', $product_id);
                $stmt_check->execute();
                $result_check = $stmt_check->get_result();

                if ($result_check->num_rows > 0) {
                    // Item is already in the cart, update quantity
                    $row = $result_check->fetch_assoc();
                    $new_quantity = $row['quantity'] + $quantity;

                    $update_sql = "UPDATE cart_items SET quantity = ? WHERE id = ?";
                    $update_stmt = $conn->prepare($update_sql);
                    $update_stmt->bind_param('ii', $new_quantity, $row['id']);
                    $update_stmt->execute();
                    $update_stmt->close();
                } else {
                    // Item is not in the cart, insert new item
                    $insert_sql = "INSERT INTO cart_items (product_id, quantity) VALUES (?, ?)";
                    $insert_stmt = $conn->prepare($insert_sql);
                    $insert_stmt->bind_param('ii', $product_id, $quantity);
                    $insert_stmt->execute();
                    $insert_stmt->close();
                }

                $stmt_check->close();
                break;

            case 'update':
                $item_id = $_POST['item_id'];
                $quantity = $_POST['quantity'];

                // Update quantity for the item in cart
                $update_sql = "UPDATE cart_items SET quantity = ? WHERE id = ?";
                $update_stmt = $conn->prepare($update_sql);
                $update_stmt->bind_param('ii', $quantity, $item_id);
                $update_stmt->execute();
                $update_stmt->close();
                break;

            case 'remove':
                $item_id = $_POST['item_id'];

                // Remove item from cart
                $delete_sql = "DELETE FROM cart_items WHERE id = ?";
                $delete_stmt = $conn->prepare($delete_sql);
                $delete_stmt->bind_param('i', $item_id);
                $delete_stmt->execute();
                $delete_stmt->close();
                break;

            default:
                // Handle other actions if needed
                break;
        }
    }
}

// Fetch cart items and totals
$cart_items = fetchCartItems($conn);
$cart_totals = calculateCartTotals($cart_items);

$conn->close();
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

    <title>Cart -CIEL</title>
  </head>
  <body>
   
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
          <li><span class="breadcrumb__link">Cart</span></li>
        </ul>
      </section>

     
      <section class="cart section--lg container">
        <div class="table__container">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Subtotal</th>
                            <th>Remove</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($cart_items as $item): ?>
                        <tr>
                            <td><img src="<?php echo $item['image']; ?>" alt="" class="table__img"></td>
                            <td>
                                <h3 class="table__title"><?php echo $item['product_name']; ?></h3>
                                
                            </td>
                            <td><span class="table__price">Rs.<?php echo $item['price']; ?></span></td>
                            <td>
                                <input type="hidden" name="item_id" value="<?php echo $item['id']; ?>">
                                <input type="number" name="quantity" value="<?php echo $item['quantity']; ?>" class="quantity">
                            </td>
                            <td><span class="table__subtotal">Rs.<?php echo $item['subtotal']; ?></span></td>
                            <td>
                                <form method="post" action="remove_item.php">
                                <input type="hidden" name="action" value="remove">
                                <button type="submit" class="table__trash" aria-label="Remove item">
                                <i class="fi fi-rs-trash"></i>
                                </button>
                                </form>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </form>
        </div>

        <!-- Other cart details (shipping, total, etc.) -->
        <div class="cart__total">
            <h3 class="section__title">Cart Totals</h3>
            <table class="cart__total-table">
                <tr>
                    <td><span class="cart__total-title">Cart Subtotal</span></td>
                    <td><span class="cart__total-price">Rs.<?php echo $cart_totals['subtotal']; ?></span></td>
                </tr>
                <tr>
                    <td><span class="cart__total-title">Shipping</span></td>
                    <td><span class="cart__total-price">Rs.0.00</span></td>
                </tr>
                <tr>
                    <td><span class="cart__total-title">Total</span></td>
                    <td><span class="cart__total-price">Rs.<?php echo $cart_totals['total']; ?></span></td>
                </tr>
            </table>
            <a href="checkout.html" class="btn flex btn--md">
                <i class="fi fi-rs-box-alt"></i> Proceed To Checkout
            </a>
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
    <script src="assets/js/cart.js"></script>
  </body>
</html>
