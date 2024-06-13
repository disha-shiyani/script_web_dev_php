<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Client Interface</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .card-img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">E-commerce Store</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Sign Up</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <!-- Main Content -->
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-3">
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action">Home</a>
                    <a href="#" class="list-group-item list-group-item-action">Categories</a>
                    <a href="#" class="list-group-item list-group-item-action">About</a>
                    <a href="#" class="list-group-item list-group-item-action">Contact</a>
                </div>
            </div>

            <div class="col-md-9">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search for products" aria-label="Search" aria-describedby="search-button">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="button" id="search-button">Search</button>
                    </div>
                </div>
                <div class="row">
                    <?php
                        $servername = "localhost";
                        $username = "root";
                        $password = "";
                        $dbname = "atmiya_ecommerce";

                        // Create connection
                        $conn = new mysqli($servername, $username, $password, $dbname);

                        if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                        }

                        $sql = "SELECT * FROM product_details"; // Replace 'products' with your table name
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo '
                                <div class="col-md-4 mb-4">
                                    <div class="card">
                                        <img src="' . $row["image_filenames"] . '" class="card-img" alt="Product Image">
                                        <div class="card-body">
                                            <h5 class="card-title">' . $row["product_name"] . '</h5>
                                            <p class="card-text">' . $row["product_description"] . '</p>
                                            <p class="card-text">Price: $' . $row["product_price"] . '</p>
                                            <a href="#" class="btn btn-primary">View Details</a>
                                        </div>
                                    </div>
                                </div>';
                            }
                        } else {
                            echo "0 results";
                        }
                        $conn->close();
                    ?>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-light text-center text-lg-start mt-4">
        <div class="text-center p-3">
            &copy; 2023 E-commerce Store
        </div>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
