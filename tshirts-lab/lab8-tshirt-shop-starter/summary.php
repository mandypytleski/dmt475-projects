<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<title>Coding Shirt Shop</title>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>

<div id="wrapper">

<header>
	<h1>Coding Shirt Shop</h1>
	<h2>Thank you for your order</h2>
</header>


<?php
	
	$qty1 = $_POST['qty1'];
	$qty2 = $_POST['qty2'];
	$color = $_POST['color'];
	$color2 = $_POST['color2'];
	$size = $_POST['size'];
	$size2 = $_POST['size2'];
	$total_shirts = $qty1 + $qty2;
	$shipping = 5;
	
	if ($total_shirts == 0){
		echo "You did not order anything!";
		
	} else {
		echo "<table>";
		echo "<tr>
			  <th width='150'> Shirt </th>
			  <th align='center'>Size</th>
			  <th align='center'>Color</th>
			  <th align='center'>Price</th>
			  <th align='center'> Quantity Ordered </th>
			  <th align='center'>Extended Price</th>";
		
		if ($qty1 > 0){
			echo "<tr>
					<td><img src='images/code-superpower-shirt.jpg' alt='Coding is my Superpower!' width='145' /></td>
					<td align='center'>$size</td>
			  		<td align='center'>$color</td>
					<td align='center'>$22.99</td>
					<td align='center'> $qty1 </td>
					<td align='center'>$".number_format($qty1 * 22.99,2). "</td>
				</tr>";
		}
		
		if ($qty2 > 0){
			echo "<tr>
					<td><img src='images/okayest-php-shirt.jpg' alt='World's Okayest PHP Coder' width='145' /></td>
					<td align='center'>$size2</td>
			  		<td align='center'>$color2</td>
					<td align='center'>$35.99</td>
					<td align='center'> $qty2 </td>
					<td align='center'>$".number_format($qty2 * 35.99,2). "</td>
				</tr>";
		}
		}
					
		$total_amount = $qty1 * 22.99
					+ $qty2 * 35.99;
					
		echo "<tr>
				<td colspan='5' align='right'><strong>Subtotal: </strong></td>
				<td align='center'>$".number_format($total_amount, 2) ."</td>
			  </tr>";		
		
		$tax_rate = 0.055; // local sales tax
		$tax = (($total_amount + $shipping) * $tax_rate);
		
		echo "<tr>
				<td colspan='5' align='right'><strong>Shipping:</strong></td>
				<td align='center'>$".number_format($shipping, 2) ."</td>
			  </tr>";	 
		
		echo "<tr>
				<td colspan='5' align='right'><strong>Tax:</strong></td>
				<td align='center'>$".number_format($tax, 2) ."</td>
			  </tr>";	 

		$total_amount += $tax + $shipping;
		
		echo "<tr>
				<td colspan='5' align='right'><strong>Grand Total:</strong></td>
				<td align='center'>$".number_format($total_amount, 2) ."</td>
			  </tr>";
		?>
		
	    </table>

</div> <!-- closes wrapper -->
</body>
</html>	