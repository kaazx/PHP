<?php 
$restoName = "Buri";

$ramens = ["Midori Ramen", "Tonkotsu Ramen", "Mala Ramen", "Shio Ramen"];

$prices = [299.00, 329.00, 399.00, 429.00];

$orderedItem = $ramens[1]; // Tonkotsu Ramen
$qty = 2;
$subtotal = $prices[1] * $qty;
$taxRate = 0.10;
$tax = $subtotal * $taxRate;
$total = $subtotal + $tax;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name ="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $restoName; ?></title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            background-image: url("buri.png");
            background-size: cover;
        }
        .container {
            max-width: 800px;
            margin: 80px auto;
            text-align: center;
            background-color: rgba(255, 255, 255, 0.5);
            padding: 20px;
        }
        .menu-section {
            text-align: left;
        }
        table {
            width: 70%;
            border-collapse: collapse;
            margin-left: 160px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1><?php echo $restoName; ?></h1>
        <h2>The Menu</h2>

        <div class="menu-section">
        <table>
            <tr>
                <th>Ramen</th>
                <th>Price</th>
            </tr>
            <tr>
                <td><?= $ramens[0] ?></td>
                <td>$<?= $prices[0] ?></td>
            </tr>
            <tr>
                <td><?= $ramens[1] ?></td>
                <td>$<?= $prices[1] ?></td>
            </tr>
            <tr>
                <td><?= $ramens[2] ?></td>
                <td>$<?= $prices[2] ?></td>
            </tr>
            <tr>
                <td><?= $ramens[3] ?></td>
                <td>$<?= $prices[3] ?></td>
            </tr>
        </table>
        </div>

        <div class="sample-order-summary">
            <h2>Order Summary</h2>
            <p>Item Ordered: <?= $orderedItem ?></p>
            <p>Quantity: <?= $qty ?></p>
            <p>Price per Item: $<?= $prices[1] ?></p>
            <p>Subtotal: $<?= number_format($subtotal, 2) ?></p>
            <p>Tax (10%): $<?= number_format($tax, 2) ?></p>
            <p><strong>Total: $<?= number_format($total, 2) ?></strong></p>
        </div>
</body>

