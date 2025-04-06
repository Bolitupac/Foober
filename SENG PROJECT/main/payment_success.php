<?php
$reference = isset($_GET['reference']) ? $_GET['reference'] : 'Unknown Reference';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../favicon.png" type="image/x-icon">
    <title>Payment Successful</title>
    <style>
        body {
            font-family: sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f4f4f4;
        }

        .success-container {
            width: 400px;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .receipt-container {
            text-align: left;
            margin-top: 20px;
        }

        .receipt-button, .home-button {
            padding: 12px 20px;
            background-color: #ff6600;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 20px;
        }

        .receipt-button:hover, .home-button:hover {
            background-color: #e65c00;
        }
        .home-button{
            background-color: #3498db; /* Different color for home button */
        }
        .home-button:hover{
            background-color: #2980b9;
        }
    </style>
</head>
<body>
    <div class="success-container">
        <h2>Payment Successful!</h2>
        <p>Your order has been received. Your delivery will arrive within 30 minutes.</p>
        <p>Reference: <?php echo htmlspecialchars($reference); ?></p>

        <div class="receipt-container" id="receipt-container">
            <h3>Receipt</h3>
            <ul id="receipt-items">
            </ul>
            <p>Total: <span id="receipt-total">0.00</span></p>
        </div>

        <button class="receipt-button" onclick="window.print()">Print Receipt</button>
        <button class="home-button" onclick="window.location.href = 'menu.php'">Go Home</button>
    </div>

    <script>
        // Retrieve cart data from localStorage
        let cart = JSON.parse(localStorage.getItem("cart")) || [];
        let total = 0;

        // Populate receipt items
        let receiptItems = document.getElementById("receipt-items");
        cart.forEach(item => {
            total += item.price;
            receiptItems.innerHTML += `<li>${item.name} - ₦${item.price.toFixed(2)}</li>`;
        });

        // Populate receipt total
        document.getElementById("receipt-total").textContent = total.toFixed(2);
    </script>
</body>
</html>