<?php
    $price = 50;
    $quantity = 3;
    $discount = 20;
    $tax = 5.5;
    $shipping = 25;

    $extendedPrice = $price * $quantity;
    $subtotal = $extendedPrice + $shipping - $discount;
    $taxPercent = $tax / 100;
    $tax = number_format($subtotal * $taxPercent, 2);
    $total = number_format($subtotal + $tax, 2);
    $payments = $total/3;
?>