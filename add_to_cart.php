<?php
include 'connect.php';

// Get data from POST request
$product_name = $_POST['product_name'];
$price = $_POST['price'];
$quantity = $_POST['quantity'];
$size = $_POST['size'];

// Insert data into the table
$sql = "INSERT INTO cart_db (product_name, price, quantity, size) VALUES ('$product_name', $price, $quantity, '$size')";
if ($conn->query($sql) === TRUE) {
    echo "Product added to cart!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
