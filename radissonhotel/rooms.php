<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Radisson Blu Hotel | Rooms and Rates</title>
    <link rel="icon" href="assets/img/logo.jpg" type="image/x-icon">
    <link rel="stylesheet" href="styles.css"> <!-- Link to your main stylesheet -->
    <link rel="stylesheet" href="css/rooms.css">
</head>

<body>
    <?php require 'assets/includes/header.php'; ?>

    <section class="room-filter">
        <h1>Rooms and Rates</h1>
        <p>Find the perfect room for your stay.</p>
        <div class="filter-options">
            <label for="room-type">Room Type:</label>
            <select id="room-type">
                <option value="all">All</option>
                <option value="deluxe">Deluxe Room</option>
                <option value="executive">Executive Suite</option>
                <option value="presidential">Presidential Suite</option>
                <option value="standard">Standard Room</option>
                <option value="junior">Junior Suite</option>
                <option value="family">Family Suite</option>
                <option value="penthouse">Penthouse Suite</option>
            </select>

            <label for="season">Season:</label>
            <select id="season">
                <option value="standard">Standard</option>
                <option value="peak">Peak</option>
                <option value="off-peak">Off-Peak</option>
            </select>

            <label for="sort">Sort by:</label>
            <select id="sort">
                <option value="rate-asc">Price: Low to High</option>
                <option value="rate-desc">Price: High to Low</option>
                <option value="popularity">Popularity</option>
            </select>
        </div>
    </section>

    <section class="room-list">
        <div class="room-card">
            <img src="assets/img/deluxe.jpg" alt="Deluxe Room">
            <h3>Deluxe Room</h3>
            <p>An elegant and comfortable room designed for relaxation.</p>
            <p>Rates:</p>
            <ul>
                <li>Standard: $150/night</li>
                <li>Peak: $200/night</li>
                <li>Off-Peak: $120/night</li>
            </ul>
            <a href="deluxedetails.php" class="btn-secondary">View Details</a>
        </div>

        <div class="room-card">
            <img src="assets/img/exec.jpg" alt="Executive Suite">
            <h3>Executive Suite</h3>
            <p>Spacious and luxurious, ideal for both business and leisure.</p>
            <p>Rates:</p>
            <ul>
                <li>Standard: $300/night</li>
                <li>Peak: $400/night</li>
                <li>Off-Peak: $250/night</li>
            </ul>
            <a href="execdetails.php" class="btn-secondary">View Details</a>
        </div>

        <div class="room-card">
            <img src="assets/img/pres.jpg" alt="Presidential Suite">
            <h3>Presidential Suite</h3>
            <p>The epitome of luxury with top-notch service and amenities.</p>
            <p>Rates:</p>
            <ul>
                <li>Standard: $600/night</li>
                <li>Peak: $800/night</li>
                <li>Off-Peak: $500/night</li>
            </ul>
            <a href="presdetails.php" class="btn-secondary">View Details</a>
        </div>

        <div class="room-card">
            <img src="assets/img/standard.jpg" alt="Standard Room">
            <h3>Standard Room</h3>
            <p>A cozy room with essential amenities for a comfortable stay.</p>
            <p>Rates:</p>
            <ul>
                <li>Standard: $100/night</li>
                <li>Peak: $150/night</li>
                <li>Off-Peak: $80/night</li>
            </ul>
            <a href="#" class="btn-secondary">View Details</a>
        </div>

        <div class="room-card">
            <img src="assets/img/junior.jpg" alt="Junior Suite">
            <h3>Junior Suite</h3>
            <p>Spacious and well-appointed for both leisure and business travelers.</p>
            <p>Rates:</p>
            <ul>
                <li>Standard: $180/night</li>
                <li>Peak: $230/night</li>
                <li>Off-Peak: $150/night</li>
            </ul>
            <a href="#" class="btn-secondary">View Details</a>
        </div>

        <div class="room-card">
            <img src="assets/img/famsuite.jpg" alt="Family Suite">
            <h3>Family Suite</h3>
            <p>Perfect for families, offering spacious living areas and amenities.</p>
            <p>Rates:</p>
            <ul>
                <li>Standard: $350/night</li>
                <li>Peak: $450/night</li>
                <li>Off-Peak: $300/night</li>
            </ul>
            <a href="#" class="btn-secondary">View Details</a>
        </div>

        <div class="room-card">
            <img src="assets/img/penhouse.jpg" alt="Penthouse Suite">
            <h3>Penthouse Suite</h3>
            <p>Luxurious suite designed for romantic getaways.</p>
            <p>Rates:</p>
            <ul>
                <li>Standard: $500/night</li>
                <li>Peak: $700/night</li>
                <li>Off-Peak: $400/night</li>
            </ul>
            <a href="#" class="btn-secondary">View Details</a>
        </div>
    </section>

    <?php require 'assets/includes/footer.php'; ?>

    <script>
        // JavaScript code for filtering and sorting can be added here.
        // Functionality can include updating the room list based on selected filters and sorting.
    </script>
</body>

</html>
