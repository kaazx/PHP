<?php 
// variables
$restoName = "Buri";

// menu items and prices as arrays for easy access
$ramens = [
    ["item" => "Miso Ramen", "price" => 299.00],
    ["item" => "Tonkotsu Ramen", "price" => 329.00],
    ["item" => "Mala Ramen", "price" => 399.00],
    ["item" => "Shio Ramen", "price" => 429.00]
];
$tacos = [
    ["item" => "Crab Taco", "price" => 199.00],
    ["item" => "EBI Tempura Taco", "price" => 199.00],
    ["item" => "Salmon and Tuna Taco", "price" => 229.00],
    ["item" => "Salmon Panko Taco", "price" => 229.00]
];

// sample order summary
$orderedItem = $ramens[1]; // Tonkotsu Ramen
$qty = 2;
// expressions and operations
$subtotal = $prices[1] * $qty;
$taxRate = 0.10;
$tax = $subtotal * $taxRate;
$total = $subtotal + $tax;

// format for numbers
function fm($n) {
    return number_format($n, 2);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name ="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $restoName; ?></title>
    <!-- simple CSS -->
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            background-image: url("buri.png");
            background-size: cover;}
        .container {
            max-width: 800px;
            margin: 80px auto;
            text-align: center;
            background-color: rgba(255, 255, 255, 0.5);
            padding: 20px;}
        table {
            text-align: left;
            width: 70%;
            border-collapse: collapse;
            margin-left: 160px;
            margin-bottom: 10px;}
    </style>
</head>
<body>
    <div class="container">
        <h1><?php echo $restoName; ?></h1>
        <h2>The Menu</h2>

        <div class="ramen-menu">
        <table>
            <tr>
                <th>Ramen</th>
            </tr>
            <?php foreach($ramens as $r): ?>
            <tr>
                <td><?php echo $r['item']; ?></td>
                <td><?php echo fm($r['price']); ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
        </div>    

        <div class="taco-menu">
        <table>
            <tr>
                <th>Taco Sushi</th>
            </tr>
            <?php foreach($tacos as $t): ?>
            <tr>
                <td><?php echo $t['item']; ?></td>
                <td><?php echo fm($t['price']); ?></td>
            </tr>
            <?php endforeach; ?>
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



