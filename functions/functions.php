<?php
include("./includes/connect.php");

// getting products
function getProduct(){
  global $con;
  // condition to check brand ot cat isset or not
  if(!isset($_GET['category'])){
    if(!isset($_GET['brand'])){
	$select_query = "SELECT * from `products` order by rand() limit 0,6";
      $fetch_result = mysqli_query($con,$select_query);
      while ($row = mysqli_fetch_assoc($fetch_result)) {
        $card_id = $row['product_id'];
        $card_title = $row['product_title'];
        $card_discription = $row['product_description'];
        $brands_id = $row['brand_id'];
        $categories_id = $row['category_id'];
        $card_price = $row['product_price'];
        $card_image = $row['product_image1'];
        $card_image2 = $row['product_image2'];
        $card_image3 = $row['product_image3'];

        echo "<div class='col-md-4 mb-2'>
        <div class='card'>
        <img src='./admin/product_images/$card_image' class='card-img-top' alt='$card_title'>
        <div class='card-body'>
          <h5 class='card-title'>$card_title</h5>
          <p class='card-text'>$card_discription</p>
          <p class='card-text'>Price :  ₹$card_price/-</p>

         <a href='index.php?add_to_cart=$card_id' class='btn btn-info'>Add to Cart</a>
          <a href='products_detail.php?product_id=$card_id' class='btn btn-secondary'>Veiw more</a>
        </div>
      </div>
      </div>";
      }
}
  }
}
// display all products
function getAllProducts(){
  global $con;
  // condition to check brand ot cat isset or not
  if(!isset($_GET['category'])){
    if(!isset($_GET['brand'])){
	$select_query = "SELECT * from `products` order by rand()";
      $fetch_result = mysqli_query($con,$select_query);
      while ($row = mysqli_fetch_assoc($fetch_result)) {
        $card_id = $row['product_id'];
        $card_title = $row['product_title'];
        $card_discription = $row['product_description'];
        $brands_id = $row['brand_id'];
        $categories_id = $row['category_id'];
        $card_price = $row['product_price'];
        $card_image = $row['product_image1'];
        $card_image2 = $row['product_image2'];
        $card_image3 = $row['product_image3'];
        echo "<div class='col-md-4 mb-2'>
        <div class='card'>
        <img src='./admin/product_images/$card_image' class='card-img-top' alt='$card_title'>
        <div class='card-body'>
          <h5 class='card-title'>$card_title</h5>
          <p class='card-text'>$card_discription</p>
          <p class='card-text'>Price :  ₹$card_price/-</p>

          <a href='index.php?add_to_cart=$card_id' class='btn btn-info'>Add to Cart</a>
         <a href='products_detail.php?product_id=$card_id' class='btn btn-secondary'>Veiw more</a>
        </div>
      </div>
      </div>";
      }
}
  }
}
// displaying unique categorie
function getUniqueCategory(){
  global $con;
  // condition to check brand ot cat isset or not
  if(isset($_GET['category'])){
    $category_id = $_GET['category'];
	$select_query = "SELECT * from `products` where category_id=$category_id";
      $fetch_result = mysqli_query($con,$select_query);
      $num_row = mysqli_num_rows($fetch_result);
      if($num_row == 0){
        echo "<h2 class='d-inline-flex p-5 text-center text-danger'>Sorry, no products are avaliable for this category.</h2>";
      }
      while ($row = mysqli_fetch_assoc($fetch_result)) {
        $card_id = $row['product_id'];
        $card_title = $row['product_title'];
        $card_discription = $row['product_description'];
        $brands_id = $row['brand_id'];
        $categories_id = $row['category_id'];
        $card_price = $row['product_price'];
        $card_image = $row['product_image1'];
        $card_image2 = $row['product_image2'];
        $card_image3 = $row['product_image3'];
        echo "<div class='col-md-4 mb-2'>
        <div class='card'>
        <img src='./admin/product_images/$card_image' class='card-img-top' alt='$card_title'>
        <div class='card-body'>
          <h5 class='card-title'>$card_title</h5>
          <p class='card-text'>$card_discription</p>
          <p class='card-text'>Price :  ₹$card_price/-</p>

          <a href='index.php?add_to_cart=$card_id' class='btn btn-info'>Add to Cart</a>
         <a href='products_detail.php?product_id=$card_id' class='btn btn-secondary'>Veiw more</a>
        </div>
      </div>
      </div>";
      }
}
  }
