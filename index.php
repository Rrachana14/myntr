<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Online Shopping for Women,men,etc.</title>
    <link rel="shortcut icon" href="fevicon.svg" type="image/x-icon" />
    <!-- <link rel="stylesheet" href="utility.css"> -->
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <div class="left">
      <div class="first">
        <img src="https://myntrastorage1234.blob.core.windows.net/product-images/catlogL.webp" />
        <img src="https://myntrastorage1234.blob.core.windows.net/product-images/cross-svgrepo-com.svg" class="cross" alt="cross" />
      </div>
      <div class="catlogL">
        <h4><a href="#">Men</a></h4>
        <h4><a href="#">Women</a></h4>
        <h4><a href="#">Kids</a></h4>
        <h4><a href="#">Home and Living</a></h4>
        <h4><a href="products.php">Beauty</a></h4>
        <hr />
      </div>
      <div class="catlogL col">
        <h4><a href="#">Myntra Studio</a></h4>
        <h4><a href="#">Myntra Mall</a></h4>
        <h4><a href="#">Myntra Insider</a></h4>
        <h4><a href="#">Gift Cards</a></h4>
        <h4><a href="#">Contact Us</a></h4>
        <h4><a href="#">FAQ</a></h4>
      </div>
      <img src="https://myntrastorage1234.blob.core.windows.net/product-images/catlogL.webp" />
    </div>
    <div class="main">
      <nav>
        <div class="menu"><img src="https://myntrastorage1234.blob.core.windows.net/product-images/menu-svgrepo-com.svg" /></div>
        <img src="https://myntrastorage1234.blob.core.windows.net/product-images/Myntra-logo.svg" alt="logo" class="logo" />
        <div class="catlog">
          <h4><a href="#">MEN</a></h4>
          <h4><a href="#">WOMEN</a></h4>
          <h4><a href="#">KIDS</a></h4>
          <h4><a href="#">HOME & LIVING</a></h4>
          <h4><a href="products.php">BEAUTY</a></h4>
          <h4><a href="#">STUDIO</a></h4>
        </div>
        <div class="search">
          <img src="./images/search-4-svgrepo-com.svg" alt="search" />
          <input
            type="text"
            placeholder="Search for products, brand and more"
          />
        </div>
        <div class="catlog">
        <div class="profile" onclick="toggleAuthStatus()">
    <img src="https://myntrastorage1234.blob.core.windows.net/product-images/profile-svgrepo-com.svg" />
    <h6 id="profileText">
      profile
    </h6>
  </div>

  <div id="authStatus" class="auth-dropdown">
    <?php if (isset($_SESSION['user'])): ?>
      <p>Hello, <strong><?php echo htmlspecialchars($_SESSION['user']); ?></strong></p>
      <a href="logout.php"><button>Log out</button></a>
    <?php else: ?>
      <a href="login.html"><button>Log in</button></a>
      <a href="signup.html"><button>Sign up</button></a>
    <?php endif; ?>
  </div>

          
          
          
          <div class="whislist">
            <img src="https://myntrastorage1234.blob.core.windows.net/product-images/heart-svgrepo-com.svg" alt="heart" />
            <h6>Wishlist</h6>
          </div>
          <div class="bag">
            <img src="https://myntrastorage1234.blob.core.windows.net/product-images/bag-shopping-svgrepo-com.svg" alt="bag" />
            <h6>Bag</h6>
          </div>
        </div>
      </nav>
      <div class="hero">
        <div class="slider">
          <img src="./images/heroimg1.webp" class="active" alt="heroimg" />
          <img src="./images/heroimg2.webp" alt="heroimg" />
          <img src="./images/heroimg3.webp" alt="heroimg" />
        </div>
        <div class="dotsContainer">
          <div class="dot active" attr="0" onclick="switchImage(this)"></div>
          <div class="dot" attr="1" onclick="switchImage(this)"></div>
          <div class="dot" attr="2" onclick="switchImage(this)"></div>
        </div>
      </div>
      <div class="categories">
        <div class="category">
          <h2>MEDAL WORTHY BRANDS TO BAG</h2>
          <div class="slideContainer">
            <div class="row">
              <div class="cards active">
                <img src="https://myntrastorage1234.blob.core.windows.net/product-images/card1.webp" />
                <img src="https://myntrastorage1234.blob.core.windows.net/product-images/card2.webp" />
                <img src="https://myntrastorage1234.blob.core.windows.net/product-images/card4.webp" />
                <img src="https://myntrastorage1234.blob.core.windows.net/product-images/card3.webp" />
                <img src="https://myntrastorage1234.blob.core.windows.net/product-images/card5.webp" />
                <img src="https://myntrastorage1234.blob.core.windows.net/product-images/card6.webp" />
              </div>
              <div class="cards">
                <img src="https://myntrastorage1234.blob.core.windows.net/product-images/card2.webp" />                <img src="card1.webp" />
                <img src="https://myntrastorage1234.blob.core.windows.net/product-images/card3.webp" />
                <img src="https://myntrastorage1234.blob.core.windows.net/product-images/card1.webp" />
                <img src="https://myntrastorage1234.blob.core.windows.net/product-images/card6.webp" />
                <img src="https://myntrastorage1234.blob.core.windows.net/product-images/card5.webp" />
                <img src="https://myntrastorage1234.blob.core.windows.net/product-images/card4.webp" />
              </div>
              <div class="cards">
                <img src="card1.webp" />
                <img src="https://myntrastorage1234.blob.core.windows.net/product-images/card2.webp" />
                <img src="https://myntrastorage1234.blob.core.windows.net/product-images/card3.webp" />
                <img src="https://myntrastorage1234.blob.core.windows.net/product-images/card4.webp" />
                <img src="https://myntrastorage1234.blob.core.windows.net/product-images/card5.webp" />
                <img src="https://myntrastorage1234.blob.core.windows.net/product-images/card6.webp" />
              </div>
            </div>
            <div class="dots">
              <div
                class="cdot active"
                attr="0"
                onclick="switchImage(this)"
              ></div>
              <div class="cdot" attr="1" onclick="switchImage(this)"></div>
              <div class="cdot" attr="2" onclick="switchImage(this)"></div>
            </div>
          </div>
        </div>
        <div class="category">
          <h2>GRAND GLOBAL BRANDS</h2>
          <div class="slideContainer">
            <div class="row">
              <div class="cards active">
                <img src="https://myntrastorage1234.blob.core.windows.net/product-images/card1.webp" />
                <img src="https://myntrastorage1234.blob.core.windows.net/product-images/card2.webp" />
                <img src="https://myntrastorage1234.blob.core.windows.net/product-images/card4.webp" />
                <img src="https://myntrastorage1234.blob.core.windows.net/product-images/card3.webp" />
                <img src="https://myntrastorage1234.blob.core.windows.net/product-images/card5.webp" />
                <img src="https://myntrastorage1234.blob.core.windows.net/product-images/card6.webp" />
              </div>
              <div class="cards">
                <img src="https://myntrastorage1234.blob.core.windows.net/product-images/card2.webp" />
                <img src="https://myntrastorage1234.blob.core.windows.net/product-images/card1.webp" />
                <img src="https://myntrastorage1234.blob.core.windows.net/product-images/card3.webp" />
                <img src="https://myntrastorage1234.blob.core.windows.net/product-images/card6.webp" />
                <img src="https://myntrastorage1234.blob.core.windows.net/product-images/card5.webp" />
                <img src="https://myntrastorage1234.blob.core.windows.net/product-images/card4.webp" />
              </div>
              <div class="cards">
                <img src="https://myntrastorage1234.blob.core.windows.net/product-images/card1.webp" />
                <img src="https://myntrastorage1234.blob.core.windows.net/product-images/card2.webp" />
                <img src="https://myntrastorage1234.blob.core.windows.net/product-images/card3.webp" />
                <img src="https://myntrastorage1234.blob.core.windows.net/product-images/card4.webp" />
                <img src="https://myntrastorage1234.blob.core.windows.net/product-images/card5.webp" />
                <img src="https://myntrastorage1234.blob.core.windows.net/product-images/card6.webp" />
              </div>
            </div>
            <div class="dots">
              <div
                class="cdot active"
                attr="0"
                onclick="switchImage(this)"
              ></div>
              <div class="cdot" attr="1" onclick="switchImage(this)"></div>
              <div class="cdot" attr="2" onclick="switchImage(this)"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="scrolTop"><img src="./images/top-svgrepo-com.svg" /></div>
      <footer>
        <!-- <div class="foote"> -->
        <div class="info">
          <h2>Online shopping</h2>
          <h4>Men</h4>
          <h4>Women</h4>
          <h4>Kids</h4>
          <h4>Home & Living</h4>
          <h4>Beauty</h4>
          <h4>Gift Cards</h4>
          <h4>Myntra Insider</h4>
        </div>
        <div class="info">
          <h2>Customer policies</h2>
          <h4>Contact Us</h4>
          <h4>FAQ</h4>
          <h4>T&C</h4>
          <h4>Terms Of Use</h4>
          <h4>Track Orders</h4>
          <h4>Shipping</h4>
          <h4>Cancellation</h4>
          <h4>Returns</h4>
        </div>
        <div class="info">
          <h2>Experience myntra app on mobile</h2>
        </div>
        <div class="info">
          <h2>keep in touch</h2>
        </div>
        <div class="info">
          <h2>useful links</h2>
          <h4>Blog</h4>
          <h4>Careers</h4>
          <h4>Site Map</h4>
          <h4>Corporate Information</h4>
          <h4>Whitehat</h4>
          <h4>Cleartrip</h4>
        </div>
        <!-- </div> -->
      </footer>
    </div>
    

    <script src="script.js"></script>
  </body>
</html>
