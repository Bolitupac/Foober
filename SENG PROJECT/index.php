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
<html>
<head>
    <title>Foober - Food Ordering</title>
    <link rel="stylesheet" type="text/css" href="style2.css">
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
</head>
<body>
    <div class="navbar">
        <div class="logo">
            <img src="foober.jpg" alt="Foober Logo">
            <span class="foober-title">Foober</span>
        </div>
        <div class="user-info">
            <?php if (isset($_SESSION['username'])) : ?>
                <p>Welcome, <strong><?php echo $_SESSION['username']; ?></strong>
                    <a href="index.php?logout='1'" style="color: red;">Logout</a>
                </p>
            <?php endif ?>
        </div>
    </div>

    <div class="container">
        <h1>Welcome to Foober!</h1>
        <h4>Food ordering made fast & easy</h4>

        <div class="food-items">
            <div class="food-item">
                <img src="foodpics/burger.jpg" alt="Burger">
                <h3>Burger</h3>
                <p>A juicy beef patty grilled to perfection, served in a soft bun with fresh lettuce, tomatoes, onions, and our special sauce.</p>
                <p>Price: ₦6,500 </p>
                <button>Order Now</button>
            </div>
            <div class="food-item">
                <img src="foodpics/cake.jpg" alt="cake">
                <h3>Cake</h3>
                <p>Deliciously moist and flavorful cake, baked with love. Choose from our variety of flavors, perfect for any occasion.</p>
                <p>Price: ₦9000 </p>
                <button>Order Now</button>
            </div>
            <div class="food-item">
                <img src="foodpics/riceandegg.jpg" alt="riceandegg">
                <h3>Rice and Egg</h3>
                <p>Steamed rice served with a perfectly fried egg and a side of our flavorful stew. A classic Nigerian comfort meal.</p>
                <p>Price: ₦5500 </p>
                <button>Order Now</button>
            </div>
            <div class="food-item">
                <img src="foodpics/salad.jpg" alt="salad">
                <h3>Salad</h3>
                <p>A refreshing mix of fresh vegetables, including lettuce, tomatoes, cucumbers, and carrots, topped with your choice of dressing.</p>
                <p>Price: ₦2500 </p>
                <button>Order Now</button>
            </div>
            <div class="food-item">
                <img src="foodpics/suya.jpg" alt="suya">
                <h3>Suya</h3>
                <p>Spicy and flavorful grilled meat skewers, marinated in a blend of traditional Nigerian spices. A popular street food favorite.</p>
                <p>Price: ₦4000 </p>
                <button>Order Now</button>
            </div>
            <div class="food-item">
                <img src="foodpics/shawarma.jpg" alt="Shawarma">
                <h3>Shawarma</h3>
                <p>Thinly sliced marinated meat, grilled and wrapped in warm pita bread with fresh vegetables and flavorful sauces.</p>
                <p>Price: ₦3,000</p>
                <button>Order Now</button>
            </div>
        </div>
    </div>
</body>
</html>