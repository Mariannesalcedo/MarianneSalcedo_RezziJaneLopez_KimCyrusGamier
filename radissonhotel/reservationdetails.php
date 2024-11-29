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
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
  

  <div class="admin-container">
    <!-- Sidebar -->
    <?php   require 'assets/includes/sidebar.php'?>

    <!-- Main Content -->
    <main class="main-content">
      <?php require 'assets/includes/aheader.php'; ?>


      <div class="mt-3">          
    <table class="table">
    <thead>
      <tr>
      <table class="table table-danger table-striped">
        <th>RESERVATION ID</th>
        <th>FULL NAME</th>
        <th>EMAIL ADDRESS ID</th>
        <th>PHONE NUMBER</th>
        <th>CHECK IN DATE</th>
        <th>CHECK OUT DATE</th>
        <th>GUEST NUMBER</th>
        <th>ROOM TYPE</th>
        <th>SPECIAL REQUEST</th>
        <th>ACTION</th>
      </tr>
    </thead> 
<?php
  require 'db_con.php'; //Include the database connection file

  $sql = "SELECT * FROM reservation";
  $stmt = $pdo->query($sql);

  // foreach ($stmt as $data) {
 // echo $data['branch_name']. ' '.$data['location']. ' '.$data['zipcode'].'<br>';
  // }
?>
<tbody>
  <?php foreach ($stmt as $data):?>
      <tr>
        <td><?=$data['reservation_id']?></td>
        <td><?=$data['fullname']?></td>
        <td><?=$data['email']?></td>
        <td><?=$data['phonenumber']?></td>
        <td><?=$data['checkindate']?></td>
        <td><?=$data['checkoutdate']?></td>
        <td><?=$data['guestnumber']?></td>
        <td><?=$data['roomtype']?></td>
        <td><?=$data['specialrequest']?></td>
        <td>
        <a href="reseditform.php?reservation_id=<?=$data['reservation_id']?>"><button class="btn btn-success ">Edit</button></a>
        <a href="reservationdetails.php"><button name="delete_reservation" class="btn btn-danger">Delete</button></a>
        </td>
        </tr>
        <?php endforeach;?>
  </tbody>
  </table>
      </div>
    </main>
  </div>

  <?php require 'assets/includes/footer.php'; ?>

</body>
</html>
