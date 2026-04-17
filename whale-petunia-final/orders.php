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
	
<header>	
	<div id="header-content">
			<img src="images/whale-petunia-logo.png" alt="Whale and Petunia Book Shoppe logo" />
			<nav>
				<ul>
					<li><a href="index.html">Home</a></li>
					<li><a href="about.html">About</a></li>
					<li><a href="orders.php">Order</a></li>
					<li><a href="books.php">Books</a></li>
					<li><a href="#">Contact</a></li>
				</ul>
			</nav>
	</div> <!-- Closes header-content -->
</header>
			
	
	<div id="wrapper-shop">
	<h1>Place an Order</h1>
		<div id="shop-content" class="ordersummary">
			

			<form method="post" action="order-summary.php">
				<table class="order-table">
					<tr>
						<th>Book Title</th>
						<th>Price</th>
						<th>Quantity</th>
					</tr>
					<tr>
						<td>Dune</td>
						<td>$21.99</td>
						<td class="quantity"><input type="number" id="name" name="dunequantity"></td>
					</tr>
					<tr>
						<td>ACOTAR</td>
						<td>$31.99</td>
						<td class="quantity"><input type="number" id="name" name="acotarquantity"></td>
					</tr>
					<tr>
						<td>Throne of Glass</td>
						<td>$24.99</td>
						<td class="quantity"><input type="number" id="name" name="togquantity"></td>
					</tr>

					<tr>
						<td colspan="2">
							<p><strong>Select a shipping option:</strong> </p>
						<td>
							<select name="shipping">
								<?php
								include "php/variables.php";
								$shipping_options = array("Overnight - $15" => 15,
									"First Class - $10" => 10,
									"Third Class - $5" => 5);
								foreach ($shipping_options as $option => $value) {
									option($option, $value);
								}
								?>
							</select>
						</td>
					</tr>
					<tr>
						<td colspan="2">
							<p><strong>Please provide your name: </strong></p>
						</td>
						<td>
							<input type="text" id="name" name="name">
						</td>
					</tr>
					
				</table>
				<input type="submit" value="Submit Order">
			</form>

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
