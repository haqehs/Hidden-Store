<?php
include("../includes/connect.php");
if (isset($_POST['product_insert'])) {
    global $con;
    $product_title = $_POST['product_title'];
    $discription = $_POST['discription'];
    $keyword = $_POST['keyword'];
    $product_category = $_POST['product_category'];
    $product_brands = $_POST['product_brands'];
    $product_price = $_POST['product_price'];
    $product_status = 'true';

    // Accessing images
    $product_image1 = $_FILES['product_image1']['name'];
    $product_image2 = $_FILES['product_image2']['name'];
    $product_image3 = $_FILES['product_image3']['name'];
    // Accessing temp names
    $tmp_image1 = $_FILES['product_image1']['tmp_name'];
    $tmp_image2 = $_FILES['product_image2']['tmp_name'];
    $tmp_image3 = $_FILES['product_image3']['tmp_name'];

    if ($product_title == "" or $discription == "" or $keyword == "" or $product_category == "" or $product_brands == "" or $product_price == "" or $product_image1 == "" or $product_image2 == "" or $product_image3 == "" or $tmp_image1 == "" or $tmp_image2 == "" or $tmp_image3 == "") {
        echo "<script>alert('All fields are required !!')</script>";
    } else {
        move_uploaded_file($tmp_image1, "./product_images/$product_image1");
        move_uploaded_file($tmp_image2, "./product_images/$product_image2");
        move_uploaded_file($tmp_image3, "./product_images/$product_image3");
        // inserting query
        $insert_query = "INSERT into `products` (product_title, product_keyword, category_id, brand_id, product_image1, product_image2, product_image3, product_price, product_description, date, status) values ('$product_title', '$keyword', '$product_category', '$product_brands', '$product_image1', '$product_image2', '$product_image3', '$product_price', '$discription', NOW(), '$product_status')";

        $result = mysqli_query($con, $insert_query);
        if ($result) {
            echo "<script>alert('Data successfully inserted into DB')</script>";
        } else {
            echo "An err occured";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Insert Product - Admin Dashboard</title>
	<!-- bootStrap css link -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<!-- FontAwesome Link -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="bg-light">
<div class="container mt-3">
	<h1 class="text-center">Insert Products</h1>

<!-- form -->
<form action="" method="post" enctype="multipart/form-data">
	<div class="form-outline mb-4 w-50 m-auto">
		<!-- Title -->
		<label for="product_title" class="form-label">
			Product Title
		</label>
		<input type="text" name="product_title" id="product_title" class="form-control" placeholder="Product Title" autocomplete="off" required>
	</div>
	<!-- discription -->
	<br>
	<div class="form-outline mb-4 w-50 m-auto">
		<label for="discription" class="form-label">
			Product discription
		</label>
		<input type="text" name="discription" id="discription" class="form-control" placeholder="Product discription" autocomplete="off" required>
	</div>
<!-- keyword -->
<br>
	<div class="form-outline mb-4 w-50 m-auto">
		<label for="keyword" class="form-label">
			Product keyword
		</label>
		<input type="text" name="keyword" id="keyword" class="form-control" placeholder="Product Keyword" autocomplete="off" required>
	</div>
	<!-- Categories -->
<br>
	<div class="form-outline mb-4 w-50 m-auto">
	Select Categorie

		<select name="product_category" id="" class="form-select">
		<option value="">Select a Categorie</option>
			<?php
			$select_query = "SELECT * from `categories`";
			$result_query = mysqli_query($con,$select_query);
			while ($row = mysqli_fetch_assoc($result_query)){
				$category_title = $row['category_title'];
				$category_id = $row['category_id'];
				echo "<option value='$category_id'>$category_title</option>";
			}
?>
		<!-- <option value="">Categories</option>
		<option value="">Categories</option>
		<option value="">Categories</option>
		<option value="">Categories</option> -->
		</select>
	</div>

	<!-- Brand -->
<br>

	<div class="form-outline mb-4 w-50 m-auto">
	Select Brand
		<select name="product_brands" id="" class="form-select">
		<option value="">Select a Brand</option>

			<?php
			$select_brand = "SELECT * from `brands`";
			$result_brand = mysqli_query($con,$select_brand);
			while($brand_row = mysqli_fetch_assoc($result_brand)){
				$brand_title = $brand_row['brand_title'];
				$brand_id = $brand_row['brand_id'];
				echo "<option value='$brand_id'>$brand_title</option>";
			}

?>
<!-- 		
		<option value="">Brand2</option>
		<option value="">Brand3</option>
		<option value="">Brand4</option>
		<option value="">Brand5</option>  -->
		</select>
	</div>
	
	<!-- image -->
<br>
	<div class="form-outline mb-4 w-50 m-auto">
		<label for="product_image1" class="form-label">
			Product image1
		</label>
		<input type="file" name="product_image1" class="form-control" id="product_image1" required>
	</div>
 <!-- image2 -->
	<br>
	<div class="form-outline mb-4 w-50 m-auto">
		<label for="product_image2" class="form-label">
			Product image2
		</label>
		<input type="file" name="product_image2" class="form-control" id="product_image2" required>
	</div>

	<!-- image3 -->
	<br>
	<div class="form-outline mb-4 w-50 m-auto">
		<label for="product_image3" class="form-label">
			Product image3
		</label>
		<input type="file" name="product_image3" class="form-control" id="product_image3" required>
	</div>

	<!-- price -->
	<br>
	<div class="form-outline mb-4 w-50 m-auto">
		<label for="product_price" class="form-label">
			Product price
		</label>
		<input type="text" name="product_price" class="form-control" id="product_price" placeholder="Enter Price" required>
	</div>

	<!-- insert -->
	<br>
	<div class="form-outline mb-4 w-50 m-auto">
		<input type="submit" value="Insert Products" name="product_insert" class="btn btn-info mb-3 px-3">
	</div>
</form>
</div>
</body>
</html>