<?php
// number formatting function
function fm($n) {
    return number_format($n, 2);
}

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
?>