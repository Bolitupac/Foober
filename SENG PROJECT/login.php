<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Screen</title>
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
}

/* Logo */
.logo img {
    width: 80px;
    margin-top: 5px;
    border-radius: 50px;
}

/* Greeting */
.greeting {
    font-size: 26px;
    font-weight: 600;
    margin-bottom: 5px;
}

.subtext {
    font-size: 14px;
    color: #666;
}

/* Login Form */
.login-form {
    margin-top: 15px;
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

.forgot-password {
    display: block;
    text-align: right;
    font-size: 12px;
    color: #ff6600;
    margin-bottom: 15px;
}

.btn {
    width: 100%;
    padding: 12px;
    border: none;
    border-radius: 25px;
    font-size: 16px;
    cursor: pointer;
}

.login {
    background-color: #ff6600;
    color: #fff;
    transition: 0.3s;
}

.login:hover {
    background-color: #cc5500;
}


/* Register Link */
.register-text {
    font-size: 14px;
    margin-top: 15px;
}

.register-text a {
    color: #ff6600;
    text-decoration: none;
    font-weight: bold;
}
    </style>
</head>
<body>
    <div class="container">
        <a href="welcome.php"><button class="back-button">← Back</button></a>

        <!-- Logo -->
        <div class="logo">
            <img src="foober.jpg" alt="foober Logo">
        </div>

        <!-- Greeting -->
        <h1 class="greeting">Hello</h1>
        <p class="subtext">Sign into your Account</p>

        <!-- Login Form -->
        <form class="login-form" method="post" action="login.php">
        <?php include('errors.php'); ?>
            <div class="input-group">
                <input type="username" placeholder="username" name="username" required>
                <span class="icon">📧</span>
            </div>

            <div class="input-group">
                <input type="password" placeholder="Password" name="password" required>
                <span class="icon">🔒</span>
            </div>

            <a href="#" class="forgot-password">Forgot your Password?</a>

            <button type="submit" class="btn login" name="login_user">Login</button>
        </form>


        <p class="register-text">Don't have an account? <a href="register.php">Register Now</a></p>
    </div>
</body>
</html>