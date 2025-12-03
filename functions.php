<?php
// number formatting function
function fm($n) {
    return number_format($n, 2);
}

/*
// calculate subtotal for a given item and quantity
function calculateSubtotal($price, $qty) {
    return $price * $qty;
}

// calculate tax
function calculateTax($subtotal, $taxRate) {
    return $subtotal * $taxRate;
}

// calculate total
function calculateTotal($subtotal, $tax) {
    return $subtotal + $tax;
}
*/

// reorder message
function get_reorder_message(int $stock): string {
    return ($stock < 10) ? "Yes" : "No";
}

// total value
function get_total_value(float $price, int $qty): float {
    return $price * $qty;
}

// tax due
function get_tax_due(float $price, int $qty, int $taxRate = 0): float {
    return ($price * $qty) * ($taxRate / 100);
}
?>
