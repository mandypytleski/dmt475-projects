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
                    <li><a href="orders.html">Order</a></li>
                    <li><a href="#">Books</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </nav>
    </div> <!-- Closes header-content -->
</header>
            
    
    <div id="wrapper-shop">
    
        <div id="shop-content" class="ordersummary">
            <h1>Order Summary</h1>
            <h2>Thank you <?php echo $name;?> for purchasing from Whale and Petunia Book Shoppe</h2>
            <div class="order-table">
            <?php if($duneQty == 0 && $acotarQty == 0 && $togQty == 0)
            {	echo "You did not order anything!";
            }
            else{
                echo "
        <table>
            <tr>
                <th>Book</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Extended price</th>
            </tr>";
            
            if($duneQty > 0) {
                echo "<tr>
                <td>Dune</td>
                <td>$duneQty</td>
                <td>$$dunePrice</td>
                <td>$" . ($duneQty * $dunePrice) . "</td>
                </tr>";
            }
            
            if($acotarQty > 0) {
                echo "<tr>
                <td>ACOTAR</td>
                <td>$acotarQty</td>
                <td>$$acotarPrice</td>
                <td>$" . ($acotarQty * $acotarPrice) . "</td>
                </tr>";
            }
            
            if($togQty > 0) {
                echo "<tr>
                <td>Throne of Glass</td>
                <td>$togQty</td>
                <td>$$togPrice</td>
                <td>$" . ($togQty * $togPrice) . "</td>
                </tr>";
            }
            
            echo "
            <tr>
                <td class='left-data' colspan='3'>Shipping</td>
                <td>$$shipping</td>
            </tr>
            <tr>
                <td class='left-data' colspan='3'>Discount</td>
                <td>$$discount</td>
            </tr>
            <tr>
                <td class='left-data' colspan='3'>Subtotal</td>
                <td>$$subtotal</td>
            </tr>
            <tr>
                <td class='left-data' colspan='3'>Tax(5.5%)</td>
                <td>$" . number_format($tax, 2) . "</td>
            </tr>
            <tr>
                <td class='left-data' colspan='3'>Total</td>
                <td>$" . number_format($total, 2) . "</td>
            </tr>
        </table>
        <p>Divided over 3 monthly payments, that would be $" . number_format($payments, 2) . " each</p>
    ";
            }
            ?>
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
