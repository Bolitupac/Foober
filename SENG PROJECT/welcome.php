<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Screen</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
    <style>
        h1{
            color: white;
            text-align: center;
            position:absolute;
            margin-bottom: 35%; 
        }
        h4{
            color: white;
            text-align: center;
            position:absolute;
            margin-bottom: 30%; 
        }
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap');

body {
    font-family: 'Poppins', sans-serif;
    background: linear-gradient(to bottom, #f08a05b0, #ff6600);
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}

.container {
    width: 320px;
    background: #fff;
    border-radius: 20px;
    padding: 20px;
    text-align: center;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
}

.logo img {
    width: 80px;
    margin-top: 20px;
    border-radius: 50px;
}

.buttons {
    margin-top: 20px;
}

.btn {
    width: 100%;
    padding: 12px;
    border: none;
    border-radius: 25px;
    font-size: 16px;
    cursor: pointer;
    margin: 5px 0;
}

.login {
    background-color: #ff6600;
    color: #fff;
}
.login:hover {
    background-color: #fff;
    border:2px solid #e65c00;
    color: #e65c00;
}


.register {
    background-color: #fff;
    color: #ff6600;
    border: 2px solid #ff6600;
}

.register:hover {
    background-color: #ff6600;
    color: #fff;
}





    </style>
</head>
<body>
    <h1>WELCOME TO FOOBER!</h1>
    <h4>....food ordering made fast & easy</h4>
    <div class="container">
        <div class="logo">
            <img src="foober.jpg" alt="foober logo">
        </div>
        <div class="buttons">
           <a href="login.php"><button class="btn login">Login</button></a>
            <a href="register.php"><button class="btn register">Register Now</button></a>
        </div>
    </div>
</body>
</html>