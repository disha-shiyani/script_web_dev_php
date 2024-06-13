<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Product</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Atmiya_Ecommerce";

$conn = mysqli_connect($servername, $username, $password, $dbname);



if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['update'])) {
    $product_id = $_POST['product_id'];
    $product_name = $_POST['product_name'];
    $product_description = $_POST['product_description'];
    $product_category = $_POST['product_category'];
    $product_price = $_POST['product_price'];

    // Handle file upload
    if (isset($_FILES['product_image']) && $_FILES['product_image']['error'] == UPLOAD_ERR_OK) {
        $targetDirectory = "product_image/";
        $fileName = $_FILES['product_image']['name'];
        $tempName = $_FILES['product_image']['tmp_name'];
        $targetPath = $targetDirectory . basename($fileName);

        if (move_uploaded_file($tempName, $targetPath)) {
            // Update product details along with the image file name
            $sql = "UPDATE Product_Details 
                    SET product_name = '$product_name', product_description = '$product_description', 
                    product_category = '$product_category', product_price = '$product_price', 
                    image_filenames = '$fileName' 
                    WHERE product_id = '$product_id'";

            if (mysqli_query($conn, $sql)) {
                echo "Record updated successfully";
            } else {
                echo "Error updating record: " . mysqli_error($conn);
            }
        } else {
            echo "Failed to move file.";
        }
    } else {
        // Update product details without the image file name
        $sql = "UPDATE Product_Details 
                SET product_name = '$product_name', product_description = '$product_description', 
                product_category = '$product_category', product_price = '$product_price' 
                WHERE product_id = '$product_id'";

        if (mysqli_query($conn, $sql)) {
            echo "Record updated successfully";
        } else {
            echo "Error updating record: " . mysqli_error($conn);
        }
    }
}

if (isset($_GET['id'])) {
    $product_id = $_GET['id'];

    $sql = "SELECT * FROM Product_Details WHERE product_id = '$product_id'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    ?>

        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <input type="hidden" name="product_id" value="<?php echo $row['product_id']; ?>">
            <div class="form-group">
                <label for="product_name">Product Name</label>
                <input type="text" class="form-control" id="product_name" name="product_name" value="<?php echo $row['product_name']; ?>">
            </div>
            <div class="form-group">
                <label for="product_description">Product Description</label>
                <textarea class="form-control" id="product_description" name="product_description"><?php echo $row['product_description']; ?></textarea>
            </div>
            <div class="form-group">
                <label for="product_category">Product Category</label>
                <input type="text" class="form-control" id="product_category" name="product_category" value="<?php echo $row['product_category']; ?>">
            </div>
            <div class="form-group">
                <label for="product_price">Product Price</label>
                <input type="number" class="form-control" id="product_price" name="product_price" value="<?php echo $row['product_price']; ?>">
            </div>
			<div class="form-group">
            <label for="product_image">Product Image</label>
            <input type="file" class="form-control-file" id="product_image" name="product_image">
        </div>
            <button type="submit" name="update" class="btn btn-primary">Update Product</button>
        </form>
    <?php
    }
    mysqli_close($conn);
    ?>
</div>
</body>
</html>
