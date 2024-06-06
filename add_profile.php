<!DOCTYPE html>
<html lang="en">

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Member The Prediksi</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <div class="card mx-auto" style="max-width: 500px;">
            <div class="card-body">
                <h3 class="card-title text-center">Add New Member The Prediksi</h3>
                <h6 class="card-subtitle mb-4 text-center">Jaya Jaya Jaya!</h6>
                <form action="profile_action.php" method="POST">
                    <input type="hidden" name="action" value="add">
                    <table class="table">
                        <tbody>
                            <tr>
                                <td><strong>Name</strong></td>
                                <td>:</td>
                                <td><input type="text" class="form-control" id="name" name="name" required></td>
                            </tr>
                            <tr>
                                <td><strong>Age</strong></td>
                                <td>:</td>
                                <td><input type="number" class="form-control" id="age" name="age" required></td>
                            </tr>
                            <tr>
                                <td><strong>Aliases</strong></td>
                                <td>:</td>
                                <td><input type="text" class="form-control" id="aliases" name="aliases" required></td>
                            </tr>
                            <tr>
                                <td><strong>Description</strong></td>
                                <td>:</td>
                                <td><textarea class="form-control" id="description" name="description" rows="3"
                                        required></textarea></td>
                            </tr>
                        </tbody>
                    </table>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="profile.php" class="btn btn-danger">Cancel</a>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>