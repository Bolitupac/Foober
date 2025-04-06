<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Screen</title>
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap');

body {
    font-family: 'Poppins', sans-serif;
    background: linear-gradient(to bottom, #ff9900, #ff6600);
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}

.container {
    width: 350px;
    background: #fff;
    border-radius: 20px;
    padding: 25px;
    text-align: center;
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.3);
    position: relative;
}


/* Back Button */
.back-button {
    border: none;
    background: none;
    font-size: 16px;
    cursor: pointer;
    color: #333;
    position: absolute;
    left: 15px;
    top: 15px;
    z-index: 1;
}

/* Logo */
.logo {
    position: relative;
    z-index: 1;

}

.logo img {
    width: 80px;
    margin-top: 5px;
    border-radius: 50px;
}

/* Heading */
.heading {
    font-size: 22px;
    font-weight: 600;
    margin-bottom: 10px;
    position: relative;
    z-index: 1;
}

/* Signup Form */
.signup-form {
    margin-top: 15px;
    position: relative;
    z-index: 1;
}

.input-group {
    position: relative;
    margin-bottom: 15px;
}

.input-group input {
    width: 85%;
    padding: 12px;
    border: 1px solid #ddd;
    border-radius: 25px;
    font-size: 14px;
    padding-left: 40px;
}

.input-group .icon {
    position: absolute;
    left: 15px;
    top: 50%;
    transform: translateY(-50%);
    font-size: 16px;
    color: #999;
}

/* Terms and Conditions */
.terms {
    display: flex;
    align-items: center;
    font-size: 12px;
    color: #666;
    margin-bottom: 15px;
}

.terms input {
    margin-right: 8px;
}

.terms a {
    color: #ff6600;
    text-decoration: none;
    font-weight: bold;
}

/* Register Button */
.btn {
    width: 100%;
    padding: 12px;
    border: none;
    border-radius: 25px;
    font-size: 16px;
    cursor: pointer;
}

.register {
    background-color: #ff6600;
    color: #fff;
    transition: 0.3s;
}

.register:hover {
    background-color: #cc5500;
}

/* Login Link */
.login-text {
    font-size: 14px;
    margin-top: 15px;
}

.login-text a {
    color: #ff6600;
    text-decoration: none;
    font-weight: bold;
}
    </style>
</head>
<body>
    <div class="container">
        <a href="login.php"><button class="back-button">← Back</button></a>

        <!-- Logo -->
        <div class="logo">
            <img src="foober.jpg" alt="foober Logo">
        </div>

        <!-- Create Account Heading -->
        <h1 class="heading">Create Account</h1>

        <!-- Signup Form -->
        <form class="signup-form" method="post" action="register.php">
        <?php include('errors.php'); ?>
            <div class="input-group">
                <input type="text" placeholder="User Name" name="username" value="<?php echo $username; ?>" required>
                <span class="icon">👤</span>
            </div>

            <div class="input-group">
                <input type="email" placeholder="Email ID" name="email" value="<?php echo $email; ?>"required>
                <span class="icon">📧</span>
            </div>

            <div class="input-group">
                <input type="password" placeholder="Password" name="password_1" required>
                <span class="icon">🔒</span>
            </div>

            <div class="input-group">
                <input type="password" placeholder="Confirm Password" name="password_2" required>
                <span class="icon">🔒</span>
            </div>

            <!-- Terms and Conditions -->
            <div class="terms">
                <input type="checkbox" id="terms" required>
                <label for="terms">I agree to the <a href="#"> <a href="TandC.php">Terms and Conditions </a></label>
            </div>

            <button type="submit" class="btn register"type="submit" name="reg_user">Register Now</button>
        </form>



        <p class="login-text">Already have an account? <a href="login.php">Login</a></p>
    </div>
</body>
</html>