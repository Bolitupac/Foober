<?php
// payment_page.php

// Replace with your Paystack public key
$paystackPublicKey = 'pk_live_b49a7b1a7cacefabfbaea0e306e047b06839a1a8';

// Get the amount from the URL parameter (ensure it's validated)
$amount = isset($_GET['amount']) ? floatval($_GET['amount']) : 0;

// Convert amount to kobo (Paystack's smallest unit)
$amountInKobo = $amount * 100;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../favicon.png" type="image/x-icon">
    <title>Paystack Payment</title>
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

        .payment-container {
            width: 400px;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .payment-button {
            padding: 12px 20px;
            background-color: #ff6600;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        .payment-button:hover {
            background-color: #e65c00;
        }
    </style>
</head>
<body>
    <div class="payment-container">
        <h2>Pay with Paystack</h2>
        <p>Amount: ₦<?php echo number_format($amount, 2); ?></p>
        <button class="payment-button" onclick="payWithPaystack()">Pay Now</button>
    </div>

    <script src="https://js.paystack.co/v1/inline.js"></script>
    <script>
        function payWithPaystack() {
            let handler = PaystackPop.setup({
                key: '<?php echo $paystackPublicKey; ?>', // Replace with your public key
                email: 'customer@example.com', // Replace with customer's email
                amount: <?php echo $amountInKobo; ?>, // Amount in kobo
                currency: 'NGN',
                ref: '' + Math.floor((Math.random() * 1000000000) + 1), // Generate a unique reference
                onClose: function(){
                    alert('Transaction was not completed.');
                },
                callback: function(response){
                    let message = 'Payment complete! Reference: ' + response.reference;
                    alert(message);
                    // You can redirect to a success page or perform other actions here
                    window.location.href = "payment_success.php?reference=" + response.reference;
                }
            });
            handler.openIframe();
        }
    </script>
</body>
</html>