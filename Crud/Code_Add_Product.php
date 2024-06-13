<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Atmiya_Ecommerce";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $product_name = $_POST['product_name'];
    $product_description = $_POST['product_description'];
    $product_category = $_POST['product_category'];
    $product_price = $_POST['product_price'];
    
    // Handling file upload
    if (isset($_FILES['product_images'])) {
        $targetDirectory = "product_image/"; // Directory to store the images

        if (!file_exists($targetDirectory)) {
            mkdir($targetDirectory, 0777, true);
        }

        $fileCount = count($_FILES['product_images']['name']);
        $uploadedFileNames = [];

        for ($i = 0; $i < $fileCount; $i++) {
            $fileName = $_FILES['product_images']['name'][$i]; // Retrieve the file name
            $tempName = $_FILES['product_images']['tmp_name'][$i];
            $targetPath = $targetDirectory . basename($fileName);

            if (move_uploaded_file($tempName, $targetPath)) {
                $uploadedFileNames[] = $targetPath;
            } else {
                echo "Failed to move file.";
            }
        }

        // SQL query to insert data into the table
        $sql = "INSERT INTO Product_Details (product_name, product_description, product_category, product_price, image_filenames) 
                VALUES ('$product_name', '$product_description', '$product_category', '$product_price', '" . implode(",", $uploadedFileNames) . "')";

        if (mysqli_query($conn, $sql)) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
}

mysqli_close($conn);
?>
