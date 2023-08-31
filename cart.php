<?php
include("includes/connect.php");
include("./functions/functions.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Hidden Store - Cart Details</title>
	<!-- bootStrap css link -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<!-- FontAwesome Link -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" type="text/css" href="./style.css">
  <link rel = "icon" href = "images/store.png" 
        type = "image/x-icon">
        <style>
          .cart_img{
            width: 50px;
            height: 50px;
            object-fit: contain;
          }
        </style>
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
    </ul>
    
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
?>
</div>
</div>
<div class="container">
    <div class="row">
      <form action="" method="post">
        <table class="table table-bordered text-center">
            <thead>
                <tr>
                    <th>Product Title</th>
                    <th>Product Image</th>
                    <th>Quantity</th>
                    <th>Total Price</th>
                    <th>Remove</th>
                    <th colspan="2">Operations</th>

                </tr>
            </thead>
            <tbody>
              <?php
               global $con;
               $price = 0;
               $get_ip = getIPAddress();
               $cart_query = "SELECT * from `cart_details` where ip_address='$get_ip'";
               $result_query = mysqli_query($con,$cart_query);
               while($row = mysqli_fetch_array($result_query)){
                 $product_id = $row['product_id'];
                 $select_product = "SELECT * from `products` where product_id='$product_id'";
                 $result_products = mysqli_query($con,$select_product);
                 while($row_product_price = mysqli_fetch_array($result_products)){
                   $productPrice = array($row_product_price['product_price']);
                   $price_table = $row_product_price['product_price'];
                   $product_title = $row_product_price['product_title'];
                   $product_image = $row_product_price['product_image1'];

                   $total_price = array_sum($productPrice);
                   $price += $total_price;
             
             
            
              ?>
                <tr>
                    <td><?php echo $product_title; ?></td>
                    <td><img src="./images/<?php echo $product_image; ?>" class="cart_img"></td>
                    <td><input type="text" class="form-input w-50" name="qty"></td>
                    <?php
                    $get_ip = getIPAddress();
                    if(isset($_POST['update_cart'])){
                      $quantaties = $_POST['qty'];
                      $update_cart = "UPDATE `cart_details` set quantity=$quantaties where ip_address='$get_ip'";
                      $update_qty = mysqli_query($con,$update_cart);
                      $price = $price*$quantaties;
                    }
                    ?>
                    <td><?php echo $price_table; ?>/-</td>
                    <td><input type="checkbox"></td>
                    <td>
                       <!-- <button class='bg-info px-3 py-2 border-0 mx-3'>Update</button> -->
                       <input type="submit" name="update_cart" value='Update' id="" class='bg-info px-3 py-2 border-0 mx-3'>
                       <button class='bg-info px-3 py-2 border-0 mx-3'>Remove</button>
                    </td>
                </tr>
                <?php    }
             } ?>
            </tbody>
        </table>
        <div class="d-flex mb-5">
            <h4 class="px-3">Subtotal: <strong class="text-info"><?php echo $price; ?>/-</strong></h4>
            <a href="index.php"><button class="bg-info px-3 py-2 border-0 mx-3">Continue Shopping</button></a>
            <a href="index.php"><button class="bg-secondary p-2 py-2 border-0 text-light">Checkout</button></a>
        </div>
    </div>
</div>
</form>
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