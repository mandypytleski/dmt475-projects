<?php
    function option($option,$value){
        echo "<option value='$value'>$option</option>\n";
    }
    
    $duneQty = $_POST['dunequantity'];
    $acotarQty = $_POST['acotarquantity'];
    $togQty = $_POST['togquantity'];

    $dunePrice = 21.99;
    $acotarPrice = 31.99;
    $togPrice = 24.99;

    $shipping = $_POST['shipping'];
    $name = $_POST['name'];
    $tax = 5.5;
    $discount = 10;



    $extendedPrice = $dunePrice * $duneQty + $acotarPrice * $acotarQty + $togPrice * $togQty;
    $subtotal = $extendedPrice + $shipping - $discount;
    $taxPercent = $tax / 100;
    $tax = number_format($subtotal * $taxPercent, 2);
    $total = number_format($subtotal + $tax, 2);
    $payments = $total/3;
?>