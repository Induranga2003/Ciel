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
    <?php include 'newproduct.php'; ?>
    
    <?php if ($product_data): ?>

      
   
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
          <li><span class="breadcrumb__link">Fashion</span></li>
          <li><span class="breadcrumb__link">></span></li>
          <li><span class="breadcrumb__link">Henley Shirt</span></li>
        </ul>
      </section>

      
      <section class="details section--lg">
        <div class="details__container container grid">
          <div class="details__group">
            <img src="<?php echo htmlspecialchars($product_data['image']); ?>" alt="" class="details__img" />

            <div class="details__small-images grid">
              <img src="<?php echo htmlspecialchars($product_data['hover']); ?>"
                alt=""
                class="details__small-img"
              />

              <img src="<?php echo htmlspecialchars($product_data['image']); ?>"
                alt=""
                class="details__small-img"
              />

              <img src="<?php echo htmlspecialchars($product_data['hover']); ?>"
                alt=""
                class="details__small-img"
              />
            </div>
          </div>

          <div class="details__group">
            <h3 class="details__title"><?php echo htmlspecialchars($product_data['product_name']); ?></h3>
            <p class="details__brand">Brands: <span><?php echo htmlspecialchars($product_data['brand']); ?></span></p>

            <div class="details__price flex">
              <span class="new__price"> Rs.<?php echo htmlspecialchars($product_data['price']); ?></span>
              <span class="old__price"><?php echo htmlspecialchars($product_data['old_price']); ?></span>
              <span class="save__price"><?php echo htmlspecialchars($product_data['percentage']); ?></span>
            </div>

            <p class="short__description">
              <?php echo htmlspecialchars($product_data['description']); ?>
            </p>

            <ul class="product__list">
              <li class="list__item flex">
                <i class="fi-rs-crown"></i> 1 Year AL Jazeera Brand Warranty
              </li>

              <li class="list__item flex">
                <i class="fi-rs-refresh"></i> 30 Day Return Policy
              </li>

              <li class="list__item flex">
                <i class="fi-rs-credit-card"></i> Cash on Delivery available
              </li>
            </ul>

            <div class="details__color flex">
              <span class="details__color-title">Color</span>

              <ul class="color__list">
                <li>
                  <a
                    href="#"
                    class="color__link"
                    style="background-color: #87CEEB"
                  ></a>
                </li>

                <li>
                  <a
                    href="#"
                    class="color__link"
                    style="background-color: #8B0000"
                  ></a>
                </li>

                <li>
                  <a
                    href="#"
                    class="color__link"
                    style="background-color: #000080"
                  ></a>
                </li>

                <li>
                  <a
                    href="#"
                    class="color__link"
                    style="background-color: #006400"
                  ></a>
                </li>

                <li>
                  <a
                    href="#"
                    class="color__link"
                    style="background-color: #36454F"
                  ></a>
                </li>
              </ul>
            </div>

            <div class="details__size flex">
              <span class="details__size-title">Size</span>

              <ul class="size__list">
                <li>
                  <a href="#" class="size__link size-active">M</a>
                </li>

                <li>
                  <a href="#" class="size__link">L</a>
                </li>

                <li>
                  <a href="#" class="size__link">XL</a>
                </li>

                <li>
                  <a href="#" class="size__link">XXL</a>
                </li>
              </ul>
            </div>

            <div class="details__action">
                <form action="add_to_cart.php" method="POST">
                    <input type="hidden" name="product_id" value="<?php echo htmlspecialchars($product_data['id']); ?>">
                    <input type="number" name="quantity" class="quantity" value="1" min="1">
                    <button type="submit" class="btn btn--sm">Add to Cart</button>
    </form>

                <a href="add_to_wishlist.php?id=1" class="details__action-btn">
                <i class="fi fi-rs-heart"></i> 
                </a>
    </a>
