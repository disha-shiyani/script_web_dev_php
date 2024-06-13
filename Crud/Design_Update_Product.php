<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard - Add Product</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<style>
<style>
        .card-img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }
    </style>
</style>
<body>

<!-- Header -->
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">E-commerce Admin</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Logout</a>
                </li>
            </ul>
        </div>
    </nav>
</header>
<body>
<div class="container-fluid mt-4">
    <div class="row">
        <div class="col-md-3">
            <div class="list-group">
                <a href="Design_Add_Product.php" class="list-group-item list-group-item-action">Add Product</a>
                <a href="Design_Update_Product.php" class="list-group-item list-group-item-action">Update Product</a>
                <a href="Design_Delete_Product.php" class="list-group-item list-group-item-action">Delete Product</a>
                <a href="#" class="list-group-item list-group-item-action">User Management</a>
                <a href="#" class="list-group-item list-group-item-action">Category Management</a>
            </div>
        </div>
<div class="container mt-4">
    <?php
  //  $servername = "localhost";
    ///$username = "root";
    /*$password = "";
    $dbname = "Atmiya_Ecommerce";
*/
    $conn = mysqli_connect("localhost", "root", "", "Atmiya_Ecommerce");

   
    $sql = "SELECT * FROM Product_Details";
    $result = mysqli_query($conn, $sql);
//print_r($result);
/*$fetch=mysqli_fetch_row($result);
print_r($fetch);
echo $fetch[1];*/
  echo '<div class="table-responsive">';
    echo '<table class="table table-striped">';
    echo '<thead>';
    echo '<tr>';
    echo '<th>ID</th>';
    echo '<th>Product Name</th>';
    echo '<th>Product Description</th>';
    echo '<th>Product Category</th>';
    echo '<th>Product Price</th>';
	  echo '<th>Product Image</th>';
    echo '<th>Action Update</th>';
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';

    while ($row = mysqli_fetch_assoc($result)) {
        echo '<tr>';
        echo '<td>' . $row['product_id'] . '</td>';
        echo '<td>' . $row['product_name'] . '</td>';
        echo '<td>' . $row['product_description'] . '</td>';
        echo '<td>' . $row['product_category'] . '</td>';
        echo '<td>' . $row['product_price'] . '</td>';
		 echo '<td><img src='.$row['image_filenames'].' class=card-img></td>';
        echo '<td><a href="edit_product.php?id=' . $row['product_id'] . '">Update</a></td>';
        echo '</tr>';
    }

    echo '</tbody>';
    echo '</table>';
    echo '</div>';

    mysqli_close($conn);
    ?>
	
	<center><h3><a href="index.php">Click here to go to dashboard </a></h3></center>
</div>
</body>
</html>
