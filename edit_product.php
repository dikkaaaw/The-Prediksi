<?php
include "./conn.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Merchandise</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <div class="card mx-auto" style="max-width: 500px;">
            <div class="card-body">
                <h3 class="card-title text-center">Edit Merchandise The Prediksi</h3>
                <h6 class="card-title text-center">Jaya Jaya Jaya!</h6>
                <?php
                if (isset($_GET['id'])) {
                    $id = $_GET['id'];

                    // Mengambil data user berdasarkan ID
                    $query = "SELECT * FROM products WHERE product_id = '$id'";
                    $result = mysqli_query($conn, $query);

                    // Memeriksa apakah data ditemukan
                    if (mysqli_num_rows($result) > 0) {
                        $product = mysqli_fetch_assoc($result);
                    } else {
                        echo "Data product tidak ditemukan.";
                        exit;
                    }
                } else {
                    echo "ID product tidak diberikan.";
                    exit;
                }
                ?>

                <form action="product_action.php" method="POST">
                    <input type="hidden" name="_method" value="PUT">

                    <div class="mb-3">
                        <label for="name" class="form-label"><strong>Name</strong></label>
                        <input type="text" class="form-control" id="name" name="name" value="<?= $product['name']; ?>"
                            required>
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label"><strong>Price</strong></label>
                        <input type="number" class="form-control" id="price" name="price"
                            value="<?= $product['price']; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="stock" class="form-label"><strong>Stock</strong></label>
                        <input type="number" class="form-control" id="stock" name="stock"
                            value="<?= $product['stock']; ?>" required>
                    </div>
                    <input type="hidden" name="product_id" value="<?= $product['product_id'] ?>">
                    <input type="hidden" name="action" value="update">
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="product.php" class="btn btn-danger">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</body>

</html>