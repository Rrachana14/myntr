<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>ShopZone - Products</title>
  <link rel="stylesheet" href="products.css" />
  <link rel="stylesheet" href="nav.css" />
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
</head>
<body>

<?php

session_start();
include 'nav.php';
$loggedIn = isset($_SESSION['user']); // Check if the user is logged in
?>

<div class="container">
  <aside class="sidebar">
    <h3>Filters</h3>
    <div class="filter-section">
      <h4>Category</h4>
      <label><input type="checkbox" /> Skincare</label>
      <label><input type="checkbox" /> Makeup</label>
      <label><input type="checkbox" /> Haircare</label>
    </div>
    <div class="filter-section">
      <h4>Price</h4>
      <label><input type="checkbox" /> ₹100 - ₹500</label>
      <label><input type="checkbox" /> ₹500 - ₹1000</label>
      <label><input type="checkbox" /> ₹1000+</label>
    </div>
  </aside>

  <main class="products">
    <!-- PRODUCT TEMPLATE -->
    <?php
    $products = [
      ['img' => 'https://myntrastorage1234.blob.core.windows.net/product-images/lipstick.jpeg', 'name' => 'Matte Lipstick', 'price' => 499, 'old_price' => 799],
      ['img' => 'https://myntrastorage1234.blob.core.windows.net/product-images/foundation.jpeg', 'name' => 'Liquid Foundation', 'price' => 799, 'old_price' => 1299],
      ['img' => 'https://myntrastorage1234.blob.core.windows.net/product-images/eyeliner.jpeg', 'name' => 'Waterproof Eyeliner', 'price' => 299, 'old_price' => 499],
      ['img' => 'https://myntrastorage1234.blob.core.windows.net/product-images/moisturizer.jpeg', 'name' => 'Hydrating Moisturizer', 'price' => 649, 'old_price' => 999],
      ['img' => 'https://myntrastorage1234.blob.core.windows.net/product-images/lipstick2.jpeg', 'name' => 'Lisptick', 'price' => 349, 'old_price' => 699],
      ['img' => 'https://myntrastorage1234.blob.core.windows.net/product-images/serum.jpeg', 'name' => 'Vitamin C Serum', 'price' => 999, 'old_price' => 1499],
      ['img' => 'https://myntrastorage1234.blob.core.windows.net/product-images/facewash.jpeg', 'name' => 'Foaming Face Wash', 'price' => 399, 'old_price' => 699],
      ['img' => 'https://myntrastorage1234.blob.core.windows.net/product-images/compact.jpeg', 'name' => 'Compact Powder', 'price' => 299, 'old_price' => 599],
    ];

    foreach ($products as $product) {
      echo '
      <div class="product-card">
        <img src="'.$product['img'].'" alt="'.$product['name'].'" />
        <div class="product-details">
          <h4>'.$product['name'].'</h4>
          <p>₹'.$product['price'].' <span>₹'.$product['old_price'].'</span></p>
          <button class="add-to-cart" onclick="handleAddToCart()">Add to Cart</button>
        </div>
      </div>';
    }
    ?>
  </main>
</div>

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

<script>
  const isLoggedIn = <?php echo json_encode($loggedIn); ?>;
  
  function handleAddToCart() {
    if (!isLoggedIn) {
      // Show login popup if not logged in
      document.getElementById('popupOverlay').style.display = 'block';
      document.getElementById('loginPopup').style.display = 'block';
    } else {
      // Show success popup if logged in
      document.getElementById('popupOverlay').style.display = 'block';
      document.getElementById('successPopup').style.display = 'block';
    }
  }

  function closePopup() {
    document.getElementById('popupOverlay').style.display = 'none';
    document.getElementById('loginPopup').style.display = 'none';
    document.getElementById('successPopup').style.display = 'none';
  }
</script>

<script src="nav.js"></script>
</body>
</html>
