<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Atmiya_Ecommerce";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    $product_id = $_GET['id'];

    $sql = "DELETE FROM Product_Details WHERE product_id = '$product_id'";
    if (mysqli_query($conn, $sql)) {
        mysqli_close($conn);
        header("Location: Design_Delete_Product.php");
        exit; // Stop further execution
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
}
?>
