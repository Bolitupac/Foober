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
            <li><a href="dessert.php">Dessert</a></li>
            <li><a href="africanfood.php">African Food</a></li>
        </ul>
    </div>

    <section class="categories">
        <div class="category">
            <li>
                <ul><a href="menu.php">Home</a></ul>
                <ul><a href="fastfood.php">Fast Food</a></ul>
                <ul><a href="africanfood.php">African food</a></ul>
            </li>
        </div>
    </section>

    <section class="home">
        <h2>Fast food</h2>
        <div class="home-container">
            <div class="home-item">
                <img src="picture/burger.jpg" alt="">
                <h3>burger</h3>
                <p>₦ 3,500</p>
                <button onclick="addToCart('Burger', 3500)" class="show-more" >Add To cart</button>
            </div>

            <div class="home-item">
                <img src="picture/pizza.jpg" alt="">
                <h3>Pizza</h3>
                <p>₦ 10,000</p>
                <button onclick="addToCart('Pizza', 10000)" class="show-more" >Add To cart</button>
            </div>

            <div class="home-item">
                <img src="picture/friedrice.jpg" alt="">
                <h3>Fried rice</h3>
                <p>₦ 3,000</p>
                <button onclick="addToCart('Fried Rice', 3000)" class="show-more" >Add To cart</button>
            </div>

            <div class="home-item">
                <img src="picture/jollof.jpg" alt="">
                <h3>Jollof</h3>
                <p>₦ 3,000</p>
                <button onclick="addToCart('Jollof Rice', 3000)" class="show-more" >Add To cart</button>
            </div>

            <div class="home-item">
                <img src="picture/hotdog.jpg" alt="">
                <h3>Hot dogs</h3>
                <p>₦ 2,000</p>
                <button onclick="addToCart('Hot Dog', 2000)" class="show-more" >Add To cart</button>
            </div>

            <div class="home-item">
                <img src="picture/sharwarma.jpg" alt="">
                <h3>Sharwarma</h3>
                <p>₦ 2,500</p>
                <button onclick="addToCart('Shawarma', 2500)" class="show-more" >Add To cart</button>
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