</div>

            <ul class="details__meta">
              <li class="meta__list flex"><span>SKU:</span><?php echo htmlspecialchars($product_data['id']); ?></li>
              <li class="meta__list flex">
                <span>Tags:</span><?php echo htmlspecialchars($product_data['tags']); ?>
              </li>
              <li class="meta__list flex">
                <span>Availability:</span><?php echo htmlspecialchars($product_data['availability']); ?>
              </li>
        </ul>
          </div>
        </div>
      </section>
      <?php else: ?>
    <p>Product not found.</p>
    <?php endif; ?>

      
      <section class="details__tab container">
        <div class="detail__tabs">
          <span class="detail__tab active-tab" data-target="#info">
            Additional Info
          </span>
          <span class="detail__tab" data-target="#reviews">Reviews(3)</span>
        </div>
        

        <div class="details__tabs-content">
          <div class="details__tab-content active-tab" content id="info">
            <table class="info__table">
              <tr>
                <th>Stand Up</th>
                <td>35″L x 24″W x 37-45″H(front to back wheel)</td>
              </tr>

              <tr>
                <th>Folded (w/o wheels)</th>
                <td>32.5″L x 18.5″W x 16.5″H</td>
              </tr>

              <tr>
                <th>Folded (w/ wheels)</th>
                <td>32.5″L x 24″W x 18.5″H</td>
              </tr>

              <tr>
                <th>Door Pass Through</th>
                <td>24</td>
              </tr>

              <tr>
                <th>Frame</th>
                <td>Aluminum</td>
              </tr>

              <tr>
                <th>Weight (w/o wheels)</th>
                <td>20 LBS</td>
              </tr>

              <tr>
                <th>Weight Capacity</th>
                <td>60 LBS</td>
              </tr>

              <tr>
                <th>Width</th>
                <td>24″</td>
              </tr>

              <tr>
                <th>Handle height (ground to handle)</th>
                <td>37-45″</td>
              </tr>

              <tr>
                <th>Wheels</th>
                <td>12″ air / wide track slick tread</td>
              </tr>

              <tr>
                <th>Seat back height</th>
                <td>21.5″</td>
              </tr>

              <tr>
                <th>Head room (inside canopy)</th>
                <td>25″</td>
              </tr>

              <tr>
                <th>Color</th>
                <td>Black, Blue, Red, White</td>
              </tr>

              <tr>
                <th>Size</th>
                <td>M, S</td>
              </tr>
            </table>
          </div>

          <div class="details__tab-content" content id="reviews">
            <div class="reviews__container grid">
              <div class="review__single">
                <div>
                  <img
                    src="assets/img/avatar-1.jpg"
                    alt=""
                    class="review__img"
                  />
                  <h4 class="review__title">Jacky Chan</h4>
                </div>

                <div class="review__data">
                  <div class="review__rating">
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                  </div>

                  <p class="review__description">
                    Thank you very fast shipping from Sri Lanka only 3days.
                  </p>

                  <span class="review__date">July 4, 2024 at 3:12 pm</span>
                </div>
              </div>

              <div class="review__single">
                <div>
                  <img
                    src="assets/img/avatar-2.jpg"
                    alt=""
                    class="review__img"
                  />
                  <h4 class="review__title">Jacky Chan</h4>
                </div>

                <div class="review__data">
                  <div class="review__rating">
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                  </div>

                  <p class="review__description">
                    Great low price and works well.
                  </p>

                  <span class="review__date">July 4, 2024 at 3:12 pm</span>
                </div>
              </div>

              <div class="review__single">
                <div>
                  <img
                    src="assets/img/avatar-2.jpg"
                    alt=""
                    class="review__img"
                  />
                  <h4 class="review__title">Jacky Chan</h4>
                </div>

                <div class="review__data">
                  <div class="review__rating">
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                  </div>

                  <p class="review__description">
                    Authentic and Beautiful, Love these way more than ever
                    expected They are Great Items.
                  </p>

                  <span class="review__date">July 4, 2024 at 3:12 pm</span>
                </div>
              </div>
            </div>

            <div class="review__form">
              <h4 class="review__form-title">Add a review</h4>

              <div class="rate__product">
                <i class="fi fi-rs-star"></i>
                <i class="fi fi-rs-star"></i>
                <i class="fi fi-rs-star"></i>
                <i class="fi fi-rs-star"></i>
                <i class="fi fi-rs-star"></i>
              </div>

              <form action="" class="form grid">
                <textarea
                  class="form__input textarea"
                  placeholder="Write Comment"
                ></textarea>

                <div class="form__group grid">
                  <input type="text" placeholder="Name" class="form__input" />

                  <input type="email" placeholder="Email" class="form__input" />
                </div>

                <div class="form__btn">
                  <button class="btn">Submit Review</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>

      
      <section class="products container section--lg">
        <h3 class="section__title"><span>Related</span> Products</h3>

        <div class="products__container grid">
          <div class="product__item">
            <div class="product__banner">
              <a href="details.php?id=3" class="product__images">
                <img
                  src="assets/img/Item3.png"
                  alt=""
                  class="product__img default"
                />

                <img
                  src="assets/img/Item3-3.png"
                  alt=""
                  class="product__img hover"
                />
              </a>

              <div class="product__actions">
                <a href="#" class="action__btn" aria-label="Quick View">
                  <i class="fi fi-rs-eye"></i>
                </a>

                <a href="#" class="action__btn" aria-label="Add To Wishlist">
                  <i class="fi fi-rs-heart"></i>
                </a>

                <a href="#" class="action__btn" aria-label="Compare">
                  <i class="fi fi-rs-shuffle"></i>
                </a>
              </div>

              <div class="product__badge light-green">Hot</div>
            </div>

            <div class="product__content">
              <span class="product__category">Clothing</span>
              <a href="details.php?id=3">
                <h3 class="product__title">Adidas Ultraboost 21</h3>
              </a>
              <div class="product__rating">
                <i class="fi fi-rs-star"></i>
                <i class="fi fi-rs-star"></i>
                <i class="fi fi-rs-star"></i>
                <i class="fi fi-rs-star"></i>
                <i class="fi fi-rs-star"></i>
              </div>
              <div class="product__price flex">
                <span class="new__price">Rs.48000.00</span>
                <span class="old__price">Rs.60000.00</span>
              </div>

              <a
                href="#"
                class="action__btn cart__btn"
                aria-label="Add To Cart"
              >
                <i class="fi fi-rs-shopping-bag-add"></i>
              </a>
            </div>
          </div>

          <div class="product__item">
            <div class="product__banner">
              <a href="details.php?id=34" class="product__images">
                <img
                  src="assets/img/Item34.png"
                  alt=""
                  class="product__img default"
                />

                <img
                  src="assets/img/Item34-34.png"
                  alt=""
                  class="product__img hover"
                />
              </a>

              <div class="product__actions">
                <a href="#" class="action__btn" aria-label="Quick View">
                  <i class="fi fi-rs-eye"></i>
                </a>

                <a href="#" class="action__btn" aria-label="Add To Wishlist">
                  <i class="fi fi-rs-heart"></i>
                </a>

                <a href="#" class="action__btn" aria-label="Compare">
                  <i class="fi fi-rs-shuffle"></i>
                </a>
              </div>

              <div class="product__badge light-orange">Hot</div>
            </div>

            <div class="product__content">
              <span class="product__category">Accessories</span>
              <a href="details.html">
                <h3 class="product__title">Pizza Cutter Wheel</h3>
              </a>
              <div class="product__rating">
                <i class="fi fi-rs-star"></i>
                <i class="fi fi-rs-star"></i>
                <i class="fi fi-rs-star"></i>
                <i class="fi fi-rs-star"></i>
                <i class="fi fi-rs-star"></i>
              </div>
              <div class="product__price flex">
                <span class="new__price">Rs.3500.00</span>
                <!-- <span class="old__price">Rs.1750</span> -->
              </div>

              <a
                href="#"
                class="action__btn cart__btn"
                aria-label="Add To Cart"
              >
                <i class="fi fi-rs-shopping-bag-add"></i>
              </a>
            </div>
          </div>

          <div class="product__item">
            <div class="product__banner">
              <a href="details.php?id=36" class="product__images">
                <img
                  src="assets/img/Item36.png"
                  alt=""
                  class="product__img default"
                />

                <img
                  src="assets/img/Item36-36.png"
                  alt=""
                  class="product__img hover"
                />
              </a>

              <div class="product__actions">
                <a href="#" class="action__btn" aria-label="Quick View">
                  <i class="fi fi-rs-eye"></i>
                </a>

                <a href="#" class="action__btn" aria-label="Add To Wishlist">
                  <i class="fi fi-rs-heart"></i>
                </a>

                <a href="#" class="action__btn" aria-label="Compare">
                  <i class="fi fi-rs-shuffle"></i>
                </a>
              </div>

              <div class="product__badge light-pink">-30%</div>
            </div>

            <div class="product__content">
              <span class="product__category">Beauty</span>
              <a href="details.php?id=36">
                <h3 class="product__title">Cinnamon Roll Cocoshell Soy Wax Candle</h3>
              </a>
              <div class="product__rating">
                <i class="fi fi-rs-star"></i>
                <i class="fi fi-rs-star"></i>
                <i class="fi fi-rs-star"></i>
                <i class="fi fi-rs-star"></i>
                <i class="fi fi-rs-star"></i>
              </div>
              <div class="product__price flex">
                <span class="new__price">Rs.2390.00</span>
                <!-- <span class="old__price">Rs.1750</span> -->
              </div>

              <a
                href="#"
                class="action__btn cart__btn"
                aria-label="Add To Cart"
              >
                <i class="fi fi-rs-shopping-bag-add"></i>
              </a>
            </div>
          </div>

          <div class="product__item">
            <div class="product__banner">
              <a href="details.php?id=39" class="product__images">
                <img
                  src="assets/img/Item39.png"
                  alt=""
                  class="product__img default"
                />

                <img
                  src="assets/img/Item39-39.png"
                  alt=""
                  class="product__img hover"
                />
              </a>

              <div class="product__actions">
                <a href="#" class="action__btn" aria-label="Quick View">
                  <i class="fi fi-rs-eye"></i>
                </a>

                <a href="#" class="action__btn" aria-label="Add To Wishlist">
                  <i class="fi fi-rs-heart"></i>
                </a>

                <a href="#" class="action__btn" aria-label="Compare">
                  <i class="fi fi-rs-shuffle"></i>
                </a>
              </div>

              <div class="product__badge light-pink">Hot</div>
            </div>

            <div class="product__content">
              <span class="product__category">Electric</span>
              <a href="details.html">
                <h3 class="product__title">WYZE Cam V3</h3>
              </a>
              <div class="product__rating">
                <i class="fi fi-rs-star"></i>
                <i class="fi fi-rs-star"></i>
                <i class="fi fi-rs-star"></i>
                <i class="fi fi-rs-star"></i>
                <i class="fi fi-rs-star"></i>
              </div>
              <div class="product__price flex">
                <span class="new__price">Rs.12500.00</span>
                <!-- <span class="old__price">Rs.1750</span> -->
              </div>

              <a
                href="#"
                class="action__btn cart__btn"
                aria-label="Add To Cart"
              >
                <i class="fi fi-rs-shopping-bag-add"></i>
              </a>
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
            <span>Address:</span>  1079-1081 Maradana Road, Colombo
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
            <li><a href="contact.html"class="footer__link">Contact Us</a></li>
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
    <script src="assets/js/shop.js"></script>
  </body>
</html>
