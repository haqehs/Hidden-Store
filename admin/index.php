<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin Dashboard - Hidden Store</title>
	<!-- bootstrap css link -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="../style.css">
<!-- fontawesome link -->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel = "icon" href = "../images/store.png" 
        type = "image/x-icon">
</head>
<body>

<div class="container-fluid p-0">
	<!-- First Child -->
	<nav class="navbar navbar-expand-lg navbar-light bg-info">
<div class="container-fluid">
	<img src="../images/store.png" class="logo">
	<nav class="navbar navbar-expand-lg">
		<ul class="navbar-nav">
			<li class="nav-item">
				<a href="" class="nav-link">Welcome Guest</a>
			</li>
		</ul>
	</nav>
		</nav>
	</div>

<!--second child -->

	<div class="bg-light">
		<h3 class="text-center p-2">Manage Detailes</h3>
	</div>

	<!-- third child -->
	<div class="row">
		<div class="col-md-12 bg-secondary p-1 d-flex align-items-center">
			<div class="px-5"></div>
			<div>
			<a href=""><img src="../images/admin.jpg" class="admin_image my-3"></a>
			<p class="text-light text-center">Flaco</p>
		</div>
		<div class="button text-center">
			<button class="my-3"> <a href="insert_product.php" class="nav-link text-light bg-info my-1">Insert Product</a></button>
			<button> <a href="" class="nav-link text-light bg-info my-1">Veiw Product</a></button>
			<button> <a href="index.php?insert_category" class="nav-link text-light bg-info my-1">Insert Categories</a></button>
			<button> <a href="" class="nav-link text-light bg-info my-1">Veiw Product</a></button>
			<button> <a href="index.php?insert_brands" class="nav-link text-light bg-info my-1">Insert Brand</a></button>
			<button> <a href="" class="nav-link text-light bg-info my-1">Veiw Brand</a></button>
			<button> <a href="" class="nav-link text-light bg-info my-1">All Order</a></button>
			<button> <a href="" class="nav-link text-light bg-info my-1">All Payment</a></button>
			<button> <a href="" class="nav-link text-light bg-info my-1">List Products</a></button>
			<button> <a href="" class="nav-link text-light bg-info my-1">Logout</a></button>
			
		</div>
</div>
	</div>
</div>

<!-- fourth child -->
<div class="container my-5">
	<?php 
	if(isset($_GET['insert_category'])){
		include("insert_cat.php");
	}
	if(isset($_GET['insert_brands'])){
		include("insert_brand.php");
	}



	 ?>
</div>


	<!-- bootstrap js link -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>