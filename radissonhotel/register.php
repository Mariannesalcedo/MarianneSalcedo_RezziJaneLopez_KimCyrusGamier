<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Radisson Blu Hotel | Register</title>
    <link rel="icon" href="assets/img/logo.jpg" type="image/x-icon">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="css/register.css">
</head>
<body>
    <?php require 'assets/includes/header.php'; ?>

    <section class="registration-section">
        <div class="container">
            <h1>Create an Account</h1>
            <p>Join us for an exclusive experience at Radisson Blu!</p>
            <form class="registration-form" action="access.php" method="post">
                <div class="form-group">
                    <label for="fullname">Full Name:</label>
                    <input type="text" id="fullname" name="fullname" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <div class="form-group">
                    <label for="confirm-password">Confirm Password:</label>
                    <input type="password" id="confirm-password" name="confirm_password" required>
                </div>
                <div class="form-group">
                    <label for="phone_number">Phone Number:</label>
                    <input type="tel" id="phone_number" name="phone_number" required>
                </div>
                
                <button name="register" class="btn btn-primary w-100" type="submit">Create Account</button>
                <p class="login-link">Already have an account? <a href="login.php">Login here</a>
            </form>
        </div>
    </section>

    <?php require 'assets/includes/footer.php'; ?>
</body>
</html>