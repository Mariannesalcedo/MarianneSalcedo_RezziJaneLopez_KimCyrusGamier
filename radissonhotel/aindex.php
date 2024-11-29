<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Radisson Blu Admin Panel</title>
    <link rel="icon" href="assets/img/logo.jpg" type="image/x-icon">
  <link rel="stylesheet" href="admin.css">
  <!-- Add font-awesome for icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

</head>
<body>

  <div class="admin-container">
    <!-- Sidebar -->
    <?php   require 'assets/includes/sidebar.php'?>

    <!-- Main Content -->
    <main class="main-content">
      <?php require 'assets/includes/aheader.php'; ?>


      <!-- Main Dashboard Section -->
      <section class="dashboard">
        <h2>Dashboard Overview</h2>
        
      </section>
    </main>
  </div>

  <?php require 'assets/includes/footer.php'; ?>

</body>
</html>