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
  <link rel="stylesheet" href="utility.css">
  <link rel="stylesheet" href="style.css" />
  <style>
    /* Product Section */
    .product-section {
      padding: 40px 20px;
      background-color: #f2f2f2;
    }

    .product-section h2 {
      text-align: center;
      font-size: 2rem;
      margin-bottom: 30px;
      color: #333;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .products-row {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 30px;
    }

    /* Product Card */
    .product-card {
      width: 250px;
      background-color: #ffffff;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      overflow: hidden;
      transition: transform 0.3s ease;
      text-align: center;
      padding: 15px;
    }

    .product-card:hover {
      transform: translateY(-5px);
    }

    .product-card img {
      width: 100%;
      height: auto;
      object-fit: cover;
      border-radius: 8px;
    }

    .product-card h3 {
      margin: 15px 0 10px;
      font-size: 1.2rem;
      color: #333;
    }

    .product-card p {
      color: #27ae60;
      font-size: 1rem;
      margin-bottom: 10px;
    }

    /* Button */
    .product-card .add-to-cart {
      display: inline-block;
      padding: 8px 16px;
      background-color: #ff3f6c;
      color: white;
      border: none;
      border-radius: 5px;
      text-decoration: none;
      font-weight: 500;
      font-size: 0.95rem;
      transition: background-color 0.3s ease;
    }

    .product-card .add-to-cart:hover {
      background-color: #e6325b;
    }

    
/* Overlay Style */
.popup-overlay {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    z-index: 1000;
  }
  
  /* Popup Style */
  .popup {
    display: none;
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: white;
    border-radius: 8px;
    padding: 20px;
    width: 300px;
    z-index: 1001;
    box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.2);
  }
  
  .popup h3 {
    text-align: center;
    font-size: 1.5em;
    margin-bottom: 20px;
  }
  
  .popup p {
    text-align: center;
    font-size: 1em;
    margin-bottom: 20px;
  }
  
  /* Buttons inside the popups */
  .popup button {
    width: 100%;
    padding: 10px;
    margin: 5px 0;
    border: none;
    border-radius: 5px;
    background-color: #007BFF;
    color: white;
    font-size: 1em;
    cursor: pointer;
  }
  
  .popup button:hover {
    background-color: #0056b3;
  }
  
  /* Specific Styling for Success Popup */
  #successPopup {
    background-color: #28a745; /* Green background for success */
  }
  
  #successPopup h3 {
    color: white;
  }
  
  #successPopup p {
    color: white;
  }
  
  /* Specific Styling for Login Popup */
  #loginPopup {
    background-color: black; /* Red background for error */
  }
  
  #loginPopup h3 {
    color: white;
  }
  
  #loginPopup p {
    color: white;
  }
  </style>
</head>

