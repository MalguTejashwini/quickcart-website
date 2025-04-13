<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Confirmation - QuickCart</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50">
    <div class="container mx-auto px-4 py-8 text-center">
        <h1 class="text-3xl font-bold text-gray-800 mb-4">Thank You for Your Order!</h1>
        <p class="text-lg text-gray-600 mb-6">Your order has been placed successfully. You'll receive a confirmation email soon.</p>
        <a href="index.php" class="bg-green-600 hover:bg-green-700 text-white px-6 py-3 rounded-md font-medium">Continue Shopping</a>
    </div>
</body>
</html>