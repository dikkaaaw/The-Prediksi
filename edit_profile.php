<?php
include "./conn.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Member</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <div class="card mx-auto" style="max-width: 500px;">
            <div class="card-body">
                <h3 class="card-title text-center">Edit Member The Prediksi</h3>
                <h6 class="card-title text-center">Jaya Jaya Jaya!</h6>
                <?php
                if (isset($_GET['id'])) {
                    $id = $_GET['id'];

                    // Mengambil data user berdasarkan ID
                    $query = "SELECT * FROM users WHERE user_id = '$id'";
                    $result = mysqli_query($conn, $query);

                    // Memeriksa apakah data ditemukan
                    if (mysqli_num_rows($result) > 0) {
                        $user = mysqli_fetch_assoc($result);
                    } else {
                        echo "Data user tidak ditemukan.";
                        exit;
                    }
                } else {
                    echo "ID user tidak diberikan.";
                    exit;
                }
                ?>

                <form action="profile_action.php" method="POST">
                    <input type="hidden" name="_method" value="PUT">

                    <div class="mb-3">
                        <label for="name" class="form-label"><strong>Name</strong></label>
                        <input type="text" class="form-control" id="name" name="name" value="<?= $user['name']; ?>"
                            required>
                    </div>
                    <div class="mb-3">
                        <label for="age" class="form-label"><strong>Age</strong></label>
                        <input type="number" class="form-control" id="age" name="age" value="<?= $user['age']; ?>"
                            required>
                    </div>
                    <div class="mb-3">
                        <label for="aliases" class="form-label"><strong>Aliases</strong></label>
                        <input type="text" class="form-control" id="aliases" name="aliases"
                            value="<?= $user['aliases']; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label"><strong>Description</strong></label>
                        <textarea class="form-control" id="description" name="description" rows="3"
                            required><?= $user['description']; ?></textarea>
                    </div>
                    <input type="hidden" name="user_id" value="<?= $user['user_id'] ?>">
                    <input type="hidden" name="action" value="update">
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="profile.php" class="btn btn-danger">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</body>

</html>