// displaying brand as per id 
function getUniqueBrand(){
  global $con;
  // condition to check brand ot cat isset or not
  if(isset($_GET['brand'])){
    $brand_id = $_GET['brand'];
	$select_query = "SELECT * from `products` where brand_id=$brand_id";
      $fetch_result = mysqli_query($con,$select_query);
      $num_row = mysqli_num_rows($fetch_result);
      if($num_row == 0){
        echo "<h2 class='d-inline-flex p-5 text-center text-danger'>Sorry, no products are avaliable for this brand.</h2>";
      }
      while ($row = mysqli_fetch_assoc($fetch_result)) {
        $card_id = $row['product_id'];
        $card_title = $row['product_title'];
        $card_discription = $row['product_description'];
        $brands_id = $row['brand_id'];
        $categories_id = $row['category_id'];
        $card_price = $row['product_price'];
        $card_image = $row['product_image1'];
        $card_image2 = $row['product_image2'];
        $card_image3 = $row['product_image3'];
        echo "<div class='col-md-4 mb-2'>
        <div class='card'>
        <img src='./admin/product_images/$card_image' class='card-img-top' alt='$card_title'>
        <div class='card-body'>
          <h5 class='card-title'>$card_title</h5>
          <p class='card-text'>$card_discription</p>
          <p class='card-text'>Price :  ₹$card_price/-</p>

          <a href='index.php?add_to_cart=$card_id' class='btn btn-info'>Add to Cart</a>
         <a href='products_detail.php?product_id=$card_id' class='btn btn-secondary'>Veiw more</a>
        </div>
      </div>
      </div>";
      }
}
  }

// getting brands
function getBrand(){
  global $con;
  $select_brand = "SELECT * from `brands`";
  $result_brands = mysqli_query($con, $select_brand);
  while ($row_data = mysqli_fetch_assoc($result_brands)){
    $brand_title = $row_data['brand_title'];
    $brand_id = $row_data['brand_id'];
    echo '<li class="nav-item">
        <a href="index.php?brand='.$brand_id.'" class="nav-link text-light">' . $brand_title . '</a>
      </li>';
  };
}

// displaying categories 
function getCategories(){
  global $con;
  $select_category = "SELECT * from `categories`";
  $result_category = mysqli_query($con, $select_category);
  while ($row_data = mysqli_fetch_assoc($result_category)){
    $category_title = $row_data['category_title'];
    $category_id = $row_data['category_id'];
    echo '<li class="nav-item">
        <a href="index.php?category='.$category_id.'" class="nav-link text-light">' . $category_title . '</a>
      </li>';
  };
}

