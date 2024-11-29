<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Radisson Blu Hotel | Welcome</title>
    <link rel="icon" href="assets/img/logo.jpg" type="image/x-icon">
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <?php require 'assets/includes/header.php'; ?>    

    <section class="hero-section">
        <div class="hero-content">
            <h1>Welcome to Radisson Blu Hotel</h1>
            <p>Experience luxury, comfort, and world-class service in the heart of the city.</p>
            <a href="booking.php" class="btn-primary">Book Now</a>
        </div>
    </section>

    <section class="promo-section">
        <h2>Exclusive Offers</h2>
        <div class="promo-cards">
            <div class="promo-card">
                <img src="assets/img/weekend.png" alt="Offer 1">
                <h3>Weekend Getaway</h3>
                <p>Enjoy a 20% discount on weekend stays. Relax and rejuvenate with our exclusive weekend package.</p>
                <a href="#" class="btn-secondary">View Details</a>
            </div>
            <div class="promo-card">
                <img src="assets/img/fampromo.png" alt="Offer 2">
                <h3>Family Special</h3>
                <p>Book a family suite and get complimentary breakfast for the whole family.</p>
                <a href="#" class="btn-secondary">View Details</a>
            </div>
            <div class="promo-card">
                <img src="assets/img/busstrav.png" alt="Offer 3">
                <h3>Business Traveler</h3>
                <p>Stay productive with our business traveler package, offering premium rooms and meeting spaces.</p>
                <a href="#" class="btn-secondary">View Details</a>
            </div>
        </div>
    </section>

    <section class="featured-rooms">
        <h2>Featured Rooms</h2>
        <div class="room-cards">
            <div class="room-card">
                <img src="assets/img/deluxe.jpg" alt="Deluxe Room">
                <h3>Deluxe Room</h3>
                <p>Elegant design and modern amenities for a relaxing stay.</p>
                <a href="deluxedetails.php" class="btn-secondary">View Details</a>
            </div>
            <div class="room-card">
                <img src="assets/img/exec.jpg" alt="Executive Suite">
                <h3>Executive Suite</h3>
                <p>Spacious and luxurious suites, perfect for business or leisure.</p>
                <a href="execdetails.php" class="btn-secondary">View Details</a>
            </div>
            <div class="room-card">
                <img src="assets/img/pres.jpg" alt="Presidential Suite">
                <h3>Presidential Suite</h3>
                <p>The ultimate luxury experience with unparalleled service.</p>
                <a href="presdetails.php" class="btn-secondary">View Details</a>
            </div>
        </div>
    </section>

    <?php require 'assets/includes/footer.php'; ?>
</body>

</html>
