<?php
    require_once("../db_connect.php");

    $con = mysqli_connect($servername, $db_username, $db_password, $db_name);

    //IF no connection is made, throws error to console and kills attempt.
    if(!$con){
        die("Connection failed: " .mysqli_connect_error());
    }

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Clothing Store</title>
    </head>
    <body>
        <h1>Clothing Lab #10</h1>
        <?php
        //Pull item, color, price, tax from the database tables
        $sql = "SELECT clothing.item, clothing_color.color, clothing_price.price, clothing_tax.tax 
        FROM clothing 
        INNER JOIN clothing_itemscolors ON clothing.clothing_id = clothing_itemscolors.item_id 
        INNER JOIN clothing_color ON clothing_itemscolors.color_id = clothing_color.color_id 
        INNER JOIN clothing_price ON clothing.price_id = clothing_price.price_id 
        INNER JOIN clothing_tax ON clothing_price.tax_id = clothing_tax.tax_id 
        ORDER BY clothing.item ASC";
        
        //Execute the sql query
        $result = mysqli_query($con, $sql);
        if(!$result){
            die("Access to table failed: " .mysqli_error($con));
        }

        else{
            //FETCH THE RESULTS AND DISPLAY THEM
            while($item = mysqli_fetch_array($result)){
                echo '<p><strong>Clothing Item: </strong> ' . $item["item"] . '<br>
                <strong>Color: </strong>' . $item["color"] . '<br>
                <strong>Price: </strong>' . $item["price"] . '<br>
                <strong>Tax: </strong>' . $item["tax"] . '</p>';
            }
        }
        ?>
        
    </body>
</html>