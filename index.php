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

// tax rate in percentage
$taxRate = 10;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name ="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buri</title>
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

        <table>
            <tr>
                <th>Product</th>
                <th>Stock</th>
                <th>Re-order</th>
                <th>Total Value</th>
                <th>Tax Due</th>
            </tr>
            
            <?php foreach($ramens as $ramen => $details): ?>
            <tr>
                <td><?= $ramen ?></td>
                <td><?= $details['stock'] ?></td>
                <td><?= get_reorder_message($details['stock']) ?></td>
                <td><?= fm(get_total_value($details['price'], $details['stock'])) ?></td>
                <td><?= fm(get_tax_due($details['price'], $details['stock'], $taxRate)) ?></td>
            </tr>
            <?php endforeach; ?>

            <?php foreach($tacos as $taco => $details): ?>
            <tr>
                <td><?= $taco ?></td>
                <td><?= $details['stock'] ?></td>
                <td><?= get_reorder_message($details['stock']) ?></td>
                <td><?= fm(get_total_value($details['price'], $details['stock'])) ?></td>
                <td><?= fm(get_tax_due($details['price'], $details['stock'], $taxRate)) ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
    </div>
</body>







