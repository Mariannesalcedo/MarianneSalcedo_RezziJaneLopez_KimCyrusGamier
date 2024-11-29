<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Radisson Blu Hotel | Login</title>
    <link rel="icon" href="assets/img/logo.jpg" type="image/x-icon">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="styles.css">
</head>

<body class="body">
    <?php require 'assets/includes/header.php'; ?>

    <section class="login-section">
        <div class="hero-login">
            <h1>Login</h1>
            <form action="access.php" method="POST" class="row g-3 needs-validation" novalidate></form>
            <form class="login-form" action="aindex.php" method="post">
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" placeholder="Enter your email" required>
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" placeholder="Enter your password" required>
                </div>
                <button type="submit" class="btn-primary">Login</button>
                <p class="register-link">Don't have an account? <a href="register.php">Register here</a>
            </form>
        </div>
    </section>

    <?php require 'assets/includes/footer.php'; ?>
</body>

</html>