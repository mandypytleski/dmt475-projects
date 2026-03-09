<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Whale and Petunia Book Shoppe</title>
    <link rel="stylesheet" href="css/reset.css" type="text/css">
    <link rel="stylesheet" href="css/styles.css" type="text/css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css2?family=Goudy+Bookletter+1911&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
</head>

<body>
	<?php
		include "php/variables.php";
	?>
<header>	
	<div id="header-content">
			<img src="images/whale-petunia-logo.png" alt="Whale and Petunia Book Shoppe logo" />
			<nav>
				<ul>
					<li><a href="index.html">Home</a></li>
					<li><a href="about.html">About</a></li>
					<li><a href="#">Books</a></li>
					<li><a href="#">Contact</a></li>
				</ul>
			</nav>
	</div> <!-- Closes header-content -->
</header>
			
	
	<div id="wrapper-shop">
	
		<div id="shop-content" class="ordersummary">
			<h1>Order Summary</h1>
			<h2>Thank you for purchasing from Whale and Petunia Book Shoppe</h2>
	
			<div class="order-table">
		<table>
			<tr>
				<th>Quantity</th>
				<th>Price</th>
				<th>Extended price</th>
			</tr>
			<tr>
				<td><?php echo $quantity; ?></td>
				<td>$<?php echo $price; ?></td>
				<td>$<?php echo $extendedPrice; ?></td>
			</tr>
			<tr>
				<td class="left-data" colspan="2">Shipping</td>
				<td>$<?php echo $shipping; ?></td>
			</tr>
			<tr>
				<td class="left-data" colspan="2">Discount</td>
				<td>$<?php echo $discount; ?></td>
			</tr>
			<tr>
				<td class="left-data" colspan="2">Subtotal</td>
				<td>$<?php echo $subtotal; ?></td>
			</tr>
			<tr>
				<td class="left-data" colspan="2">Tax(5.5%)</td>
				<td>$<?php echo number_format($tax, 2); ?></td>
			</tr>
			<tr>
				<td class="left-data" colspan="2">Total</td>
				<td>$<?php echo number_format($total, 2); ?></td>
			</tr>
		</table>
		<p>Divided over 3 monthly payments, that would be $<?php echo number_format($payments, 2); ?> each</p>
	</div>
		


		</div> <!-- Closes shop-content -->
	
	
	</div> <!-- Closes wrapper-shop -->
		

	
	<footer>
		<div id="footer-content">
		
			<div id="footer-left">
				<h3>Whale &amp; Petunia Book Shoppe</h3>
				<p>214 East Main Street<br>
					Menomonie, WI 54751</p>
				<p>P: (715) 233-6252<br>
				E: books@whalepetunia.com</p>
			</div>
			
			<div id="footer-right">
				<h3>Hours of Operation</h3>
				<p>Monday - Saturday: 8 am - 10 pm<br>
				   Sunday: 8 am - 4 pm</p>

				<p>Copyright © 2019 Whale and Petunia Book Shoppe.<br>All rights reserved.</p>
			</div>
			
		</div> <!-- Closes footer-content -->
	</footer>
		
	
	
</body>
</html>
