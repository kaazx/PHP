<?php
// enable strict types
declare (strict_types=1);

// include functions file
include 'functions.php';

// variables
$restoName = "Buri";

// menu items and prices as arrays for easy access
$ramens = [
    "Miso Ramen" => ["price" => 299.00, "stock" => 7],
    "Tonkotsu Ramen" => ["price" => 329.00, "stock" => 15],
    "Mala Ramen" => ["price" => 399.00, "stock" => 22],
    "Shio Ramen" => ["price" => 429.00, "stock" => 8]
];
$tacos = [
    "Crab Taco" => ["price" => 199.00, "stock" => 9],
    "EBI Tempura Taco" => ["price" => 199.00, "stock" => 16],
    "Salmon and Tuna Taco" => ["price" => 229.00, "stock" => 25],
    "Salmon Panko Taco" => ["price" => 229.00, "stock" => 14]
];

// sample order summary
$orderedCategory = "Ramens";
$orderedIndex = 1; // Tonkotsu Ramen
$qty = 2;
$taxRate = 0.10;

// get ordered items through conditional statement
if ($orderedCategory == "Ramens") {
    $orderedItem = $ramens[$orderedIndex]['item'];
    $unitPrice = $ramens[$orderedIndex]['price'];
} else {
    $orderedItem = $tacos[$orderedIndex]['item'];
    $unitPrice = $tacos[$orderedIndex]['price'];
}

// expressions and operations
$subtotal = calculateSubtotal($unitPrice, $qty);
$tax = calculateTax($subtotal, $taxRate);
$total = calculateTotal($subtotal, $tax);
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
        h1 { font-size: 48px; }
        h2 { font-size: 36px; }
        h3 { font-size: 24px; }
        p { font-size: 18px; }
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
            margin-left: 180px;
            margin-bottom: 30px;}
        .ramen-menu td + td { padding-left: 220px; }
        .taco-menu td + td { padding-left: 90px; }
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
            <h3>Sample Order Summary</h3>
            <p>Item Ordered: <?= $orderedItem ?></p>
            <p>Quantity: <?= $qty ?></p>
            <p>Price per Item: <?= fm($unitPrice) ?></p>
            <p>Subtotal: <?= fm($subtotal) ?></p>
            <p>Tax (10%): <?= fm($tax) ?></p>
            <p><strong>Total: <?= fm($total) ?></strong></p>
        </div>
    </div>
</body>