// get searched product
function search_product(){
      global $con;
      if(isset($_GET['search_data_product'])){
      $search_data = $_GET['search_data'];
      $search_query = "SELECT * FROM `products` WHERE product_keyword LIKE '%$search_data%'";
      $fetch_result = mysqli_query($con,$search_query);
      while ($row = mysqli_fetch_assoc($fetch_result)) {
        $card_id = $row['product_id'];
        $card_title = $row['product_title'];
        $card_discription = $row['product_description'];
        $brands_id = $row['brand_id'];
        $categories_id = $row['category_id'];
        $card_price = $row['product_price'];
        $card_image = $row['product_image1'];
        $card_image2 = $row['product_image2'];
        $card_image3 = $row['product_image3'];
        echo "<div class='col-md-4 mb-2'>
        <div class='card'>
        <img src='./admin/product_images/$card_image' class='card-img-top' alt='$card_title'>
        <div class='card-body'>
          <h5 class='card-title'>$card_title</h5>
          <p class='card-text'>$card_discription</p>
          <p class='card-text'>Price :  ₹$card_price/-</p>

          <a href='index.php?add_to_cart=$card_id' class='btn btn-info'>Add to Cart</a>
         <a href='products_detail.php?product_id=$card_id' class='btn btn-secondary'>Veiw more</a>
        </div>
      </div>
      </div>";
      }
}
}
// veiw more
function veiwMore(){
  global $con;
  // condition to check brand ot cat isset or not
  if(isset($_GET['product_id'])){
    $product_id = $_GET['product_id'];
  if(!isset($_GET['category'])){
    if(!isset($_GET['brand'])){
	$select_query = "SELECT * from `products` where product_id=$product_id";
      $fetch_result = mysqli_query($con,$select_query);
      while ($row = mysqli_fetch_assoc($fetch_result)) {
        $card_id = $row['product_id'];
        $card_title = $row['product_title'];
        $card_discription = $row['product_description'];
        $brands_id = $row['brand_id'];
        $categories_id = $row['category_id'];
        $card_price = $row['product_price'];
        $card_image = $row['product_image1'];
        $card_image2 = $row['product_image2'];
        $card_image3 = $row['product_image3'];

        echo "<div class='col-md-4 mb-2'>
        <div class='card'>
        <img src='./admin/product_images/$card_image' class='card-img-top' alt='$card_title'>
        <div class='card-body'>
          <h5 class='card-title'>$card_title</h5>
          <p class='card-text'>$card_discription</p>
          <p class='card-text'>Price :  ₹$card_price/-</p>

         <a href='#' class='btn btn-info'>Add to Cart</a>
          <a href='index.php' class='btn btn-secondary p-2 rem'>Go Home</a>
        </div>
      </div>
      </div>
      
      
      <div class='col-md-8'>
            <div class='row'>
                <div class='col-md-12'>
                    <h4 class='text-center text-info mb-5'>
                        Related Images
                    </h4>
                </div>
                <div class='col-md-6'>
                <img src='./images/$card_image2' class='card-img-top' alt='$card_title'>
                </div>
                <div class='col-md-6'>
                <img src='./images/$card_image3' class='card-img-top' alt='$card_title'>
                </div>
            </div>";
      }
}
  }
}}
// getting ip address 
function getIPAddress() {  
  //whether ip is from the share internet  
   if(!empty($_SERVER['HTTP_CLIENT_IP'])) {  
              $ip = $_SERVER['HTTP_CLIENT_IP'];  
      }  
  //whether ip is from the proxy  
  elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {  
              $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];  
   }  
//whether ip is from the remote address  
  else{  
           $ip = $_SERVER['REMOTE_ADDR'];  
   }  
   return $ip;  
}  
// $ip = getIPAddress();  
// echo 'User Real IP Address - '.$ip;

function cart(){
  if(isset($_GET['add_to_cart'])) {
    global $con;
    $get_ip = getIPAddress();
    $get_product_id = $_GET['add_to_cart'];
    $select_query = "SELECT * from `cart_details` where ip_address='$get_ip' and product_id = $get_product_id";
    $result_query = mysqli_query($con,$select_query);
    $num_of_rows = mysqli_num_rows($result_query);
    if($num_of_rows > 0){
      echo "<script>alert('Item alredy present in cart!!')</script>";
      echo "<script>window.open('index.php','_self')</script>";
    }else{
      $insert_query = "INSERT into `cart_details` (product_id,ip_address,quantity) values ($get_product_id,'$get_ip',0)";
      $result_query = mysqli_query($con,$insert_query);
      echo "<script>alert('Item sucessfully added to Cart !!')</script>";
      echo "<script>window.open('index.php','_self')</script>";
    }
  }
}
// function to add cart number 
function cartItem(){
  if(isset($_GET['add_to_cart'])) {
    global $con;
    $get_ip = getIPAddress();
    $select_query = "SELECT * from `cart_details` where ip_address='$get_ip'";
    $result_query = mysqli_query($con,$select_query);
    $num_of_rows = mysqli_num_rows($result_query);
    }else{
      global $con;
    $get_ip = getIPAddress();
    $select_query = "SELECT * from `cart_details` where ip_address='$get_ip'";
    $result_query = mysqli_query($con,$select_query);
    $num_of_rows = mysqli_num_rows($result_query);
    }
    echo $num_of_rows;
  }
// function for total price 
function totalCartPrice(){
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
      $total_price = array_sum($productPrice);
      $price += $total_price;


  }
}
echo $price;
}
?>