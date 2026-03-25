<?php
	//Setup array variables for sizes and two color palettes
	$sizes = array("Small" => "Small", "Medium" => "Medium", "Large" => "Large", "Extra Large" => "Extra Large");
	$colors1 = array("Heather Grey" => "Heather Grey", "Charcoal Grey" => "Charcoal Grey", "White" => "White", "Black" => "Black");
	$colors2 = array("Light Grey" => "Heather Grey", "Charcoal Grey" => "Charcoal Grey", "Olive Green" => "Olive Green");

	//creating function
	function option($option, $value) {
		echo "<option value='value'>$option</option>";
	}
?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<title>Coding Shirt Shop</title>

<link type="text/css" rel="stylesheet" href="style.css" />
</head>

<body>

<div id="wrapper">

<div id="inner-wrapper">

<form action="summary.php" method="post">

<img class="alignleft" src="images/code-superpower-shirt.jpg" alt="Coding is my Superpower!" />

<div class="box">
<h2 class="headings-left">Coding is my Superpower T-shirt</h2>

	<p><strong>Price:</strong> $22.99</p>

	<p><strong>Size: </strong>
		<select name="size">
			<?php
				foreach($sizes as $option => $value) {
					option($option, $value);
				}
			?>
		</select>
	</p>
       
       
	<p><strong>Color: </strong>
       <select name="color">
			<?php
				foreach($colors1 as $option => $value) {
					option($option, $value);
				}
			?>
		</select>
	</p>  
       
       <p><strong>Quantity:</strong> <input type="text" name="qty1" size="5"> </p>

       
    </div> <!-- Closes first shirt info --> 
       
       <hr />
     
	<img class="alignleft" src="images/okayest-php-shirt.jpg" alt="World's Okayest PHP Coder" />

<div class="box">
<h2 class="headings-left">World's Okayest PHP Coder Sweatshirt</h2>

<p><strong>Price:</strong> $35.99</p>

	<p><strong>Size: </strong>
		<select name="size2">
			<?php
				foreach($sizes as $option => $value) {
					option($option, $value);
				}
			?>
		</select>
	</p>
       
    <p><strong>Color: </strong>
		<select name="color2">
			<?php
				foreach($colors2 as $option => $value) {
					option($option, $value);
				}
			?>
		</select>
	</p> 
       
       <p><strong>Quantity:</strong> <input type="text" name="qty2" size="5"> </p>

       
    </div> <!-- Closes second shirt info -->
    
<hr />

<input class="submit" type="submit" value="Submit Order">


</form>

</div> <!-- Closes inner wrapper -->
</div> <!-- Closes wrapper -->

</body>
</html>