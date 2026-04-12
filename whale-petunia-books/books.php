<?php
    require_once("../db_connect.php");

    $con = mysqli_connect($servername, $db_username, $db_password, $db_name);

    //IF no connection is made, throws error to console and kills attempt.
    if(!$con){
        die("Connection failed: " .mysqli_connect_error());
    }

?>
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
		<h1>Books</h1>
		<table>
			<tr>
				<th>Author Name</th>
				<th>Book Title</th>
				<th>Format</th>
				<th>Price</th>
				<th>Series</th>
				<th>Inventory</th>
			</tr>
			<?php
				$sql = "SELECT name.first_name, name.middle_name, name.last_name, book.title, format.format, book.price, series.series, book.inventory
						FROM authors name
						JOIN book ON book.author_id = name.author_id
						JOIN book_format format ON format.format_id = book.format_id
						LEFT JOIN book_series series ON series.series_id = book.series_id
						ORDER BY book.book_id";

				$result = mysqli_query($con, $sql);

				if (!$result){
					die("Access to table failed: " . mysqli_error($con));
  			 	}
				else{
					while($item = mysqli_fetch_array($result)){
						echo '<tr><td>' . $item['first_name'] . " " . $item['middle_name'] . " " . $item['last_name'] . '</td><td>' . $item['title'] . '</td><td>' . $item['format'] . '</td><td>' . $item['price'] . '</td><td>' . $item['series'] . '</td><td>' . $item['inventory'] . '</td></tr>';
					}
				}
			?>
		</table>
	</div>

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
