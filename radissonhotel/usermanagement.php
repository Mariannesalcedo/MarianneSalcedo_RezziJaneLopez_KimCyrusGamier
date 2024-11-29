<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Radisson Blu Admin Panel</title>
  <link rel="icon" href="assets/img/logo.jpg" type="image/x-icon">
  <link rel="stylesheet" href="admin.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>
<body>
  <div class="admin-container">
    <!-- Sidebar -->
    <?php require 'assets/includes/sidebar.php'; ?>

    <!-- Header -->
    <?php require 'assets/includes/aheader.php'; ?>

    <!-- Main Content -->
    <main class="main-content">
      <div class="mt-3">
        <table class="table">
          <thead>
            <tr class="table-danger">
              <th>USER ID</th>
              <th>FULL NAME</th>
              <th>EMAIL ADDRESS ID</th>
              <th>PHONE NUMBER</th>
              <th>REGISTRATION DATE</th>
              <th>ACTION</th>
            </tr>
          </thead>
          <?php
            require 'db_con.php'; // Include database connection
            $sql = "SELECT * FROM users";
            $stmt = $pdo->query($sql);
          ?>
          <tbody>
            <?php foreach ($stmt as $data): ?>
              <tr>
                <td><?= $data['userID'] ?></td>
                <td><?= $data['fullname'] ?></td>
                <td><?= $data['email'] ?></td>
                <td><?= $data['phone_number'] ?></td>
                <td><?= $data['registration_Date'] ?></td>
                <td>
                  <a href="editform.php"><button class="btn btn-success">Edit</button></a>
                  <a href="deleteform.php"><button class="btn btn-danger">Deactivate</button></a>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </main>
  </div>

  <?php require 'assets/includes/footer.php'; ?>
</body>
</html>