<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Radisson Blu Hotel | Executive Suite Details</title>
    <link rel="icon" href="assets/img/logo.jpg" type="image/x-icon">
    <link rel="stylesheet" href="viewdetails.css">
    <link rel="stylesheet" href="styles.css">
</head>

<body>
  <?php require 'assets/includes/header.php'; ?>

    <?php
    // Simulated details for the Executive Suite
    $details = [
        'title' => 'Executive Suite – Radisson Blu Hotel',
        'image' => 'assets/img/exec.jpg',
        'overview' => 'Indulge in unparalleled luxury with our Executive Suite, designed for the discerning traveler who demands the best in comfort and style. With spacious interiors, premium amenities, and stunning views, this suite offers a haven of relaxation and sophistication.',
        'features' => [
            'Space' => '70 sqm of expansive living space',
            'View' => 'Panoramic views of the city or ocean',
            'Bed Options' => 'King-size bed with premium linens',
            'Design' => 'Elegant contemporary design with luxurious furnishings'
        ],
        'amenities' => [
            'Technology & Entertainment' => [
                'High-speed Wi-Fi',
                '65-inch flat-screen Smart TV with international channels',
                'Dolby Atmos sound system'
            ],
            'Comfort & Convenience' => [
                'Individually controlled air conditioning',
                'Spacious work desk with executive chair',
                'Separate living area with sofa and coffee table'
            ],
            'Refreshments' => [
                'Fully stocked minibar',
                'Complimentary coffee/tea maker with premium selection',
                'Complimentary bottled water'
            ],
            'Bathroom Features' => [
                'Luxurious marble bathroom with soaking tub and walk-in rain shower',
                'Premium toiletries by Aesop',
                'Plush bathrobes and slippers'
            ]
        ],
        'additional_benefits' => [
            'Access to the exclusive Executive Lounge',
            'Priority check-in and late checkout',
            'Complimentary airport transfer (upon request)',
            '24/7 in-room dining and concierge service'
        ],
        'upgrades' => 'Upgrade to the Presidential Suite for even more exclusive amenities, such as a private jacuzzi, panoramic views, and a personal butler service.',
        'price' => '500 USD per night'
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
