<!DOCTYPE html>
<html lang="en">
<head>
  <title>Product Estimation</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/fontawesome.min.css">
  <link rel="stylesheet" href="assets/css/datatable.css">
  <link rel="stylesheet" href="assets/css/multiselect.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>
<!-- site header -->
<header class="header-area">
    <!-- menu area -->
    <nav class="menu-area">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="menu-area-container">
                  <a href="index.php" class="logo">
                    <img src="assets/img/zpc-logo.png" alt="ZeroPointComputing">
                  </a>                    
                  <ul class="main-menu">     
                    <li>
                        <a href="index.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : '';?>">Home</a>
                    </li> 
                    <li>
                        <a href="manufacture.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'manufacture.php' ? 'active' : '';?>">Manufacture</a>
                    </li> 
                    <li>
                        <a href="type.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'type.php' ? 'active' : '';?>">Type</a>
                    </li> 
                    <li>
                        <a href="product.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'product.php' ? 'active' : '';?>">Product</a>
                    </li> 
                    <li>
                        <a href="#register" data-toggle="modal" class="<?php echo basename($_SERVER['PHP_SELF']) == 'registration.php' ? 'active' : '';?>">Register</a>
                        
                    </li> 
                  </ul>
                  <div class="menu-bar d-md-none d-sm-block">
                      <i class="fas fa-bars"></i>
                  </div>
              </div>
            </div>
          </div>
        </div>
    </nav>
</header> <!-- end site header -->

<!-- sidebar menu -->
<aside class="mobile-menu-area">
    <div class="close-mobile-menu">
        <a href="javascript:void(0);">
          <i class="fas fa-times"></i>
        </a>
    </div>
    <!-- side-mobile-menu start -->
    <nav class="mobile-menu">
        <ul id="mobile-menu-active">
          <li>
              <a href="index.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : '';?>">Home</a>
          </li>
          <li>
              <a href="manufacture.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'manufacture.php' ? 'active' : '';?>">Manufacture</a>
          </li>
          <li>
              <a href="type.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'type.php' ? 'active' : '';?>">Product Type</a>
          </li>
          <li>
              <a href="product.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'product.php' ? 'active' : '';?>">Product</a>
          </li>
          <li>
              <a href="#register" data-toggle="modal" class="<?php echo basename($_SERVER['PHP_SELF']) == 'registration.php' ? 'active' : '';?>">Register</a>
          </li>
        </ul>
    </nav>
    <!-- side-mobile-menu end -->
</aside> <!-- end sidebar menu -->