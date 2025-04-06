<?php
session_start();

if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
}
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="menuStyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="shortcut icon" href="../favicon.png" type="image/x-icon">
    <title>Menu</title>
</head>
<body>
    <nav class="nav-bar">
        <div class="left-section">
            <div class="hamburger" id="hamburger-btn" onclick="toggleSidebar()">&#9776;</div>
            <div class="logo">
                <img src="picture/logo.jpg" alt="">
                <span>Foober</span>
            </div>
        </div>
        <div class="search-bar">
            <input type="text" placeholder="Search for food...">
        </div>
        <div class="icons">
            <a href="cart.php" style="color: white;"> <i class="fas fa-shopping-cart"><span id="cart-count">0</span></i></a>
            <a href="profile.php" style="color: white;"> <i class="fas fa-user"></i></a>
            <i class="fas fa-bell"></i>
        </div>
    </nav>

    <div class="sidebar" id="sidebar">
        <span class="close-btn" onclick="toggleSidebar()">&times;</span>
        <ul>
            <li><a href="menu.php">Home</a></li>
            <li><a href="fastfood.php">Fast Food</a></li>
            <li><a href="dessert.php">Dessert</a></li>
        </ul>
    </div>

    <section class="categories">
        <div class="category">
            <li>
                <ul><a href="menu.php">Home</a></ul>
                <ul><a href="fastfood.php">Fast Food</a></ul>
                <ul><a href="dessert.php">Dessert</a></ul>
            </li>
        </div>
    </section>

    <section class="home">
        <h2>African Food</h2>
        <div class="home-container">
            <div class="home-item">
                <img src="picture/semo.jpg" alt="">
                <h3>Semo and soup</h3>
                <p>₦ 2,300</p>
                <button onclick="addToCart('Semo and soup', 2300)" class="show-more" >Add To cart</button>
            </div>

            <div class="home-item">
                <img src="picture/efo.jpg" alt="">
                <h3>Efo riro</h3>
                <p>₦ 2,500</p>
                <button onclick="addToCart('Efo riro', 2500)" class="show-more" >Add To cart</button>
            </div>

            <div class="home-item">
                <img src="picture/poundo.jpg" alt="">
                <h3>Poundo and egusi soup</h3>
                <p>₦ 2,500</p>
                <button onclick="addToCart('Poundo and Egusi', 2500)" class="show-more" >Add To cart</button>
            </div>

            <div class="home-item">
                <img src="picture/roundAbout.jpg" alt="">
                <h3>Pounded yam and soup</h3>
                <p>₦ 3,500</p>
                <button onclick="addToCart('Pounded yam and soup', 3500)" class="show-more" >Add To cart</button>
            </div>

            <div class="home-item">
                <img src="../foober.jpg" alt="">
                <h3>Test Meal</h3>
                <p>₦ 500</p>
                <button onclick="addToCart('Test Meal', 500)" class="show-more" >Add To cart</button>
            </div>
        </div>
    </section>
    
    <footer class="footer">
        <div class="social-icons">
            <a href="#"><i class="fab fa-facebook"></i></a>
            <a href=""><i class="fab fa-twitter"></i></a>
            <a href=""><i class="fab fa-instagram"></i></a>
            <a href=""><i class="fab fa-linkedin"></i></a>
        </div>
        <ul>
            <li><a href="#">About us</a></li>
            <li><a href="#">FAQ</a></li>
            <li><a href="#">Live Chat</a></li>
            <p>&copy; 2025 Foober. All rights reserved.</p>
        </ul>
    </footer>
    <script>
        function toggleSidebar() {
            const sidebar = document.getElementById("sidebar");
            if (sidebar.style.left === "0px") {
                sidebar.style.left = "-250px";
            } else {
                sidebar.style.left = "0px";
            }
        }
    </script>
    <script src="script.js"></script>
</body>
</html>
