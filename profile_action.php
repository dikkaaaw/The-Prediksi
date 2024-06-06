<?php
include "./conn.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['_method']) && $_POST['_method'] == 'PUT') {
        $id = $_POST['user_id'];
        $name = $_POST['name'];
        $age = $_POST['age'];
        $aliases = $_POST['aliases'];
        $description = $_POST['description'];

        $sql = "UPDATE users SET name='$name', age=$age, aliases='$aliases', description='$description' WHERE user_id='$id'";

        if ($conn->query($sql) === TRUE) {
            echo "Record updated successfully";
            header('Location: profile.php');
        } else {
            echo "Error updating record: " . $conn->error;
        }
    } else {
        // Add User
        $name = $_POST['name'];
        $age = $_POST['age'];
        $aliases = $_POST['aliases'];
        $description = $_POST['description'];

        $sql = "INSERT INTO users (name, age, aliases, description) VALUES ('$name', $age, '$aliases', '$description')";

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
            header('Location: profile.php');
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
} elseif (isset($_GET['action']) && $_GET['action'] == 'delete') {
    // Delete User
    $id = $_GET['id'];
    $sql = "DELETE FROM users WHERE user_id='$id'";

    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
        header('Location: profile.php');
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}

$conn->close();
?>