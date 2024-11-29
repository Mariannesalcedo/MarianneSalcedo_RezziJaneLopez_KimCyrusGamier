<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Radisson Blu Hotel | Deluxe Room Details</title>
    <link rel="icon" href="assets/img/logo.jpg" type="image/x-icon">
    <link rel="stylesheet" href="viewdetails.css">
    <link rel="stylesheet" href="styles.css">
</head>

<body>
  <?php require 'assets/includes/header.php'; ?>

    <?php
    // Simulated details for the Deluxe Room
    $details = [
        'title' => 'Deluxe Room – Radisson Blu Hotel',
        'image' => 'assets/img/deluxe.jpg',
        'overview' => 'Experience refined luxury in our Deluxe Room, where elegance meets comfort. Designed with modern aesthetics and equipped with premium amenities, our Deluxe Room is perfect for both business and leisure travelers. Enjoy stunning city views, exceptional service, and the tranquility you deserve during your stay.',
        'features' => [
            'Space' => '35–40 sqm of sophisticated interiors',
            'View' => 'Panoramic city skyline or serene courtyard',
            'Bed Options' => 'King-size or Twin beds with plush linens',
            'Design' => 'Contemporary décor with warm tones and stylish accents'
        ],
        'amenities' => [
            'Technology & Entertainment' => [
                'High-speed Wi-Fi',
                '50-inch flat-screen Smart TV with international channels',
                'Bluetooth-enabled sound system'
            ],
            'Comfort & Convenience' => [
                'Individually controlled air conditioning',
                'Ergonomic work desk with executive chair',
                'Seating area with a lounge chair and coffee table'
            ],
            'Refreshments' => [
                'Fully stocked minibar',
                'Complimentary coffee/tea maker with premium selection',
                'Complimentary bottled water'
            ],
            'Bathroom Features' => [
                'Marble bathroom with walk-in rain shower or soaking tub',
                'Premium toiletries by Rituals/Elemis',
                'Plush bathrobes and slippers'
            ]
        ],
        'additional_benefits' => [
            'Access to the fitness center and outdoor pool',
            '24/7 room service and in-room dining',
            'Daily housekeeping with evening turndown service',
            'Complimentary access to the business center'
        ],
        'upgrades' => 'For an elevated experience, upgrade to a Business Class Room or Suite, which includes additional perks like lounge access, complimentary breakfast, and evening cocktails.',
        'price' => '150 USD per night'
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

            <?php   require 'assets/includes/back.php' ;?>
            
        </div>
    </section>

    <footer>
    <div class="footer">
        <p>© 2024 Radisson Blu Hotel | All Rights Reserved. Serging Osmena Boulevard, Corner Pope John Paul II Ave, Cebu City, 6000 Cebu</p>
    </div>
</footer>
</body>

</html>
