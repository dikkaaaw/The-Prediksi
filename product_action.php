<?php
include_once 'conn.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['_method']) && $_POST['_method'] == 'PUT') {
        $id = $_POST['product_id'];
        $name = $_POST['name'];
        $price = $_POST['price'];
        $stock = $_POST['stock'];

        $sql = "UPDATE products SET name='$name', price=$price, stock='$stock' WHERE product_id='$id'";

        if ($conn->query($sql) === TRUE) {
            echo "Record updated successfully";
            header('Location: product.php');
        } else {
            echo "Error updating record: " . $conn->error;
        }

    } else {
        //Add Product
        $name = $_POST['name'];
        $price = $_POST['price'];
        $stock = $_POST['stock'];

        $query = "INSERT INTO products (name, price, stock) VALUES ('$name', '$price', '$stock')";
        if (mysqli_query($conn, $query)) {
            echo "Product added successfully.";
            header('Location: product.php');
        } else {
            echo "Error adding product: " . mysqli_error($conn);
        }
    }
} elseif (isset($_GET['action']) && $_GET['action'] == 'delete') {
    // Delete Product
    $id = $_GET['id'];
    $sql = "DELETE FROM products WHERE product_id='$id'";

    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
        header('Location: product.php');
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}
$conn->close();
?>