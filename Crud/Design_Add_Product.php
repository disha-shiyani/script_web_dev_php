<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard - Add Product</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
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

<!-- Sidebar -->
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
    <div class="row">
        <div class="col-md-12">
            <h2>Add Product</h2>
            <form action="Code_Add_Product.php" method="post" enctype="multipart/form-data">
                <!-- Required Fields -->
                <div class="form-group">
                    <label for="productName">Product Name *</label>
                    <input type="text" class="form-control" id="productName" name="product_name" required>
                </div>
                <div class="form-group">
                    <label for="productDescription">Product Description *</label>
                    <textarea class="form-control" id="productDescription" name="product_description" rows="3" required></textarea>
                </div>
                <div class="form-group">
                    <label for="productCategory">Product Category *</label>
                    <input type="text" class="form-control" id="productCategory" name="product_category" required>
                </div>
                <div class="form-group">
                    <label for="productPrice">Product Price *</label>
                    <input type="number" class="form-control" id="productPrice" name="product_price" step="0.01" required>
                </div>
                <div class="form-group">
                    <label for="productImages">Product Images *</label>
                    <input type="file" class="form-control-file" id="productImages" name="product_images[]" multiple required accept="image/*">
                </div>

                <!-- Optional Fields -->
                <div class="form-group">
                    <label for="productSKU">Product SKU</label>
                    <input type="text" class="form-control" id="productSKU" name="product_sku">
                </div>
                <div class="form-group">
                    <label for="productBarcode">Product Barcode</label>
                    <input type="text" class="form-control" id="productBarcode" name="product_barcode">
                </div>
                <div class="form-group">
                    <label for="productWeight">Product Weight (kg)</label>
                    <input type="number" class="form-control" id="productWeight" name="product_weight">
                </div>
                <div class="form-group">
                    <label for="productDimensions">Product Dimensions (L x W x H)</label>
                    <input type="text" class="form-control" id="productDimensions" name="product_dimensions">
                </div>
                <div class="form-group">
                    <label for="productQuantity">Product Quantity</label>
                    <input type="number" class="form-control" id="productQuantity" name="product_quantity">
                </div>
                <div class="form-group">
                    <label for="productVariants">Product Variants</label>
                    <input type="text" class="form-control" id="productVariants" name="product_variants">
                </div>
                <div class="form-group">
                    <label for="shippingInfo">Product Shipping Information</label>
                    <input type="text" class="form-control" id="shippingInfo" name="shipping_info">
                </div>
                <div class="form-group">
                    <label for="seoInfo">Product SEO Information</label>
                    <input type="text" class="form-control" id="seoInfo" name="seo_info">
                </div>
                <div class="form-group">
                    <label for="productBrand">Product Brand</label>
                    <input type="text" class="form-control" id="productBrand" name="product_brand">
                </div>
                <div class="form-group">
                    <label for="productFeatures">Product Features</label>
                    <textarea class="form-control" id="productFeatures" name="product_features"></textarea>
                </div>
                <div class="form-group">
                    <label for="productBenefits">Product Benefits</label>
                    <textarea class="form-control" id="productBenefits" name="product_benefits"></textarea>
                </div>
                <div class="form-group">
                    <label for="relatedProducts">Related Products</label>
                    <input type="text" class="form-control" id="relatedProducts" name="related_products">
                </div>
                <div class="form-group">
                    <label for="productReviews">Product Reviews</label>
                    <textarea class="form-control" id="productReviews" name="product_reviews"></textarea>
                </div>
                <button type="submit" class="btn btn-primary mt-3">Add Product</button>
            </form>
        </div>
    </div>
</div>
    </div>
</div>

<!-- Footer -->
<footer class="bg-light text-center text-lg-start mt-4">
    <div class="text-center p-3">
        &copy; 2023 Your E-commerce
    </div>
</footer>

<!-- Bootstrap JS and jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
