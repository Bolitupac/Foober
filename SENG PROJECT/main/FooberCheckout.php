<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $location = $_POST['location'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <link rel="stylesheet" href="checkout.css">
    <link rel="shortcut icon" href="../favicon.png" type="image/x-icon">
    <style>
        .back-button {
            padding: 10px 15px;
            background-color: #f0f0f0;
            border: 1px solid #ccc;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            margin: 10px;
        }

        .back-button:hover {
            background-color: #e0e0e0;
        }

        .pay-button {
            padding: 12px 20px;
            background-color: #ff6600;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 20px;
            display: block;
            width: 100%;
            text-align: center;
        }

        .pay-button:hover {
            background-color: #e65c00;
        }

        .pay-button[disabled] {
            background-color: #ccc;
            cursor: not-allowed;
        }
    </style>
</head>

<body>
    <header>
        <button onclick="window.history.back()" class="back-button">Back</button>
    </header>

    <div class="checkout-container">
        <form method="post" id="checkout-form">
            <h2>Delivery Address</h2>
            <input type="text" id="location" name="location" placeholder="Your location will appear here" readonly required>
            <button type="button" onclick="getLocation()" class="location-btn">Use My Location</button>

            <h2>Phone Number</h2>
            <input type="number" name="phone" placeholder="Enter Phone Number" required>

            <h2>Order Summary</h2>
            <div class="order-summary">
                <ul id="order-list"></ul>
                <ul id="cart-items"></ul>
                <h3>Total: <span id="cart-total">0.00</span></h3> 
            </div>

            <h2>Payment Method</h2>
            <select name="payment-method" id="payment-method" required>
                <option value="">Select Payment Method</option>
                <option value="paystack">Paystack</option>
            </select>

            <button type="button" onclick="redirectToPayment()" class="pay-button" id="payButton" disabled>Pay Now</button>
            
        </form>
    </div>

    <script>
        function getLocation() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(function(position) {
                    let latitude = position.coords.latitude;
                    let longitude = position.coords.longitude;
                    document.getElementById("location").value = latitude + ", " + longitude;
                }, function(error) {
                    alert("Error getting location: " + error.message);
                });
            } else {
                alert("Geolocation is not supported by your browser.");
            }
        }

        function redirectToPayment() {
          let totalAmount = document.getElementById("cart-total").textContent;
          window.location.href = "payment_page.php?amount=" + encodeURIComponent(totalAmount);
        }

        // Enable/disable the pay button based on form validity
        const form = document.getElementById('checkout-form');
        const payButton = document.getElementById('payButton');

        form.addEventListener('change', () => {
            if (form.checkValidity()) {
                payButton.disabled = false;
            } else {
                payButton.disabled = true;
            }
        });

        // initial check on load
        if (form.checkValidity()) {
                payButton.disabled = false;
            } else {
                payButton.disabled = true;
            }

    </script>

    <script src="script.js"></script>
</body>
</html>