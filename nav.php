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
    <img src="https://myntrastorage1234.blob.core.windows.net/product-images/search-4-svgrepo-com.svg" alt="search" />
    <input type="text" placeholder="Search for products, brand and more" />
  </div>
  <div class="catlog">
    <div class="profile" onclick="toggleAuthStatus()">
      <img src="https://myntrastorage1234.blob.core.windows.net/product-images/profile-svgrepo-com.svg" />
      <h6 id="profileText">profile</h6>
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
