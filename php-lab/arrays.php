<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>PHP Arrays</title>
    </head>
    <body>
        <?php
            $size = array(
                        array("Small", 4, 10), 
                        array("Medium", 7, 6), 
                        array("Large", 12, 3));

            for( $i = 0; $i < 3; $i++ ) {
                echo "<p>Shirt Size: " . $size[$i][0] . "<br>In Stock: " . $size[$i][1] . "<br>Number Sold: " . $size[$i][2] . "<br></p>";
            }
        ?>
    </body>
</html>