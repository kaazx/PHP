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
            background-size: cover;
            background-attachment: fixed;}
        h1 { font-size: 48px; }
        h2 { font-size: 36px; }
        h3 { font-size: 24px; }
        p { font-size: 18px; }
        .container {
            max-width: 800px;
            margin: 80px auto;
            text-align: center;
            background-color: rgba(255, 255, 255, 0.70);
            padding: 20px;
            overflow-y: auto;}
        table {
            text-align: left;
            width: 100%;
            border-collapse: collapse;
            table-layout: auto;
            margin: 0 auto;
            margin-bottom: 50px;}
        th, td {
            padding: 10px 12px;
            height: auto;
            vertical-align: middle;}
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
            
            <?php foreach($ramens as $product_name => $data): ?>
            <tr>
                <td><?= $product_name ?></td>
                <td><?= $data['stock'] ?></td>
                <td><?= get_reorder_message($data['stock']) ?></td>
                <td>₱<?= fm(get_total_value($data['price'], $data['stock'])) ?></td>
                <td>₱<?= fm(get_tax_due($data['price'], $data['stock'], $taxRate)) ?></td>
            </tr>
            <?php endforeach; ?>

            <?php foreach($tacos as $product_name => $data): ?>
            <tr>
                <td><?= $product_name ?></td>
                <td><?= $data['stock'] ?></td>
                <td><?= get_reorder_message($data['stock']) ?></td>
                <td>₱<?= fm(get_total_value($data['price'], $data['stock'])) ?></td>
                <td>₱<?= fm(get_tax_due($data['price'], $data['stock'], $taxRate)) ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
    </div>
</body>
</html>
