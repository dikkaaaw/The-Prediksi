<?php

include "./conn.php"

  ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Prediksi Motor Club</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link rel="stylesheet" href="./assets/css/index.css" />
  <link
    href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
    rel="stylesheet" />
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container-fluid d-flex justify-content-between">
      <div>
        <img src="./assets/image/logo_prediksi.jpg" class="img-fluid rounded-5" alt="" />
      </div>
      <div>
        <a class="navbar-brand" href="index.php"><strong>PREDIKSI CLUB</strong></a>
      </div>
      <div>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample"
          aria-controls="offcanvasExample">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasExample"
          aria-labelledby="offcanvasExampleLabel">
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasExampleLabel">
              <strong>THE PREDIKSI CLUB</strong>
            </h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="index.php
                  ">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="profile.php
                  ">Profile</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="about_us.php">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="product.php">Merchandise</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </nav>

  <div class="container-fluid mt-4">
    <div class="container mt-5">
      <h2 class="text-center">Anggota The Prediksi</h2>
      <h5 class="text-center mb-4">Jaya Jaya Jaya!</h5>
      <a href="add_profile.php" class="btn btn-primary mb-3">Add Member</a>
      <table class="table table-striped table-bordered">
        <thead class="table-dark text-center">
          <tr>
            <th scope="col">Nama</th>
            <th scope="col">Umur</th>
            <th scope="col">Julukan</th>
            <th scope="col">Description</th>
            <th scope="col">Action</th>
          </tr>
        </thead>

        <?php
        $sql = "SELECT user_id, name, age, aliases, description FROM users";
        $result = $conn->query($sql);
        ?>

        <tbody class="text-center">
          <?php
          if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
              echo "<tr>";
              echo "<td>" . $row["name"] . "</td>";
              echo "<td>" . $row["age"] . "</td>";
              echo "<td>" . $row["aliases"] . "</td>";
              echo "<td>" . $row["description"] . "</td>";
              echo "<td>";
              echo "<a href='edit_profile.php?id=" . $row["user_id"] . "' class='btn btn-success btn-sm'>Edit</a> ";
              echo "<button class='btn btn-danger btn-sm' onclick='confirmDelete(" . $row["user_id"] . ")'>Hapus</button>";
              echo "</td>";
              echo "</tr>";
            }
          } else {
            echo "<tr><td colspan='5'>Tidak ada data</td></tr>";
          }
          ?>
        </tbody>
      </table>
    </div>
  </div>
  <!-- Modal -->
  <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="deleteModalLabel">Konfirmasi Hapus</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Apakah Anda yakin ingin menghapus pengguna ini?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
          <a id="confirmDeleteBtn" class="btn btn-danger">Hapus</a>
        </div>
      </div>
    </div>
  </div>

  <script>
    function confirmDelete(userId) {
      const deleteModal = new bootstrap.Modal(document.getElementById('deleteModal'), {
        keyboard: false
      });
      document.getElementById('confirmDeleteBtn').href = 'profile_action.php?action=delete&id=' + userId;
      deleteModal.show();
    }
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>