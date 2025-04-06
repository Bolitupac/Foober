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
    <link rel="stylesheet" href="cart_order.css">
    <link rel="shortcut icon" href="../favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="menuStyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>Cart</title>
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
            <li><a href="africanfood.php">African Food</a></li>
        </ul>
    </div>

    <section class="categories">
        <div class="category">
            <li>
                <ul><a href="menu.php">Home</a></ul>
                <ul><a href="fastfood.php">Fast food</a></ul>
                <ul><a href="dessert.php">Dessert</a></ul>
                <ul><a href="africanfood.php">African food</a></ul>
                

            </li>
        </div>
    </section>

    <main>
        <ul id="cart-items"></ul>
        <p>Total: ₦ <span id="cart-total">0.00</span></p>
        <button onclick="clearCart()" >Clear Cart</button>
        <a href="FooberCheckout.php"><button>Checkout</button></a>
    </main>

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