<body>
  <div class="left">
    <div class="first">
      <img src="https://myntrastorage1234.blob.core.windows.net/product-images/catlogL.webp" />
      <img src="https://myntrastorage1234.blob.core.windows.net/product-images/cross-svgrepo-com.svg" class="cross" alt="cross" />
    </div>
    <div class="catlogL">
      <h4><a href="products.php">Men</a></h4>
      <h4><a href="products.php">Women</a></h4>
      <h4><a href="products.php">Kids</a></h4>
      <h4><a href="products.php">Home and Living</a></h4>
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
        <h4><a href="products.php">MEN</a></h4>
        <h4><a href="products.php">WOMEN</a></h4>
        <h4><a href="products.php">KIDS</a></h4>
        <h4><a href="products.php">HOME & LIVING</a></h4>
        <h4><a href="products.php">BEAUTY</a></h4>
        <h4><a href="products.php">STUDIO</a></h4>
      </div>
      <div class="search">
        <img src="./images/search-4-svgrepo-com.svg" alt="search" />
        <input
          type="text"
          placeholder="Search for products, brand and more" />
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
        <a href="cart.html" class="bag-link">
          <div class="bag">
            <img src="https://myntrastorage1234.blob.core.windows.net/product-images/bag-shopping-svgrepo-com.svg" alt="bag" />
            <h6>Bag</h6>
          </div>
        </a>
      </div>
    </nav>
    <div class="hero">
      <div class="slider">
        <img src="https://myntrastorage1234.blob.core.windows.net/product-images/heroimg1.webp" class="active" alt="heroimg" />
        <img src="https://myntrastorage1234.blob.core.windows.net/product-images/heroimg2.webp" alt="heroimg" />
        <img src="https://myntrastorage1234.blob.core.windows.net/product-images/heroimg3.webp" alt="heroimg" />
      </div>
      <div class="dotsContainer">
        <div class="dot active" attr="0" onclick="switchImage(this)"></div>
        <div class="dot" attr="1" onclick="switchImage(this)"></div>
        <div class="dot" attr="2" onclick="switchImage(this)"></div>
      </div>
    </div>
    <div class="product-section">
      <h2>Top Products</h2>
      <div class="products-row">
        <!-- Product 1 -->
        <div class="product-card">
          <img src="https://myntrastorage1234.blob.core.windows.net/product-images/card1.webp" alt="Product 1" />
          <h3>Casual T-Shirt</h3>
          <p>₹499</p>
          <button class="add-to-cart" onclick="handleAddToCart()">Add to Cart</button>
        </div>

        <!-- Product 2 -->
        <div class="product-card">
          <img src="https://myntrastorage1234.blob.core.windows.net/product-images/card2.webp" alt="Product 2" />
          <h3>Stylish Jeans</h3>
          <p>₹1199</p>
          <button class="add-to-cart" onclick="handleAddToCart()">Add to Cart</button>
        </div>

        <!-- Product 3 -->
        <div class="product-card">
          <img src="https://myntrastorage1234.blob.core.windows.net/product-images/card3.webp" alt="Product 3" />
          <h3>Summer Dress</h3>
          <p>₹899</p>
          <button class="add-to-cart" onclick="handleAddToCart()">Add to Cart</button>
        </div>

        <!-- Product 4 -->
        <div class="product-card">
          <img src="https://myntrastorage1234.blob.core.windows.net/product-images/card4.webp" alt="Product 4" />
          <h3>Formal Shirt</h3>
          <p>₹799</p>
          <button class="add-to-cart" onclick="handleAddToCart()">Add to Cart</button>
        </div>
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
              <img src="https://myntrastorage1234.blob.core.windows.net/product-images/card2.webp" /> <img src="card1.webp" />
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
              onclick="switchImage(this)"></div>
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
              onclick="switchImage(this)"></div>
            <div class="cdot" attr="1" onclick="switchImage(this)"></div>
            <div class="cdot" attr="2" onclick="switchImage(this)"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="scrolTop"><img src="https://myntrastorage1234.blob.core.windows.net/product-images/top-svgrepo-com.svg" /></div>
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


    <!-- Popup and Overlay -->
    <div class="popup-overlay" id="popupOverlay"></div>

    <!-- Login Popup -->
    <div class="popup" id="loginPopup">
      <h3>Login Required</h3>
      <p>You need to log in to add items to your cart.</p>
      <button onclick="location.href='login.html'">Go to Login</button>
      <button onclick="closePopup()">Cancel</button>
    </div>

    <!-- Success Popup -->
    <div class="popup" id="successPopup">
      <h3>Item Added to the Cart Successfully</h3>
      <p>The product has been added to your cart!</p>
      <button onclick="closePopup()">Close</button>
    </div>
  </div>

  <script>
  function handleAddToCart() {
    const isLoggedIn = <?php echo isset($_SESSION['user']) ? 'true' : 'false'; ?>;
    
    if (isLoggedIn) {
      showPopup('successPopup');
      // You can also add AJAX here to store cart in DB or session
    } else {
      showPopup('loginPopup');
    }
  }

  function showPopup(id) {
    document.getElementById("popupOverlay").style.display = "block";
    document.getElementById(id).style.display = "block";
  }

  function closePopup() {
    document.getElementById("popupOverlay").style.display = "none";
    document.getElementById("successPopup").style.display = "none";
    document.getElementById("loginPopup").style.display = "none";
  }

  function redirectToLogin() {
    window.location.href = "login.html";
  }

  function toggleAuthStatus() {
    const authBox = document.getElementById("authStatus");
    authBox.style.display = authBox.style.display === "block" ? "none" : "block";
  }
</script>
  <script src="script.js">
    
  </script>
</body>

</html>