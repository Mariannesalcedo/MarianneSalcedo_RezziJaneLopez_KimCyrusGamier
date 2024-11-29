<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Radisson Blu Hotel | Contact Us</title>
    <link rel="icon" href="assets/img/logo.jpg" type="image/x-icon">
    <link rel="stylesheet" href="styles.css"> <!-- Main CSS -->
    <link rel="stylesheet" href="css/contact.css"> <!-- Contact CSS -->
</head>

<body>
    <?php require 'assets/includes/header.php'; ?>

    <section class="contact-section">
        <div class="contact-container">
            <div class="contact-info">
                <h1>Contact Us</h1>
                <p>If you have any questions or inquiries, feel free to reach out to us.</p>
                <div class="info-box">
                    <h2>Contact Information</h2>
                    <p><strong>Phone:</strong> +63953 710 8606</p>
                    <p><strong>Email:</strong> radissonblu.cebuhotel@gmail.com</p>
                    <p><strong>Location:</strong> Serging Osmena Boulevard, Corner Pope John Paul II Ave, Cebu City, 6000 Cebu, Philippines</p>
                </div>
            </div>
            <div class="contact-form">
                <h2>Inquiry Form</h2>
                <form action="#" method="post">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" placeholder="Your Name" required>

                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" placeholder="Your Email" required>

                    <label for="message">Message:</label>
                    <textarea id="message" name="message" rows="4" placeholder="Your Message" required></textarea>

                    <button type="submit" class="btn-primary">Send Message</button>
                </form>
            </div>
        </div>
    </section>

    <?php require 'assets/includes/footer.php'; ?>

    <script>
        // Any JavaScript functionality can be added here if needed
    </script>
</body>

</html>
