<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Radisson Blu Hotel | Presidential Suite Details</title>
    <link rel="icon" href="assets/img/logo.jpg" type="image/x-icon">
    <link rel="stylesheet" href="viewdetails.css">
    <link rel="stylesheet" href="styles.css">
</head>

<body>
  <?php require 'assets/includes/header.php'; ?>

    <?php
    // Simulated details for the Presidential Suite
    $details = [
        'title' => 'Presidential Suite – Radisson Blu Hotel',
        'image' => 'assets/img/pres.jpg', // Replace with your actual image
        'overview' => 'Indulge in the ultimate luxury experience in our Presidential Suite. This spacious suite features an exclusive living area, a master bedroom with a king-size bed, and breathtaking views of the city. Designed for comfort and style, this suite offers the finest amenities for the discerning traveler.',
        'features' => [
            'Space' => '150 sqm of lavish interiors',
            'View' => 'Panoramic views of the city and harbor',
            'Bed Options' => 'King-size bed with luxurious linens',
            'Design' => 'Elegant and sophisticated décor with rich fabrics and designer furnishings'
        ],
        'amenities' => [
            'Technology & Entertainment' => [
                'High-speed Wi-Fi',
                '75-inch flat-screen Smart TV with international channels',
                'Bluetooth-enabled sound system and private media center'
            ],
            'Comfort & Convenience' => [
                'Individually controlled air conditioning',
                'Dedicated office space with ergonomic chair',
                'Expansive living area with plush seating'
            ],
            'Refreshments' => [
                'Fully stocked minibar',
                'Complimentary coffee/tea maker with premium selection',
                'Complimentary bottled water and snacks'
            ],
            'Bathroom Features' => [
                'Marble bathroom with a soaking tub and rain shower',
                'Premium toiletries by Chanel and Hermes',
                'Plush bathrobes, slippers, and a sauna area'
            ]
        ],
        'additional_benefits' => [
            'Access to the exclusive executive lounge',
            'Personal butler service available 24/7',
            'Complimentary airport transfer',
            'Access to a private pool and spa area'
        ],
        'upgrades' => 'For even more luxury, upgrade to our Royal Suite, which offers a larger space, a private terrace, and access to a private dining area.',
        'price' => '1000 USD per night'
    ];
    ?>

    <section class="details-section">
        <div class="details-container">
            <img src="<?php echo $details['image']; ?>" alt="<?php echo $details['title']; ?>" class="details-image">
            <div class="details-content">
                <h1><?php echo $details['title']; ?></h1>
                <p><?php echo $details['overview']; ?></p>
                
                <h3>Key Features:</h3>
                <ul>
                    <?php foreach ($details['features'] as $feature => $value): ?>
                        <li><strong><?php echo $feature; ?>:</strong> <?php echo $value; ?></li>
                    <?php endforeach; ?>
                </ul>

                <h3>Room Amenities:</h3>
                <?php foreach ($details['amenities'] as $category => $items): ?>
                    <h4><?php echo $category; ?>:</h4>
                    <ul>
                        <?php foreach ($items as $item): ?>
                            <li><?php echo $item; ?></li>
                        <?php endforeach; ?>
                    </ul>
                <?php endforeach; ?>

                <h3>Additional Benefits:</h3>
                <ul>
                    <?php foreach ($details['additional_benefits'] as $benefit): ?>
                        <li><?php echo $benefit; ?></li>
                    <?php endforeach; ?>
                </ul>

                <h3>Upgrades:</h3>
                <p><?php echo $details['upgrades']; ?></p>

                <h2>Price: <?php echo $details['price']; ?></h2>
                <a href="booking.php" class="btn-primary">Book Now</a>
            </div>

            <?php require 'assets/includes/back.php'; ?>

        </div>
    </section>

    <footer>
    <div class="footer">
        <p>© 2024 Radisson Blu Hotel | All Rights Reserved. Serging Osmena Boulevard, Corner Pope John Paul II Ave, Cebu City, 6000 Cebu</p>
    </div>
</footer>

</body>

</html>
