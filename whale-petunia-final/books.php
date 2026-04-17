<?php
    require_once("../db_connect.php");

    $con = mysqli_connect($servername, $db_username, $db_password, $db_name);

    //IF no connection is made, throws error to console and kills attempt.
    if(!$con){
        die("Connection failed: " .mysqli_connect_error());
    }

?>
<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
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
			
	<h1>Books</h1>
	<div id="book-wrapper-shop">
		
		
			<?php
				$sql = "SELECT name.first_name, name.middle_name, name.last_name, book.title, format.format, book.price, series.series, book.inventory,book.cover_images
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
						$img = !empty($item['cover_images']) ? $item['cover_images'] : "images/books/default.png";

						echo "
						<div class='book-card'>
							<div class='book-image'>
								<img src='" . htmlspecialchars($img) . "' alt='" . htmlspecialchars($item['title']) . " cover image' />
							</div>

							<div class='book-info'>
								<h2 class='book-title'>" . htmlspecialchars($item['title']) . "</h2>
								
								<p class='book-author'>
									By " . htmlspecialchars($item['first_name']) . " " . 
									($item['middle_name'] ? htmlspecialchars($item['middle_name']) . " " : "") . 
									htmlspecialchars($item['last_name']) . "
								</p>

								<p class='book-format'>" . htmlspecialchars($item['format']) . "</p>

								<p class='book-series'>" . 
									($item['series'] 
										? "Part of the " . htmlspecialchars($item['series']) . " series" 
										: "Standalone") . 
								"</p>

								<div class='book-footer'>
									<span class='book-price'>$" . number_format($item['price'], 2) . "</span>
									<span class='book-stock " . ($item['inventory'] > 0 ? "in-stock" : "out-of-stock") . "'>
										" . ($item['inventory'] > 0 ? "In Stock" : "Out of Stock") . "
									</span>
								</div>
							</div>
						</div>
						";
					}
				}
			?>
		
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
