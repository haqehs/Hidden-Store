<?php
include("includes/connect.php");
include("./functions/functions.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Hidden Store</title>
	<!-- bootStrap css link -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<!-- FontAwesome Link -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" type="text/css" href="./style.css">
  <link rel = "icon" href = "images/store.png" 
        type = "image/x-icon">
</head>
<body>
<div class="container-fluid p-0">
<nav class="navbar navbar-expand-lg navbar-light bg-info">
  <img src="images/store.png" class="logo">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="display_all.php">Products</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Register</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="cart.php"><i class="fa-solid fa-cart-shopping"></i><sup><?php cartItem(); ?></sup></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Total Price : ₹<?php totalCartPrice(); ?>/-</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0" action="search_product.php" method="get">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="search_data">
      <input type="submit" value="Search" class="btn btn-outline-light" name="search_data_product">
    </form>
  </div>
</nav>
</div>
<!-- second child-->
<nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
  <ul class="navbar-nav me-auto">
    <li class="nav-item">
        <a class="nav-link" href="#">Welcome Guest</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Login</a>
      </li>
  </ul>
</nav>
<!-- third child -->
<div class="bg-light">
  <h3 class="text-center p-2">Hidden Store</h3>
  <p class="text-center">Communication is at the heart of e-commerce and community</p>
</div>
<!-- fourth child -->
<div class="row">
  <div class="col-md-10">
    <!-- Products -->
    <div class="row">
      <?php
      // calling func()
      cart();
      getProduct();
      getUniqueCategory();
      getUniqueBrand();
      // $ip = getIPAddress();  
      // echo 'User Real IP Address - '.$ip;  
?>
</div>
</div>
  <div class="col-md-2 bg-secondary p-0">
    <!-- sidenav -->
    <ul class="navbar-nav me-auto text-center">
      <li class="nav-item bg-info">
        <a href="/" class="nav-link text-light"><h4>Delivery Brand</h4></a>
      </li>
<?php
 // getting brand by calling func
  getBrand();
?>
    </ul>
    <ul class="navbar-nav me-auto text-center">
      <li class="nav-item bg-info">
        <a href="/" class="nav-link text-light"><h4>Categories</h4></a>
        <?php
  // displaying categories by calling func
  getCategories();
?>
  </li>
    </ul>
  </div>
<?php
include("./includes/footer.php");
?>
</div>
	<!-- bootStrap js link -->
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>