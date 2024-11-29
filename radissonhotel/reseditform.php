<?php
include 'db_con.php';
// Check if the contact id exists, for example update.php?id=1 will get the contact with the id of 1
if (isset($_GET['reservation_id'])) {
    if (!empty($_POST)) {
        // This part is similar to the create.php, but instead we update a record and not insert
        $id = isset($_POST['reservation_id']) ? $_POST['reservation_id'] : NULL;
        $fulname = isset($_POST['fullname']) ? $_POST['fullname'] : '';
        $email = isset($_POST['email']) ? $_POST['email'] : '';
        $phone = isset($_POST['phonenumber']) ? $_POST['phonenumber'] : '';
        $checkindate = isset($_POST['checkindate']) ? $_POST['checkindate'] : '';
        $checkoutdate = isset($_POST['checkoutdate']) ? $_POST['checkoutdate'] : '';
        $guestnumber = isset($_POST['guestnumber']) ? $_POST['guestnumber'] : '';
        $roomtype = isset($_POST['roomtype']) ? $_POST['roomtype'] : '';
        $specialrequest = isset($_POST['specialrequest']) ? $_POST['specialrequest'] : '';
        // Update the record
        $stmt = $pdo->prepare('UPDATE reservation SET reservation_id = ?, fullname = ?, email = ?, phone = ?, checkindate = ?, checkoutdate = ?, guestnumber = ?, roomtype = ?, specialrequest = ? WHERE reservation_id = ?');
        $stmt->execute([$id, $fullname, $email, $phone, $checkindate, $checkoutdate,  $guestnumber, $roomtype, $specialrequest, $_GET['reservation_id']]);
        $msg = 'Updated Successfully!';
    }
    // Get the contact from the contacts table
    $stmt = $pdo->prepare('SELECT * FROM reservation WHERE reservation_id = ?');
    $stmt->execute([$_GET['reservation_id']]);
    $reservation = $stmt->fetch(PDO::FETCH_ASSOC);
    if (!$reservation) {
        exit('Contact doesn\'t exist with that ID!');
    }
} else {
    exit('No ID specified!');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Reservation</title>
    <link rel="stylesheet" href="booking.css">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
</head>
<body>
<section class="booking-section">
<class="form-container">
	<h2>Update Reservation</h2>
    <form action="functions.php" method="post">
    <div class="form-group">
        <label for="id">ID</label>
        <input type="text" name="reservation_" placeholder="" value="<?=$reservation['reservation_id']?>" id="reservation_id">
        </div>
        <div class="form-group">
                    <label for="fullname">Full Name</label>
                    <input type="text" name="fullname" placeholder=" " value="<?=$reservation['fullname']?>" id="fullname" >
                </div>
                
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" name="email" placeholder=" " value="<?=$reservation['email']?>" id="email" >
                </div>
                <div class="form-group">
                    <label for="phonenumber">Phone Number</label>
                    <input type="tel" name="phonenumber" placeholder=" " value="<?=$reservation['phonenumber']?>" id="phonenumber" >
                </div>
                <div class="form-group">
                    <label for="checkindate">Check-In Date</label>
                    <input type="date" name="checkindate" placeholder=" " value="<?=$reservation['checkindate']?>" id="checkindate" >
                </div>
                <div class="form-group">
                    <label for="checkoutdate">Check-Out Date</label>
                    <input type="date" name="checkoutdate" placeholder=" " value="<?=$reservation['checkoutdate']?>" id="checkoutdate" >
                </div>
                <div class="form-group">
                    <label for="guestnumber">Number of Guests</label>
                    <select name="guestnumber" placeholder=" " value="<?=$reservation['guestnumber']?>" id="guestnumber" >
                        <option value="1" >1</option>
                        <option value="2" >2</option>
                        <option value="3" >3</option>
                        <option value="4+">4+</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="roomtype">Room Type</label>
                    <select name="roomtype" placeholder=" " value="<?=$reservation['roomtype']?>" id="roomtype" >
                        <option value="standard">Standard Room</option>
                        <option value="deluxe">Deluxe Room</option>
                        <option value="suite">Suite</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="specialrequest">Special Requests</label>
                    <textarea name="specialrequest" placeholder=" " value="<?=$reservation['specialrequest']?>" id="specialrequest" ></textarea>
                </div>
                <button type="submit" name="updateReservation" class="btn-primary">
                    <i class="icon fas fa-save"></i> Update Reservation
                </button>
    </form>

</div>
</section>

</body>
</html>
