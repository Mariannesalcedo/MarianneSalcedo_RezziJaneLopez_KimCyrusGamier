<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Radisson Blu Booking</title>
    <link rel="icon" href="assets/img/logo.jpg" type="image/x-icon">
    <link rel="stylesheet" href="booking.css">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<body>
    <?php require 'assets/includes/header.php'; ?>

    <!-- Booking Form Section -->
    <section class="booking-section">
        <div class="form-container">
            <h1>Book Your Stay</h1>
            <form action="create.php" method="post">
                <div class="form-group">
                    <label for="fullname">Full Name</label>
                    <input type="text" id="fullname" name="fullname" placeholder="Enter your full name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" name="email" placeholder="Enter your email address" required>
                </div>
                <div class="form-group">
                    <label for="phonenumber">Phone Number</label>
                    <input type="tel" id="phonenumber" name="phonenumber" placeholder="Enter your phone number" required>
                </div>
                <div class="form-group">
                    <label for="checkindate">Check-In Date</label>
                    <input type="date" id="checkindate" name="checkindate" required>
                </div>
                <div class="form-group">
                    <label for="checkoutdate">Check-Out Date</label>
                    <input type="date" id="checkoutdate" name="checkoutdate" required>
                </div>
                <div class="form-group">
                    <label for="guestnumber">Number of Guests</label>
                    <select id="guestnumber" name="guestnumber" required>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4+">4+</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="roomtype">Room Type</label>
                    <select id="roomtype" name="roomtype" required>
                        <option value="standard">Standard Room</option>
                        <option value="deluxe">Deluxe Room</option>
                        <option value="suite">Suite</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="specialrequest">Special Requests</label>
                    <textarea id="specialrequest" name="specialrequest" placeholder="Enter any special requests"></textarea>
                </div>
                <button name="booking"  type="submit" class="btn-primary">
                    <i class="icon fas fa-check-circle"></i> Book Now
                </button>

            </form>
        </div>

        <?php   require 'assets/includes/back.php' ;?>
    </section>

    <!-- Footer Section -->
    <?php require 'assets/includes/footer.php'; ?>
</body>
</html>
