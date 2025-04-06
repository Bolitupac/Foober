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
    <link rel="shortcut icon" href="../favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="menuStyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>Profile</title>
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

    <section class="profile-container">
        <div class="profile-card">
            <h2>User Profile</h2>
            <div class="profile-info">

            <?php if (isset($_SESSION['username'])) : ?>

                <p><strong>Name:</strong><?php echo $_SESSION['username']; ?></p> 
            <?php endif ?>
            </div>
            <button class="deposit-button"><a href="../index.php?logout='1'" style="color: red;">Logout</a></button>
        </div>
    </section>
    
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